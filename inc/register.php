<?php $_SESSION['page'] = "register"; ?>
<div class="container first-padding bg-black">
  <h2>Registrierung</h2>
  <br><br>
<form class="form-horizontal" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

  <div class="form-group">
    <label>Email-Adresse</label>
      <hr>
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
  <div class="form-group">
    <label>Passwort</label>
      <hr>
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
<br><br>
<input style="width:40%;"class="btn btn-success font-white" type="Submit" id ="submit" name="submit" value="Jetzt registrieren." />
</form>
<br><br>
</div>
