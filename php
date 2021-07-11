<?php

$servername = "localhost";
$username = "root";
$password = "";
$db ="test";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
echo "conn";	
}
?>
<?php  
$sql = "SELECT * FROM `table`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

	    echo "<br> control = ".$row["FORWARD"]."<br>";
        echo "control = ".$row["LEFT"]."<br>";
		echo "control = ".$row["STOP"]."<br>";
		echo "control = ".$row["RIGHT"]."<br>";
		echo "control = ".$row["BACKWARD"]."<br>";
		 
    }
  }
?>


 <?php
if (isset($_POST['FORWARD'])) {

$sql = "INSERT INTO `forward` (`FORWARD`) VALUES ('".$_POST['FORWARD']."')";
$result = $conn->query($sql);
 }

 ?>
  <?php
if (isset($_POST['BACKWARD'])) {

$sql = "INSERT INTO `backward` (`BACKWARD`) VALUES ('".$_POST['BACKWARD']."')";
$result = $conn->query($sql);
 }

 ?>
  <?php
if (isset($_POST['LEFT'])) {

$sql = "INSERT INTO `left` (`LEFT`) VALUES ('".$_POST['LEFT']."')";
$result = $conn->query($sql);
 }

 ?>
   <?php
if (isset($_POST['RIGHT'])) {

$sql = "INSERT INTO `right` (`RIGHT`) VALUES ('".$_POST['RIGHT']."')";
$result = $conn->query($sql);
 }

 ?>
   <?php
if (isset($_POST['STOP'])) {

$sql = "INSERT INTO `stop` (`STOP`) VALUES ('".$_POST['STOP']."')";
$result = $conn->query($sql);
 }

 ?>
 
