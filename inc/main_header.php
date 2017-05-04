<html>
<!--HEAD-->
<head>
<title>RetroConsoles</title>
<meta charset="utf-8" />
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
<body>

  <script type='text/javascript'>

  $(document).ready(function() {
// get current URL path and assign 'active' class
var pathname = window.location.pathname;
$('.nav > li > a[href="'+pathname+'"]').parent().addClass('active');

})
    </script>

<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    <span class="fa fa-gamepad fa-3x"></span>
    </div>
    <div class="navbar-collapse" id="#ToggleNavbar">
    <ul class="nav navbar-nav">
      <li><a href="index.php?section=home">Home</a></li>
      <li><a href="index.php?section=aboutus">Über uns</a></li>
      <li><a href="index.php?section=repair">Reperatur</a></li>
      <li><a href="index.php?section=shop">Shop</a></li>
      <li><a href="index.php?section=faq">Support</a></li>
	</ul>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="index.php?section=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    <li><a href="index.php?section=register"><span class="glyphicon glyphicon-user"></span> Registrieren</a></li>
    </ul>
  </div>
</div>
</nav>
