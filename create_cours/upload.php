<?php
	session_start();
	include '../includes/mustLogin.php';
	$username = $_SESSION['username'];
	$title = $_POST['title'];
	$title = str_replace(" ", "-", $title);
	$desc = $_POST['desc'];
	$url = $_POST['url'];
	$content = $_POST['content'];
	$lang = $_POST['lang'];
	mkdir("../cours/".$title);
	file_put_contents('../cours/'.$title.'/content.txt', $content);
	file_put_contents('../cours/'.$title.'/desc.txt', $desc);
	file_put_contents('../cours/'.$title.'/img.txt', $url);
	file_put_contents('../cours/'.$title.'/owner.txt', $username);
	file_put_contents('../cours/'.$title.'/type.txt', $lang);
	file_put_contents('../cours/'.$title.'/date.txt', date("j/n/Y"));
	copy('../cours/exempleIndex.php', '../cours/'.$title.'/index.php');
	echo "<script>window.location.assign('/cours/');</script>";
?>