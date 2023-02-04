<?php
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'sia1';

# Connection
$nice = mysqli_connect($servername, $username, $password, $dbname);

# Check connection
if (!$nice) {
  die("Connection failed: " . mysqli_connect_error());
}
?>