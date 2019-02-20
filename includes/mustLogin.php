<?php
session_start();
if(isset($_SESSION['username'])){
  
}else{
  echo "<script>window.location.assign('/login/');</script>";
}
?>
