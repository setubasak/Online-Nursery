<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
if(isset($_SESSION["username"])){
        header("location:Cart.php");
}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <title>SRJ Online Nursery</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation"style="background: green;">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">SRJ Online Nursery</a></h1>
        </li>
      </ul>

      <section class="top-bar-section">
  
        <ul class="right">
          <li><a href="index.php">Home</a></li>
          <li><a href="products.php">Trees</a></li>
          <li><a href="cart.php">Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li class="active"><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>

    <form method="POST" action="verify.php" style="margin-top:30px;">
      <div class="row">
        <div class="small-9">

          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Email</label>
            </div>
            <div class="small-8 columns">
              <input type="email" id="right-label" placeholder="example@gmail.com" name="username">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Password</label>
            </div>
            <div class="small-8 columns">
              <input type="password" id="right-label" name="pwd">
            </div>
          </div>

          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input type="submit" id="right-label" value="Login" style="background: green; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" style="background: green; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>


    <div class="row" style="margin-top:15px;">
      <div class="large-12">
		<hr>
        <footer >
           <p style="text-align:center; font-size:1em;">&copy; SRJ Online Nursery. All Rights Reserved.</p>
        </footer>
    </div>
	</div>



    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
