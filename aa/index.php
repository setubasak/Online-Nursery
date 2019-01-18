<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <title>SRJ Online Nursery</title>
    <link rel="stylesheet" href="css/foundation.css">
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation" style="background: green;">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">SRJ Online Nursery</a></h1>
        </li>
      </ul>

      <section class="top-bar-section">
        <ul class="right">
          <li class="active"><a href="index.php">Home</a></li>
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
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>


    <div> <?php include 'slide.php'; ?>  </div>
	
	
	<div>
	
	<p style="text-align:center;font-size:160%; color:blue;">
	With a staff of certified horticulturalists, licensed tree experts,
	and knowledgeable nurseryman, Pinehurst has the expertise needed to choose,
	plant, and install the perfect plant material for your landscape. Each of our landscape 
	designers also acts as project managers for landscape installations, ensuring that 
	the project goes according to plan. We have been providing planting and installation 
	services throughout Dhaka Division since January 2018 and we serve areas throughout the region.
	</p>
	</div>
	

    
      <div class="row">
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
