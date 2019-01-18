<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
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
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="index.php">Home</a></li>
          <li><a href="products.php">Trees</a></li>
          <li><a href="cart.php">Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li class="active"><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:30px;">
      <div class="small-12">

		<div>
	     <img src="images/srj.png" style="display: block; margin-left:auto; margin-right:auto;">
	    </div>
		
		<div>
		<br><br>
        <p style="text-align:center">If you want to know anything or if you have any suggestion. Email us at <a href="mailto:support@srj.com">support@srj.com</a>  Please call us @ +8801751767636</p>
         </div>
		 <hr>
        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; SRJ Online Nursery. All Rights Reserved.</p>
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
