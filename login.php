<?php
    require 'config.php';
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Logowanie</title>
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
            <br><br><br>
           <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                            <h1><b>Zaloguj się</b></h1>
                                <br>
                            </div>
                            <div class="form">
                                <p>Zaloguj się aby złożyć zamówienie</p>
                                <br>
                                <form method="post" action="login_submit.php">

        
                                <div class="input-container ic1">
                                        <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="input-container ic1">
                                        <input type="password" class="form-control" name="password" placeholder="Hasło min: 6 znaków" pattern=".{6,}">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Zaloguj" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                            <br>
                            <br>

                            <div class="panel-footer">Nie masz konta? <a href="signup.php">Zarejestruj się</a></div>
                        </div>
                    </div>
                </div>
           </div>
           <br><br><br><br><br>
        </div>
        <footer id="footerr">
      <h1>BURGERSZAMA &copy; Smacznego!</h1>
    </footer>
  </body>
</html>