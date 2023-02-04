<?php
  require_once "connection.php";

  if (isset($_GET['id'])) {  
    $id = $_GET['id'];  
    $query = "DELETE FROM `user` WHERE id = '$id'";  
    $run = mysqli_query($nice, $query);  
    if ($run) {  
         header('location:info.php');  
    }else{  
         echo "Error: ".mysqli_error($nice);  
    }  
}  
?>