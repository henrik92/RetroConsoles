<?php $_SESSION['page'] = "logout"; ?>
<div class="container first-padding container-padding bg-black font-white">
    <h3>Auf Wiedersehen, <?php echo $_SESSION['vorname']?>. Bis zum nächsten Mal!</h3></br>

      <?php
      session_unset ();
      session_destroy();
      ob_end_flush ();
      ?>

      <p><a href="\index.php?section=home"><u>Hier</u></a> geht es zurück zur Startseite.
  </div>
