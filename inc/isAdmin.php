<?php
session_start();
function isAdmin() {
  if(!(isset($_SESSION['admin']))){
    header('location: admin.php');
  } else {
    //echo $_SESSION['admin'];
  }
}


?>