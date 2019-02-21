<?php
  session_start();
  include '../includes/mustLogin.php';
  include '../includes/navbar.php';
  $username = $_SESSION['username'];
?>
<HTML>
  <HEAD>
    <title>DevSupport - Créer un cours</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="/style/panel.css">
    <script src="//cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>
  </HEAD>
  <BODY>
  	<script type="text/javascript">
  		function upload () {
  			document.getElementById('img').src = document.getElementById('url').value;
  		}
	</script>
  	<form class="formulaire" action="upload.php" accept-charset="UTF-8" method="post">
  		<img id="img" class="img" src="https://via.placeholder.com/1920x1080" alt="Image">
  		<input type="text" id="url" class="url input" name="url" placeholder="URL" required>
  		<button class="urlBtn" type=button onclick="upload();">upload</button>
  		<input type="text" class="title input" name="title" placeholder="Titre" required>
  		<input type="text" class="desc input" name="desc" placeholder="Description" required>
  		<div class="select-style">
	  		<select class="lang" name="lang">
	   			<option value="HTML-CSS">HTML-CSS</option>
  				<option value="PHP">PHP</option>
  				<option value="JavaScript">JavaScript</option>
          <option value="JAVA">JAVA</option>
          <option value="PYTHON">PYTHON</option>
          <option value="ARDUINO">ARDUINO</option>
          <option value="LUA">LUA</option>
          <option value="SKRIPT">SKRIPT</option>
          <option value="MySQL">MySQL</option>
          <option value="C">C</option>
          <option value="AUTRE">AUTRE</option>
	  		</select>
  		</div>
  		<div class="ending">
	  		<textarea class="content" placeholder="Contenu du tutoriel (HTML)" name="content" id="editor"></textarea><br>
	  		<input type="submit" class="submit" value="Mettre en ligne">
	  	</div>
  	</form>
	<script>
    	CKEDITOR.replace( 'content' );
	</script>
  </BODY>
</HTML>
