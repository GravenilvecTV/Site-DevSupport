<?php
session_start();
#include '../../includes/mustLogin.php';
include '../../includes/navbar.php';
$url =  "{$_SERVER['REQUEST_URI']}";

$escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
$escaped_url = str_replace("/cours/", "", $escaped_url);
$escaped_url = str_replace("-", " ", $escaped_url);
$escaped_url = str_replace("/", " ", $escaped_url);

$myfile2 = fopen("owner.txt", "r") or die("Unable to open file!");
$myfile5 = fopen("date.txt", "r") or die("Unable to open file!");
$date = fread($myfile5,filesize("date.txt"));

?>

<html>
	<head>
    		<meta charset="utf-8">
     		<link rel="stylesheet" type="text/css" href="/style/lessons.css">
		<title><?php echo $escaped_url; ?></title>
	</head>
	<body>
		<div class="page">
			<div class="top">
				<h1 style="flex-basis: 500px;"><?php echo $escaped_url; ?></h1>
				<h3 style="font-weight: 20;"><i><?php echo $date; ?></i></h3>
				<h3 style="font-weight: 20;margin-left:20px;">Créer par <u><?php echo fread($myfile2,filesize("owner.txt")); ?></u></h3>
			</div>
			<div class="content">
				<?php
				$myfile2 = fopen("content.txt", "r") or die("Unable to open file!");
				echo "<p>".fread($myfile2,filesize("content.txt"))."</p>";
				?>
			</div><br><br>
		</div>
	</body>
</html>
