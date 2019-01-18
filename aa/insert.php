<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$pin = $_POST["pin"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];

if($mysqli->query("INSERT INTO users (fname, lname, address, city, pin, email, password) VALUES('$fname', '$lname', '$address', '$city', $pin, '$email', '$pwd')")){
	echo '<h2>Data inserted</h2>';
	header("Refresh: 1; url=index.php");
	echo '<br/>';
}
else{
  echo '<h2 >Please Insert Valid Information! Redirecting...</h2>';
   header("Refresh: 1; url=register.php");}

?>
