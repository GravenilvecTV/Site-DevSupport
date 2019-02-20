<?php
session_start();

if(isset($_GET['username'])){
  if(isset($_GET['password'])){
  	if ($fh = fopen('users.txt', 'r')) {
	    while (!feof($fh)) {
	        $line = fgets($fh);
	        $chars = preg_split('/:/', $line, -1, PREG_SPLIT_OFFSET_CAPTURE);
			if(strpos($chars[0][0],$_GET['username']) !== false){
				if(strpos($chars[1][0],$_GET['password']) !== false){
					$_SESSION['username'] = $_GET['username'];
					echo "<script>window.location.assign('/home/');</script>";
				}else{
					echo "<script>window.location.assign('index.php?error=1');</script>";
				}
			}else{
				echo "<script>window.location.assign('index.php?error=1');</script>";
			}
	    }
	    fclose($fh);
	}
  }else{
    echo "<script>window.location.assign('index.php?error=1');</script>";
  }
}else{
  echo "<script>window.location.assign('index.php?error=1');</script>";
}
?>