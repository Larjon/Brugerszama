<?php
    require 'config.php';
    session_start();
    $name= mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "Nieprawidłowy email. Przekierowanie z powrotem do strony rejestracji...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $password=md5(md5(mysqli_real_escape_string($conn,$_POST['password'])));
    if(strlen($password)<6){
        echo "Hasło powinno mieć co najmniej 6 znaków. Przekierowanie z powrotem do strony rejestracji...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $contact=$_POST['contact'];
    $city=mysqli_real_escape_string($conn,$_POST['city']);
    $address=mysqli_real_escape_string($conn,$_POST['address']);
    $duplicate_user_query="select id from users where email='$email'";
    $duplicate_user_result=mysqli_query($conn,$duplicate_user_query) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){

        //duplikat rejestracji
        //header('location: signup.php');

        ?>
        <script>
            window.alert("E-mail już istnieje w naszej bazie danych!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" />
        <?php
    }else{
        $user_registration_query="insert into users(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($conn,$user_registration_query) or die(mysqli_error($conn));
        echo "Użytkownik pomyślnie zarejestrowany";
        $_SESSION['email']=$email;
        $_SESSION['id']=mysqli_insert_id($conn); 
        //header('location: products.php');  
        ?>
        <meta http-equiv="refresh" content="3;url=products.php" />
        <?php
    }
    
?>