<html>
<!--HEAD-->
<head>
<title>RetroConsoles</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- FONT_AWESOME CDN-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Own CSS-Sheet-->
<link href="css/style2.css" rel="stylesheet"/>

<?php
@session_start();
$_SESSION['page'] = "";?>

</head>
<body>
<div class="container-fluid">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">
    <li <?php if($_SESSION['page']=="login") echo ' id="active"' ?>><a href="index.php?section=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    <li <?php if($_SESSION['page']=="register") echo ' id="active"' ?>><a href="index.php?section=register"><span class="glyphicon glyphicon-user"></span> Registrieren</a></li>
    </ul>
  </div>
  <div class="container-fluid text-center">
    <p><img class="img img-responsive" style="width: 20%; margin-left: auto; margin-right: auto;" src="/img/Logo_oldkonsole_klein.png"></img></p>
  </div>
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li <?php if($_SESSION['page']=="home") echo ' id="active"'?>><a href="index.php?section=home">Startseite</a></li>
      <li><a <?php if($_SESSION['page']=="repair") echo ' id="active"'?> href="index.php?section=repair">Reparatur</a></li>
      <li <?php if($_SESSION['page']=="shop") echo ' id="active"' ?>><a href="index.php?section=shop">Shop</a></li>
      <li <?php if($_SESSION['page']=="faq") echo ' id="active"' ?>><a href="index.php?section=faq">Tipps & Tricks</a></li>
      <li <?php if($_SESSION['page']=="about") echo ' id="active"' ?>><a href="index.php?section=aboutus">Über uns</a></li>
      <li>    <?php echo $_SESSION['page']; ?> </li>
	</ul>
</div>
</nav>
</div>
