<html class="no-js" lang="en">
  <head>
    <title>SRJ Online Nursery</title>
    <link rel="stylesheet" href="css/foundation.css">
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
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>
	</body>
	</html>