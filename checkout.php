<?php

@include 'config.php';
session_start();

if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $city = $_POST['city'];
   $state = $_POST['state'];

   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price = number_format($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
      };
   };
  
   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, city, state, total_products, total_price) VALUES('$name','$number','$email','$method','$city','$state','$total_product','$price_total')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>Dziękujemy za zakupy!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> Suma : $".$price_total." zł  </span>
         </div>
         <div class='customer-details'>
            <p> Imię : <span>".$name."</span> </p>
            <p> Numer : <span>".$number."</span> </p>
            <p> E-mail : <span>".$email."</span> </p>
            <p> Adres : <span>".$city.", ".$state."</span> </p>
            <p> Metoda płatności : <span>".$method."</span> </p>
            <p>(*zapłać, gdy produkt dotrze*)</p>
         </div>
            <a href='products.php' class='btn'>Kontynuuj zakupy</a> 
         </div>
      </div>
      ";
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'header.php'; ?>
<br>
<br>
<br>
<br>
<div class="container">

<section class="checkout-form">

   <h1 class="heading">Twoje zamówienie</h1>
<br>
   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total = $total += $total_price;
      ?>
      <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>Twój koszyk jest pusty!</span></div>";
      }
      ?>
      <span class="grand-total"> Suma : <?= $grand_total; ?> zł </span>
   </div>
<br>
      <div class="flex">
         <div class="inputBox">
            <span>Twoje imię</span>
            <input type="text" placeholder="Imię" name="name" required>
         </div>
         <div class="inputBox">
            <span>Numer telefonu</span>
            <input type="number" placeholder="nr. Telefonu" name="number" required>
         </div>
         <div class="inputBox">
            <span>Email</span>
            <input type="email" placeholder="Email" name="email" required>
         </div>
         <div class="inputBox">
            <span>Metoda płatności</span>
            <select name="method">
               <option value="płatnosć gotówka przy dobiorze" selected>Gotówka przy odbierze</option>
            
            </select>
         </div>
         <div class="inputBox">
            <span>miasto</span>
            <input type="text" placeholder="np. Gdańsk" name="city" required>
         </div>
         <div class="inputBox">
            <span>ulica</span>
            <input type="text" placeholder="np. Słoneczna" name="state" required>
         </div>
      </div>
      <input type="submit" value="Zamów" name="order_btn" class="btn">
   </form>

</section>

</div>

<script src="js/script.js"></script>
   
</footer>
        </div>
        <footer id="footerr">
      <h2>BURGERSZAMA &copy; Smacznego!</h2>
    </footer>
  </body>
</html>