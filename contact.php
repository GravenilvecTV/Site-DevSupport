<?php
	include '../includes/navbar.php';
?>

<html>
	<head>
		<title>DevSupport - Contact</title>
		<style type="text/css">
			@font-face {
	  			font-family: 'calibri'; /*a name to be used later*/
	   			src: url('/style/calibri.ttf'); /*URL to font*/
			}
			@font-face {
			    font-family: 'space'; /*a name to be used later*/
			    src: url('/style/space.ttf'); /*URL to font*/
			}
			.content {
				position: absolute;
				font-size: 25px;
				font-family: 'calibri';
				font-weight: 600px;
				left: 20%;
				color: black;
				top: -100%;
				border: solid 1px #003668;
				border-radius: 10px;
				padding: 5px 5px;
				transition: all 2s;
			}
		</style>
	</head>
	<body>
		<div class="content" id="content">
			<h2 class="quentin">Directeur général : Quentinium </h2><br>
			<h2 class="zeldown">WebMaster : Zeldown <a target="_blank" href="https://mail.google.com/mail?view=cm&tf=0&to=zeldown@devsupport.fr"><u>zeldown@devsupport.fr</u></a></h2><br>
			<h2 class="zeldown">Contact : <a target="_blank" href="https://mail.google.com/mail?view=cm&tf=0&to=contact@devsupport.fr"><u>contact@devsupport.fr</u></a></h2>
			<h2 class="discord">Discord : <a target="_blank" href="https://discord.gg/dNYHuyR"><u>Cliquez ici</u></a></h2>
		</content>
		<script type="text/javascript">
			document.getElementById('content').style.top = "110px";
		</script>
		<?php
		include '../includes/analyse.html';
		?>
	</body>
</html>
