<?php
  session_start();
  #include '../includes/mustLogin.php';
  include '../includes/navbar.php';
  $username = $_SESSION['username'];
  $nb = 0;
  $nbP = 1;
  $filtre = "";
  if(isset($_GET['filtres'])){
  	$filtre = $_GET['filtres'];
  }
?>
<HTML>
  <HEAD>
    <meta charset="utf-8">
    <title>DevSupport - Cours</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/style/cours.css">
  </HEAD>
  <BODY>
  	<script type="text/javascript">
  		function filterOpen () {
  			document.getElementById("filterDiv").style.display = "inline-block";
			document.getElementById("filterDiv").style.transform = "translateY(600px)";
			document.getElementById("filterDiv").style.opacity = "0.8";
  		}
  		function filtrer () {
  			var fl = "";
  			if(document.getElementById("html-css").checked){
  				fl = fl + "HTML-CSS";
  			}
  			if(document.getElementById("php").checked){
  				fl = fl + "PHP";
  			}
  			if(document.getElementById("js").checked){
  				fl = fl + "JavaScript";
  			}
  			if(document.getElementById("java").checked){
  				fl = fl + "JAVA";
  			}
  			if(document.getElementById("python").checked){
  				fl = fl + "PYTHON";
  			}
  			if(document.getElementById("arduino").checked){
  				fl = fl + "ARDUINO";
  			}
  			if(document.getElementById("lua").checked){
  				fl = fl + "LUA";
  			}
			if(document.getElementById("skript").checked){
  				fl = fl + "SKRIPT";
  			}
			if(document.getElementById("mysql").checked){
  				fl = fl + "MySQL";
  			}
			if(document.getElementById("c").checked){
  				fl = fl + "C";
  			}




  			window.location.assign('?filtres=' + fl);
  		}
  	</script>
  	<div id="filterDiv">
		<h3 id="filterName">Filtres</h3>
		<?php
			if(strpos($filtre, "HTML-CSS") !== false){
				?>
					<input type="checkbox" id="html-css" checked> HTML-CSS
				<?php
			}else{
				?>
					<input type="checkbox" id="html-css"> HTML-CSS
				<?php
			}
			if(strpos($filtre, "PHP") !== false){
				?>
					<input type="checkbox" id="php" checked> PHP
				<?php
			}else{
				?>
					<input type="checkbox" id="php"> PHP
				<?php
			}
			if(strpos($filtre, "JS") !== false){
				?>
					<input type="checkbox" id="js" checked> JS
				<?php
			}else{
				?>
					<input type="checkbox" id="js"> JS
				<?php
			}
			if(strpos($filtre, "JAVA") !== false){
				?>
					<input type="checkbox" id="java" checked> JAVA
					<br>
					<br>
				<?php
			}else{
				?>
					<input type="checkbox" id="java"> JAVA
					<br>
					<br>
				<?php
			}
			if(strpos($filtre, "PYTHON") !== false){
				?>
					<input type="checkbox" id="python" checked> PYTHON
				<?php
			}else{
				?>
					<input type="checkbox" id="python"> PYTHON
				<?php
			}
			if(strpos($filtre, "ARDUINO") !== false){
				?>
					<input type="checkbox" id="arduino" checked> ARDUINO
				<?php
			}else{
				?>
					<input type="checkbox" id="arduino"> ARDUINO
				<?php
			}
			if(strpos($filtre, "LUA") !== false){
				?>
					<input type="checkbox" id="lua" checked> LUA
					<br>
					<br>
				<?php
			}else{
				?>
					<input type="checkbox" id="lua"> LUA
					<br>
					<br>
				<?php
			}
			if(strpos($filtre, "SKRIPT") !== false){
				?>
					<input type="checkbox" id="skript" checked> SKRIPT
				<?php
			}else{
				?>
					<input type="checkbox" id="skript"> SKRIPT
				<?php
			}
			if(strpos($filtre, "MySQL") !== false){
				?>
					<input type="checkbox" id="mysql" checked> MySQL
				<?php
			}else{
				?>
					<input type="checkbox" id="mysql"> MySQL
				<?php
			}
			if(strpos($filtre, "C") !== false){
				?>
					<input type="checkbox" id="c" checked> C
				<?php
			}else{
				?>
					<input type="checkbox" id="c"> C
				<?php
			}


			if(strpos($filtre, "AUTRE") !== false){
				?>
					<input type="checkbox" id="autre" checked> AUTRE
				<?php
			}else{
				?>
					<input type="checkbox" id="autre"> AUTRE
				<?php
			}
		?><br><br>
		<span class="filterbtn" onclick="filtrer();">Valider</span>
	</div>
  	<span class="filter" onclick="filterOpen();">Filtres</span><br><br><br><br><br><br>
  	<?php
		if ($handle = opendir('.')) {
		    $blacklist = array('.', '..', 'index', 'index.php', 'exempleIndex.php');
		    while (false !== ($file = readdir($handle))) {
		        if (!in_array($file, $blacklist)) {
		        	if(isset($_GET['page'])){
			        	if(($nb+1) <= (10*$_GET['page'])){
			        		if(($nb+1) > (10*($_GET['page']-1))){
			        			if(isset($_GET['filtres'])){
						        	$myfile3 = fopen($file."/type.txt", "r") or die("Unable to open file!");
				        			if(strpos($filtre, fread($myfile3,filesize($file."/type.txt"))) !== false){
							        	echo "<div class='cours c".$nb."' id='cours'>";
							            echo "<a href=".$file.">".str_replace("-", " ", $file)."</a>";
							            $myfile = fopen($file."/img.txt", "r") or die("Unable to open file!");
										echo "<img src=".fread($myfile,filesize($file."/img.txt"))." height='151px' width='270px'>";
							            $myfile2 = fopen($file."/desc.txt", "r") or die("Unable to open file!");
										echo "<p>".fread($myfile2,filesize($file."/desc.txt"))."</p>";
						        		$myfile3 = fopen($file."/type.txt", "r") or die("Unable to open file!");
										echo "<span>".fread($myfile3,filesize($file."/type.txt"))."</span>";
										echo "</div><hr class='between l".$nb."' /><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
										fclose($myfile);
										fclose($myfile2);
										fclose($myfile3);
				        			}
			        			}else{
						        	echo "<div class='cours c".$nb."' id='cours'>";
						            echo "<a href=".$file.">".str_replace("-", " ", $file)."</a>";
						            $myfile = fopen($file."/img.txt", "r") or die("Unable to open file!");
									echo "<img src=".fread($myfile,filesize($file."/img.txt"))." height='151px' width='270px'>";
						            $myfile2 = fopen($file."/desc.txt", "r") or die("Unable to open file!");
									echo "<p>".fread($myfile2,filesize($file."/desc.txt"))."</p>";
					        		$myfile3 = fopen($file."/type.txt", "r") or die("Unable to open file!");
									echo "<span>".fread($myfile3,filesize($file."/type.txt"))."</span>";
									echo "</div><hr class='between l".$nb."' /><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
									fclose($myfile);
									fclose($myfile2);
									fclose($myfile3);
			        			}
			        		}
			        	}
		        	}else{
			        	if(($nb+1) <= 10){
			        		if(isset($_GET['filtres'])){
				        		$myfile3 = fopen($file."/type.txt", "r") or die("Unable to open file!");
				        		if(strpos($filtre, fread($myfile3,filesize($file."/type.txt"))) !== false){
						        	echo "<div class='cours c".$nb."' id='cours'>";
						            echo "<a href=".$file.">".str_replace("-", " ", $file)."</a>";
						            $myfile = fopen($file."/img.txt", "r") or die("Unable to open file!");
									echo "<img src=".fread($myfile,filesize($file."/img.txt"))." height='151px' width='270px'>";
						            $myfile2 = fopen($file."/desc.txt", "r") or die("Unable to open file!");
									echo "<p>".fread($myfile2,filesize($file."/desc.txt"))."</p>";
				        			$myfile3 = fopen($file."/type.txt", "r") or die("Unable to open file!");
									echo "<span>".fread($myfile3,filesize($file."/type.txt"))."</span>";
									echo "</div><hr class='between l".$nb."' /><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
									fclose($myfile);
									fclose($myfile2);
									fclose($myfile3);
				        		}
			        		}else{
			        			echo "<div class='cours c".$nb."' id='cours'>";
					            echo "<a href=".$file.">".str_replace("-", " ", $file)."</a>";
					            $myfile = fopen($file."/img.txt", "r") or die("Unable to open file!");
								echo "<img src=".fread($myfile,filesize($file."/img.txt"))." height='151px' width='270px'>";
					            $myfile2 = fopen($file."/desc.txt", "r") or die("Unable to open file!");
								echo "<p>".fread($myfile2,filesize($file."/desc.txt"))."</p>";
			        			$myfile3 = fopen($file."/type.txt", "r") or die("Unable to open file!");
								echo "<span>".fread($myfile3,filesize($file."/type.txt"))."</span>";
								echo "</div><hr class='between l".$nb."' /><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
								fclose($myfile);
								fclose($myfile2);
								fclose($myfile3);
			        		}
			        	}
		        	}
		        	if(($nb/10) == 1 or ($nb/10) == 2 or ($nb/10) == 3 or ($nb/10) == 4 or ($nb/10) == 5 or ($nb/10) == 6 or ($nb/10) == 7 or ($nb/10) == 8 or ($nb/10) == 9 or ($nb/10) == 10 or ($nb/10) == 11 or ($nb/10) == 12 or ($nb/10) == 13 or ($nb/10) == 14 or ($nb/10) == 15 or ($nb/10) == 16 or ($nb/10) == 17 or ($nb/10) == 18 or ($nb/10) == 19 or ($nb/10) == 20){
		        		$nbP++;
		        	}
					$nb = $nb + 1;
		        }
		    }
		    closedir($handle);
		}
	?>
	<div class="bottom">
		<?php
			if(isset($_GET['page'])){
				for ($i=1; $i <= $nbP; $i++) {
					if ($i == $_GET['page']) {
						?>
							<a class="page actual" href="/cours/?page=<?php echo $i; ?>"><?php echo $i; ?></a>
						<?php
					}else{
						?>
							<a class="page" href="/cours/?page=<?php echo $i; ?>"><?php echo $i; ?></a>
						<?php
					}
				}
			}else{
				for ($i=1; $i <= $nbP; $i++) {
					if ($i == 1) {
						?>
							<a class="page actual" href="/cours/?page=<?php echo $i; ?>"><?php echo $i; ?></a>
						<?php
					}else{
						?>
							<a class="page" href="/cours/?page=<?php echo $i; ?>"><?php echo $i; ?></a>
						<?php
					}
				}
			}
      include '../includes/analyse.html';
		?>
	</div>
	</div>
  </BODY>
</HTML>
