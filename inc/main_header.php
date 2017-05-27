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
</head>


<?php
@session_start();
$_SESSION['page'] = ""; ?>


<body>
  <script type="text/javascript">
    $(document).ready(function () {
        var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
        $('ul.nav a').filter(function() {
             return this.href == url;
        })
        .parent().addClass('active').siblings().removeClass('active');
    });
  </script>

<div id="nav" class="container-fluid">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">
      <?php if (!isset($_SESSION['user_id'])) { ?>
      <li><a href="index.php?section=login"><span class="fa fa-sign-in fa-1x"></span> Login</a></li>
      <li><a href="index.php?section=register"><span class="fa fa-hand-spock-o"></span> Registrieren</a></li>
<?php } else { ?>
  <li><a href="index.php?section=profile"><span class="fa fa-user-circle-o fa-1x"></span> Mein Profil</a></li>
  <li><a href="index.php?section=logout"><span class="fa fa-power-off fa-1x"></span> Logout</a></li>
    <?php } ?>
    </ul>
  </div>
  <div class="container-fluid text-center">
    <p><img class="img img-responsive" style="width: 20%; margin-left: auto; margin-right: auto;" src="/img/Logo_oldkonsole_klein.png"></img></p>
  </div>
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <?php if(isset($_SESSION['page'])) { ?>
        <li class="active"><a class="active"href="index.php?section=home">Startseite</a></li>
    <?php  } else { ?>
        <li><a href="index.php?section=home">Startseite</a></li>
    <?php  } ?>

      <li><a href="index.php?section=repair">Reparatur</a></li>
      <li><a href="index.php?section=shop">Shop</a></li>
      <li><a href="index.php?section=faq">Tipps & Tricks</a></li>
      <li><a href="index.php?section=aboutus">Über uns</a></li>
	</ul>
</div>
</nav>
</div>
