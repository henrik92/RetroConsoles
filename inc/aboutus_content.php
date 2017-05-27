<?php $_SESSION['page'] = "about"; ?>
<style> input { width: 100%;} textarea {width: 100%;}select {width: 100%;}} </style>
<div class="container-fluid container-padding first-padding">
 <h1>
        Über uns
 </h1>
 <br>
<h4>Herzlich Willkommen zu OldKonsole, dein Partner wenn es um Spielekonsolen geht.</h4>
<br>
<p>Die OldKonsole.de aus Wilhelmshaven besteht aus einem jungen, dynamischen Team mit dem Schwerpunkt  <br>
   professionelle Reparaturen von Retro Spielekonsolen. Wir sind Ihr kompetenter Ansprechpartner, wenn <br>
   es sich beispielsweise um eine Sega Master System 1 handelt. Außerdem können sie in unserem Shop    <br>
   interessante Konsolen beim Stöbern neu entdecken.</p>
<br>
<h4>Aber warum unbedingt die OldKonsole.de?</h4>
<br>
<p>Ganz einfach! Unsere Bewertungen sprechen für sich. Wir sind schnell, professionell, kundenfreundlich,<br>
   fachlich kompetent, preisgünstig und vor allem zuverlässig. Unser Team profitiert von langjähriger    <br>
   Erfahrung in der Branche. Die hohe Qualität unserer Reparaturleistung für alle gängigen Marken wie 	 <br>
   z.B Sony, Nintendo, SEGA etc. gewährleisten wir durch regelmäßige Schulungen unseres Personals sowie  <br>
   die Nutzung von professionellen Geräten. Wenn Sie sich nicht sicher sind, was der Fehler an Ihrem     <br>
   Gerät ist, scheuen Sie sich nicht uns einfach per E-Mail zu kontaktieren. Wir finden für jedes 		 <br>
   Problem eine Lösung.</p>
<br>
<h4>Wir freuen uns auf Ihren Auftrag.</h4>
<br>
<h4>Ihr OldKonsole.de Team</h4>
<br>
<div class="container-fluid bg-black">
<div class="container bg-black">
  <h2>Kontakt</h2>
  <br>
  <div class="row">
    <div class="col-sm-4 text-right">
      OldKonsole<br><br>
      Musterstraße 1<br><br>
      26382 Wilhelmshaven<br><br>
      <br>
    </div>
    <div class="col-sm-4">
      <strong>N 53° 31′ 52.957″ E 008° 6′ 12.902″</strong><br>
      <i class="fa fa-globe fa-5x" style="font-size:10em" aria-hidden="true"></i><br><br>
    </div>
    <div class="col-sm-4 text-left">
      <br>
      <span class="fa fa-envelope-open"></span>info@oldconsole.de <br><br>
      <span class="fa fa-phone"></span>42424/121212 <br><br>
    </div>
  </div>
</div>
<br><br>
      <div class="container-fluid text-left bg-black">
          <h2 class="text-center">Kontaktiere uns direkt!</h2>
          <form action="" method="post">
      <div class="container bg-black">
        <hr>
        <br><br>
    <div class="row">
      <div class="col-sm-6 text-left">
        Vorname:<br>
        <input name="vorname" placeholder=">" type="text" required></input>
      </div>
      <div class="col-sm-6 text-left">
        Nachname: <br>
        <input name="nachname" placeholder=">"type="text" required></input>
      </div>
    </div>
    </div>

    <div class="container bg-black">
  <div class="row">
    <div class="col-sm-6 text-left">
      <br><br>
      Straße:<br>
      <input name="street" placeholder=">"  type="text text-left" required></input>
      <br><br>
    </div>
    <div class="col-sm-6 text-left">
      <br><br>
      Hausnummer:<br>
      <input name="housenr" placeholder=">" type="text" required></input>
      <br><br>
    </div>
  </div>
  </div>

  <div class="container bg-black">
<div class="row">
  <div class="col-sm-6 text-left">
    <br><br>
    PLZ:<br>
    <input name="plz" placeholder=">" type="text" required></input>
    <br><br>
  </div>
  <div class="col-sm-6 text-left">
    <br><br>
    Ort:<br>
    <input name="ort" placeholder=">" type="text" required></input>
    <br><br>
  </div>
</div>
</div>

<div class="container bg-black">
<div class="row">
<div class="col-sm-12 text-left">
  <br><br>
  E-Mail:<br>
  <input name="mail" placeholder=">" type="text" required></input>
  <br><br>
</div>
</div>
</div>

<div class="container bg-black">
<div class="row">
<div class="col-sm-12 text-left">
  <br><br>
  Betreff:<br>
  <select name="betreff" required>
    <option value="hide">--Kategorie auswählen--</option>
    <option value="hide">Allgemein</option>
    <option value="hide">Reparatur</option>
    <option value="hide">Shop</option>
  </select>
  <br><br>
</div>
</div>
</div>

<div class="container bg-black">
<div class="row">
<div class="col-sm-12 text-left">
  <br><br>
  Ihre Nachricht:<br>
  <textarea name="description" placeholder=">" required></textarea>
</div>
</div>
</div>
<br><br>
</div>
<div class="container bg-black">
<div class="row">
<div class="col-sm-12">
  <button name="contact" class="btn btn-success">Abschicken</button>
</div>
<br><br><br><br>
</div>
</div>
</form>
<?php if(isset($_POST['contact'])){
  echo 'Erfolgreich gesendet';
}
