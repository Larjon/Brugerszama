
<nav class="navbar">
      <div class="navbar-container container">
          <input type="checkbox" name="" id="">
          <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
          </div>
          <ul class="menu-items">
          <li><a href="products.php"><span class="glyphicon glyphicon-cog"></span> Burgerownia</a></li>
          <?php
                           if(isset($_SESSION['email'])){

                              $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
                              $test = $_SESSION['email'];
                              $row_count = mysqli_num_rows($select_rows);


                              $admin = mysqli_query($conn, "SELECT admin FROM `users` WHERE email = '$test'");
                              $nieadmin = mysqli_query($conn, "SELECT admin FROM `users` WHERE email = 'yugeshverma@gmail.com'");
                              
                              $row=$admin->fetch_assoc();
                              $id = (int)$row['admin'];

                              $sesja = isset($_SESSION['admin']);
                             
                      
                              
                          if($id=="1")
                          {
                           
                           echo "<li><a href='admin.php'>Admin</a></li>","<br>";
                          }
                          else
                          {
                          
                          }
      

                           ?>
                           <li><a href="cart.php" class="cart">Koszyk <span><?php echo $row_count; ?></span> </a></li>
                        
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Ustawienia</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Wyloguj</a></li>

                          
                           <?php
                                            
                           }else{
                            ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Zarejestruj się</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Zaloguj się</a></li>
                           
                           <?php
                           }
                           ?>
          </ul>
          <h1 class="logo">BURGERSZAMA</h1>
      </div>
  </nav>

