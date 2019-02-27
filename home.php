<!DOCTYPE html>
<?php
  session_start();
  #include '../includes/mustLogin.php';
  include '../includes/navbar.php';
  $username = $_SESSION['username'];
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevSupport | Votre niveau en Développment Informatique commence ici.</title>
    <link rel="stylesheet" type="text/css" href="/style/base.css">
    <meta name="description" content="Un site de cours en ligne totalement GRATUIT avec des cours post� chaque semaine.">
    <meta name="Keywords" content="quentinium,developer,french,francais,fran�ais,discord,d�veloppement,developpement,fr,devsupport,contact">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta property="og:title" content="DevSupport" />
    <meta property="og:type" content="website" />
    <!-- <meta property="og:url" content="http://devsupport.fr" /> -->
    <meta property="og:image" content="http://devsupport.fr/style/icon.png" />
    <meta property="og:description" content="Un site de cours en ligne entièrement GRATUIT avec des cours postés environ chaque semaine."/>
  </head>
  <body>
    <script>
    window.addEventListener('load', function(event){
      var width = document.getElementById('top1').offsetWidth;
      console.log(width);
      var minWidth = 1200;
      if(width < minWidth){
        document.getElementById('topImage').style.opacity = 0;
        document.getElementById('t1').style.marginLeft = "32vw";
        document.getElementById('t2').style.marginLeft = "32vw";
        document.getElementById('t3').style.marginLeft = "32vw";
        document.getElementById('contactT').style.left = "33vw";
        document.getElementById('email').style.left = "33vw";
      }else{
        document.getElementById('topImage').style.opacity = 1;
        document.getElementById('t1').style.marginLeft = "50vw";
        document.getElementById('t2').style.marginLeft = "50vw";
        document.getElementById('t3').style.marginLeft = "50vw";
        document.getElementById('contactT').style.left = "calc(41vw + 2px)";
        document.getElementById('email').style.left = "calc(41vw + 2px)";
      }
    });
    window.addEventListener('resize', function(event){
      var width = document.getElementById('top1').offsetWidth;
      console.log(width);
      var minWidth = 1200;
      if(width < minWidth){
        document.getElementById('topImage').style.opacity = 0;
        document.getElementById('t1').style.marginLeft = "32vw";
        document.getElementById('t2').style.marginLeft = "32vw";
        document.getElementById('t3').style.marginLeft = "32vw";
        document.getElementById('contactT').style.left = "33vw";
        document.getElementById('email').style.left = "33vw";
      }else{
        document.getElementById('topImage').style.opacity = 1;
        document.getElementById('t1').style.marginLeft = "50vw";
        document.getElementById('t2').style.marginLeft = "50vw";
        document.getElementById('t3').style.marginLeft = "50vw";
        document.getElementById('contactT').style.left = "calc(41vw + 2px)";
        document.getElementById('email').style.left = "calc(41vw + 2px)";
      }
    });
    </script>
  	<script type="text/javascript">
  	var isNight = false;
  	function night () {
  		if(!isNight){
  			isNight = true;
  			document.getElementById("topImage").src = "/style/topNight.png";
  			document.getElementById('top1').style.backgroundColor = "#003668";
  			document.body.style.backgroundColor = "#003668";
  			document.getElementById('t1').style.backgroundColor = "rgb(212,108,96)";
  			document.getElementById('t2').style.backgroundColor = "rgb(212,108,96)";
  			document.getElementById('night').style.innerHTML = "Mode jour";
  		}else{
  			isNight = false;
  			document.getElementById("topImage").src = "/style/top.png";
  			document.getElementById('top1').style.backgroundColor = "rgb(212,108,96)";
  			document.body.style.backgroundColor = "white";
  			document.getElementById('t1').style.backgroundColor = "#003668";
  			document.getElementById('t2').style.backgroundColor = "#003668";
  			document.getElementById('night').style.innerHTML = "Mode nuit";
  		}
  	}
    function contact () {
      document.getElementById('contactButton').style.display = "none";
      document.getElementById('email').style.display = "inline-block";
      document.getElementById('email').style.textDecoration = "underline";
      document.getElementById('contact').style.height = "160px";
      document.getElementById("contact").style.transform = "translateY(20px)";
    }

    function hideContact() {
      document.getElementById('contactButton').style.display = "inline-block";
      document.getElementById('email').style.display = "none";
      document.getElementById('email').style.textDecoration = "none";
      document.getElementById('contact').style.height = "150px";
    }
  	</script>
  	<div class="page">
  		<div id="top1" class="top1">
    		<img id="topImage" src="/style/top.png" style="position:relative;margin-left:7vw;" height="100%"></img>
    		<h1 id="t1" style="margin-left:50vw;position:absolute;top:6vh;font-size:45px;background-color:#003668;color:white;padding: 0px 0.35vw;">Apprenez</h1>
    		<h1 id="t2" style="margin-top:81px;margin-left:50vw;position:absolute;top:6vh;font-size:40px;background-color:#003668;color:white;padding: 0px 0.35vw;">Dès maintenant</h1><br>
    		<h1 id="t3" style="top:calc(7vh + 166px);margin-left:50vw;position:absolute;font-size:20px;color:white;font-family: 'Montserrat',sans-serif;">Votre niveau en développement
																																				<br>informatique commence ici !</h1>
      <div class="contact" id="contact">
        <h3 class="contactT" id="contactT">Toujours à votre service</h3>
        <span class="contactButton" onclick="contact();" id="contactButton" style="margin-left: -3vw;">Nous contacter</span>
        <center><span onclick="hideContact();"><h4 id="email" class="email" style="display:none;"><a class="email" target="_blank" href="https://mail.google.com/mail?view=cm&tf=0&to=contact@devsupport.fr"><u>contact@devsupport.fr</u></a></h4></span></center>
      </div>
      <div class="cgu" id="cgu">
        <h3 class="apropos">A propos : </h3>
        <span class="title"><a class="title" tabindex="inherit" href="/cgu/" target="_blank"><span>Conditions Générales d'Utilisations</span></a></span><br><br>
        <span class="title"><a class="title" tabindex="inherit" href="https://status.devsupport.fr" target="_blank"><span>Status</span></a></span><br><br>
        <span class="title"><a class="title" tabindex="inherit" href="/contact/" target="_blank"><span>Contact</span></a></span><br><br>
	      <span class="title"><a class="title" tabindex="inherit" href="https://discord.gg/dNYHuyR" target="_blank"><span>Discord</span></a></span><br><br>
      </div>
  	</div>
		<!--<label class="switch">
		  <input type="checkbox" onclick="night();"></input>
		  <span class="slider round"><img src="https://us.livanova.cyberonics.com/sites/vnstherapy.com/files/day%20night%20programming%20icon_0.png" height="100%" width="99%"></span>
		</label>-->
  	</div>
  	<?php
  		if(isset($_GET['night'])){
  			echo "<script>night();</script>";
  		}
    include '../includes/analyse.html';
    ?>
  </body>
<html>
