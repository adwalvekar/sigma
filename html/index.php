<?php
session_start();
if(isset($_SESSION['username'])){
header("Location : dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.blue_grey-red.min.css" />
	<script defer src="https://code.getmdl.io/1.1.1/material.min.js"></script>
	<title>Login | IECSE Sigma</title>

</head>
<body>

<style>
.demo-layout-transparent {
  background: url('./loadable/wall.jpg') center / cover;
}
.demo-layout-transparent .mdl-layout__header,
.demo-layout-transparent .mdl-layout__drawer-button {
  /* This background is dark, so we set text to white. Use 87% black instead if
     your background is light. */
  color: white;
}
</style>

<div class="demo-layout-transparent mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Sigma</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="http://iecse.xyz">Home</a>
        <a class="mdl-navigation__link" href="http://iecse.xyz/postman">Postman</a>
        <a class="mdl-navigation__link" href="http://iecse.xyz/alumni-portal">Alumni Portal</a>
        <a class="mdl-navigation__link" href="head-login.php">Head Login</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Sigma</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="http://iecse.xyz">Home</a>
        <a class="mdl-navigation__link" href="http://iecse.xyz/postman">Postman</a>
        <a class="mdl-navigation__link" href="http://iecse.xyz/alumni-portal">Alumni Portal</a>
        <a class="mdl-navigation__link" href="head-login.php">Head Login</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
  <style type="text/css">
.demo-card-wide.mdl-card {
  width: 458px;
  height: 256px;
  background: #efefef;
}
.absolute-center {
  margin: auto;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0;
}
.demo-card-wide > .mdl-card__title {
  color: #fff;
  height: 250px;
  background: url('./loadable/tab.png') center / cover;
}
.absolute-center-card {
  margin: auto;
  position: relative;
  top: 0; left: 20%; bottom: 0; right: 0;
}</style>

<div class="demo-card-wide mdl-card mdl-shadow--2dp absolute-center">
  <!-- Simple Textfield -->
  <!--<div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Login to Sigma</h2>
  </div>-->
<div class="absolute-center-card">
<form action="../backend/login.php" method="POST">
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="sample1" name="username">
    <label class="mdl-textfield__label" for="sample1">Username</label>
  </div>
    <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="password" id="sample2" name="password">
    <label class="mdl-textfield__label" for="sample1">Password</label>
  </div>
  <br>
  <!-- Accent-colored raised button with ripple -->
<input type='submit' class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" value = "Login">


</form>
</div>
</div>
  </main>
</div>

</body>
</html>