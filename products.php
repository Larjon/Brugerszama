<?php
session_start();
@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'Produkt dodany do koszyka';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'Produkt dodany';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>BURGERSZAMA</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'header.php'; ?>

<section class="showcase-area" id="showcase">
      <div class="showcase-container">
        <h1 class="main-title" id="home">Pora na cos smacznego</h1>
        <p>Naszą specjalnością jest zadowolenie kientów</p>
        <a href="#food-menu" class="btn btn-primary">Przekonaj się sam</a>
      </div>
    </section>

    <section id="food">
    <div class="showcase-container">
    <h1 class="main-title">Nasza oferta</h1>
    <br>
    </div>
      <div class="food-container container">
        
      <?php  
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
         
            <h3><?php echo $fetch_product['name']; ?></h3>
            <br>
            <div class="price"><?php echo $fetch_product['price']; ?> zł</div><br>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            
            <?php if(isset($_SESSION['email'])){  ?>
               <input type="submit" class="btn" value="Dodaj do koszyka" name="add_to_cart">
                           
            <?php
            }                              
            ?>

         </div>
      </form>

      <?php
         };
      };
      ?>
        </div>
    </section>
    <section id="testimonials">
      <h2 class="testimonial-title">Co mówia o nas inni</h2>
      <div class="testimonial-container container">
        <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <img src="https://i.postimg.cc/5Nrw360Y/male-photo1.jpg" alt="" />
              <p class="customer-name">Jan Kowalski</p>
            </div>
          </div>
          <div class="star-rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
          <p class="testimonial-text">
            Fajna burgerowania, dobre jedzenie, przystępna cena. Polecam 
          </p>
        </div>
        <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <img
                src="https://i.postimg.cc/sxd2xCD2/female-photo1.jpg"
                alt=""
              />
              <p class="customer-name">Amelia Nowal</p>
            </div>
          </div>
          <div class="star-rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
          <p class="testimonial-text">
            Uwielbiam tutaj chodzić, mili ludzie i obsługa.
          </p>         
        </div>
        <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <img src="https://i.postimg.cc/fy90qvkV/male-photo3.jpg" alt="" />
              <p class="customer-name">Igor Bąk</p>
            </div>
          </div>
          <div class="star-rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
          <p class="testimonial-text">
           Swietne burgery. POLECAM!
          </p>        
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="contact-container container">
        <div class="contact-img">
          <img src="https://i.postimg.cc/1XvYM67V/restraunt2.jpg" alt="" />
        </div>
        <div class="form-container">
          <h2>Masz pytania?</h2>
          <input type="text" placeholder="Twoje imie" />
          <input type="email" placeholder="E-Mail" />
          <textarea
            cols="30"
            rows="6"
            placeholder="Twoja wiadomość"
          ></textarea>
          <a href="#" class="btn btn-primary">Wyślij</a>
        </div>
      </div>
    </section>
    <br><br><br><br>
    <footer id="footer">
      <h2>BURGERSZAMA &copy; Smacznego!</h2>
    </footer>
  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {  
      $("a").on("click", function (event) {   
        if (this.hash !== "") {    
          event.preventDefault();
          var hash = this.hash;
            $("html, body").animate(
            {
              scrollTop: $(hash).offset().top,
            },
            800,
            function () {
              window.location.hash = hash;
            }
          );
        } 
      });
    });
  </script>
</html>
