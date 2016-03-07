<?php 
include_once('include/redirect.php');
session_start();
if(!isset($_SESSION['username'])||!isset($_SESSION['permission'])){
  pager('index.html');
}
?> 
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="An app the helps you to ">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard|IECSE Sigma</title>
  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="loadable/android-desktop.png">
  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Material Design Lite">
  <link rel="apple-touch-icon-precomposed" href="loadable/ios-desktop.png">
  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="loadable/touch/ms-touch-icon-144x144-precomposed.png">
  <meta name="msapplication-TileColor" content="#3372DF">
  <link rel="shortcut icon" href="loadable/">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.blue_grey-red.min.css" />
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Home</span>
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
          <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
            <i class="material-icons">search</i>
          </label>
          <div class="mdl-textfield__expandable-holder">
            <input class="mdl-textfield__input" type="text" id="search">
            <label class="mdl-textfield__label" for="search">Search</label>
          </div>
        </div>
        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
          <i class="material-icons">more_vert</i>
        </button>
        <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
          <a href="logout.php"><li class="mdl-menu__item">Logout</li></a>
        </ul>
      </div>
    </header>
    <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
      <header class="demo-drawer-header">
        <img src="loadable/user.jpg" class="demo-avatar">
        <br>
        <div class="demo-avatar-dropdown">
          <span><?php echo ucfirst($_SESSION['username']); ?></span>
          <div class="mdl-layout-spacer"></div>
        </div>
      </header>
      <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--red-grey-400 material-icons" role="presentation">home</i>Home</a>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--red-grey-400 material-icons" role="presentation">inbox</i>All Places</a>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--red-grey-400 material-icons" role="presentation">delete</i>Dead End</a>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--red-grey-400 material-icons" role="presentation">report</i>Important</a>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--red-grey-400 material-icons" role="presentation">flag</i>Add Update</a>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--red-grey-400 material-icons" role="presentation">add</i>Add Location</a>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--red-grey-400 material-icons" role="presentation">shopping_cart</i>Successful</a>
        <a class="mdl-navigation__link" href="../backend/logout.php"><i class="mdl-color-text--red-grey-400 material-icons" role="presentation">people</i>Social</a>
        <div class="mdl-layout-spacer"></div>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--red-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
      </nav>
    </div>
    <main class="mdl-layout__content mdl-color--grey-100">
      <div class="demo-card-wide mdl-card mdl-shadow--2dp absolute-center">
      <div class="padded-full"></div>
        <form action="#">
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="sample1">
            <label class="mdl-textfield__label" for="sample1">Text...</label>
          </div>
        </form>

      </div>
    </main>
  </div>
  <script src="https://code.getmdl.io/1.1.1/material.min.js"></script>
</body>
</html>