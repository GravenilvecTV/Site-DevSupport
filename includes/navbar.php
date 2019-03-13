<?php
session_start();
if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	if($username != "root"){
		$username = ucwords($username);
		break;
	}
}
?>

<html>
<head>
    <link rel="icon" href="/style/icon.png">
    <link rel="stylesheet" type="text/css" href="/style/navbar.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.container {
		  position: relative;
		  margin-left: 90vw;
		  margin-top: 15px;
		  display: inline-block;
    	  z-index: 2;
		  cursor: pointer;
		}

		.bar1, .bar2, .bar3 {
		  width: 35px;
		  height: 5px;
		  background-color: #333;
		  margin: 6px 0;
		  transition: 0.4s;
		}

		.change .bar1 {
		  -webkit-transform: rotate(-45deg) translate(-9px, 6px);
		  transform: rotate(-45deg) translate(-9px, 6px);
		}

		.change .bar2 {opacity: 0;}

		.change .bar3 {
		  -webkit-transform: rotate(45deg) translate(-8px, -8px);
		  transform: rotate(45deg) translate(-8px, -8px);
		}
	</style>
</head>
<body>

	<script>
	window.addEventListener('load', function(event){
		var width = document.getElementById('topnav').offsetWidth;
		console.log(width);
		var minWidth = 1200;
		if(width < minWidth){
			document.getElementById('logo').style.display = "none";
			document.getElementById("cours").style.display = "none";
			document.getElementById("ncontact").style.display = "none";
			document.getElementById("container").style.display = "inline-block";
			if(document.getElementById("profilBtn") != null) document.getElementById("profilBtn").style.display = "none";
			if(document.getElementById("login") != null) document.getElementById("login").style.display = "none";
		}else{
			document.getElementById('logo').style.display = "inline-block";
			document.getElementById("cours").style.display = "inline-block";
			document.getElementById("ncontact").style.display = "inline-block";
			document.getElementById("container").style.display = "none";
			if(document.getElementById("profilBtn") != null) document.getElementById("profilBtn").style.display = "inline-block";
			if(document.getElementById("login") != null) document.getElementById("login").style.display = "inline-block";
		}
	});
	window.addEventListener('resize', function(event){
		var width = document.getElementById('topnav').offsetWidth;
		console.log(width);
		var minWidth = 1200;
		if(width < minWidth){
			document.getElementById('logo').style.display = "none";
			document.getElementById("cours").style.display = "none";
			document.getElementById("ncontact").style.display = "none";
			document.getElementById("container").style.display = "inline-block";
			if(document.getElementById("profilBtn") != null) document.getElementById("profilBtn").style.display = "none";
			if(document.getElementById("login") != null) document.getElementById("login").style.display = "none";
		}else{
			document.getElementById('logo').style.display = "inline-block";
			document.getElementById("cours").style.display = "inline-block";
			document.getElementById("ncontact").style.display = "inline-block";
			document.getElementById("container").style.display = "none";
			if(document.getElementById("profilBtn") != null) document.getElementById("profilBtn").style.display = "inline-block";
			if(document.getElementById("login") != null) document.getElementById("login").style.display = "inline-block";
		}
	});
	</script>

	<script type="text/javascript">
	function bar () {
		document.getElementById("bar").style.display = "inline-block";
	}
	</script>
  	<script type="text/javascript">
  		var pr = false;
  		function profil () {
  			if(pr) {
				document.getElementById("profile").style.top = "-100vh";
				pr = false;
  			}else{
	  			document.getElementById("profile").style.display = "inline-block";
				document.getElementById("profile").style.top = "90px";
				document.getElementById("profile").style.opacity = "1";
				pr = true;
	  			if(toogle) {
					document.getElementById("menuDeroulant").style.top = "-150vh";
					toogle = false;
				}
  			}
  		}
  	</script>
	<div class="topnav" id="topnav">
		<div class="container" id="container" onclick="myFunction(this)">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</div>
		<span onclick="window.location.assign('/home/');" class="logo" id="logo"><img src="/style/banner.png" height="65px" ></span>
		<a href="/cours/" id="cours">Cours</a>
		<a href="/contact/" id="ncontact">Contact</a>
		<?php
			if(isset($_SESSION['username'])){
				?>
					<span class="login" id="profilBtn" onclick="profil();"><?php echo $username; ?></span>
				<?php
			}else{
				?>
					<span class="login" id="login" onclick="window.location.assign('/login/');">SE CONNECTER</span>
					<!--<span class="register" onclick="window.location.assign('/register/');">S'INSCRIRE</span>-->
				<?php
			}
		?>
	</div>
	<div id="profile">
		<h2 class="pseudo"><?php echo $username ?></h2>
		<span class="logout" onclick="window.location.assign('/disconnect.php');">Se déconnecter</span>
		<span class="panel" onclick="window.location.assign('/create_cours/');">Ecrire un cours</span>
	</div>
	<div id="menuDeroulant">
		<span class="mlogin" onclick="window.location.assign('/home/');">Acceuil</span>
		<span class="mlogin" onclick="window.location.assign('/cours/');" style="margin-top: 50px;">Cours</span>
		<span class="mlogin" onclick="window.location.assign('/contact/');" style="margin-top: 100px;">Contact</span>
	</div>
	<script>
		var toogle = false;
		function myFunction(x) {
			if(!toogle){
				if(pr) {
					document.getElementById("profile").style.top = "-100vh";
					pr = false;
	  			}
				document.getElementById("menuDeroulant").style.display = "inline-block";
				document.getElementById("menuDeroulant").style.opacity = "1";
				document.getElementById("menuDeroulant").style.top = "80px";
				toogle = true;
			}else{
				document.getElementById("menuDeroulant").style.top = "-150vh";
				toogle = false;
			}
			x.classList.toggle("change");
		}
	</script>
</body>
</html>
