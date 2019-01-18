<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>
	<div> <?php include 'srj.php'; ?>  </div>

    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <h3>My Confirmed Orders</h3>
        <hr>

        <?php
          $user = $_SESSION["username"];
          $result = $mysqli->query("SELECT * from orders");
          if($result) {
            while($obj = $result->fetch_object()) {
              echo '<p><h4>Order ID ->'.$obj->id.'</h4></p>';
              echo '<p><strong>Date of Purchase</strong>: '.$obj->date.'</p>';
			  echo '<p><strong>Email</strong>: '.$obj->email.'</p>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Product Name</strong>: '.$obj->product_name.'</p>';
              echo '<p><strong>Price Per Unit</strong>: '.$obj->price.'</p>';
              echo '<p><strong>Units Bought</strong>: '.$obj->units.'</p>';
              echo '<p><strong>Total Cost</strong>: '.$currency.$obj->total.'</p>';
              echo '<p><hr></p>';

            }
          }
        ?>
      </div>
    </div>

    <div class="row" style="margin-top:10px;">
      <div class="small-12">
	  <hr>

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; SRJ Online Nursery. All Rights Reserved.</p>
        </footer>

      </div>
    </div>

