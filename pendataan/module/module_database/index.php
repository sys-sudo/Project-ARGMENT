<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "spb";
$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
  $status_database = "OFF❌";
  $color_database = "red";
} else {
  $status_database = "ON👍";
  $color_database = "green";
  mysqli_close($conn);
}
?>