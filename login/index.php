<?php
  session_start();
  if(isset($_SESSION['username'])){
    echo "<script>window.location.assign('../home/');</script>";
  }
?>
<HTML>
  <HEAD>
    <title>DevSupport - Connection</title>
    <link rel="stylesheet" type="text/css" href="/style/login.css">
    <link rel="icon" href="/style/icon.png">
    <style type="text/css">
      body {
        background: url('/style/loginBackground.gif');
        background-position: center;
        background-size: 100%;
        background-repeat: no-repeat;
        font-family: 'Inter UI', sans-serif;
        margin: 0;
        padding: 20px;
      }
    </style>
  </HEAD>
  <BODY>
    <div class="page">
      <div class="container">
        <div class="left">
          <div class="login">Connection</div>
          <?php
            if(isset($_GET['error'])){
              if($_GET['error'] == "1"){
                ?>
                  <div class="eula" style="color:red;">Les identifiants que vous avez entré sont invalides !</div>
                <?php
              }else{
                ?>
                  <div class="eula">Veuillez vous connectez pour accéder a toutes les fonctionnalités des développeurs</div>
                <?php
              }
            }else{
              ?>
                <div class="eula">Veuillez vous connectez pour accéder a toutes les fonctionnalités des développeurs</div>
              <?php
            }
          ?>
        </div>
        <div class="right">
          <form class="form" action="login.php" method="get">
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <input type="submit" id="submit" value="Se connecter">
          </form>
        </div>
      </div>
    </div>
    
  </BODY>
</HTML>
