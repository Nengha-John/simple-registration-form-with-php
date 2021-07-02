<?php
$connection = mysqli_connect("localhost","root","root","mycv_db");
if($connection){
  echo "";
  // echo "<script> validate();</script>";
}else{
  echo "Connection to database failed";
}

?>