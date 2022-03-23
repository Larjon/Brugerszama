<?php
    session_start();
    require 'config.php';
    if(!isset($_SESSION['email'])){
        header('location:products.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>      
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Ustawienia</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container">
            <br><br><br>
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1>Zamiana hasła</h1>
                        <br>
                        <form method="post" action="setting_script.php">
                            <div class="form-group">
                                <input type="password" class="form-control" name="oldPassword" placeholder="Stare hasło">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="newPassword" placeholder="Nowe hasło">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="retype" placeholder="Powtórz hasło">
                            </div>
                            <div class="form-group">
                                <br>
                                <input type="submit" class="btn btn-primary" value="Zmień">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
            <footer id="footerr">
      <h1>BURGERSZAMA &copy; Smacznego!</h1>
    </footer>
        </div>
    </body>
</html>
