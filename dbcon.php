<?php
$conn = mysqli_connect("localhost","root", "","test1");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
else{
     //echo"ได้";
    }
?>