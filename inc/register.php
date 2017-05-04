<div class="jumbotron bg-home banner-bot-border">
    <h1>Registrierung.</h1>
</div>
<div class="container-fluid container-padding">
<div class="panel panel-default login-panel">
  <div class="panel-heading">Registrierung</div>
<div class="panel-body">
<form class="form-horizontal" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

<h5 class="text-left" >Email-Adresse</h5>
  <hr>
  <div class="form-group">
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail Adresse" required>
  </div>
  </div>

  <div class="form-group">
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail Adresse wiederholen" required>
  </div>
  </div>
  <br>
  <h5 class="text-left" >Passwort</h5>
    <hr>
  <div class="form-group">
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input type="password" class="form-control" name="password" id="password" placeholder="Passwort" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input type="password" class="form-control" name="password_copy" id="password_copy" placeholder="Passwort wiederholen" required>
</div>
</div>
<br>
<input class="btn btn-default" type="Submit" id ="submit" name="submit" value="Jetzt registrieren." />
</form>
</div>
</div>
</div>
