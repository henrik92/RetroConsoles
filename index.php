<?php
session_start();
include "inc/main_header.php";



switch(@$_GET['section']) {
      case "home":
          include "inc/main_content.php";
          break;

      case "aboutus":
          include "inc/aboutus_content.php";
          break;

      case "repair":
          include "inc/repair_content.php";
          break;

      case "shop":
            include "inc/shop_content.php";
            break;

      case "faq":
            include "inc/faq_content.php";
            break;

      case "login":
            include "inc/login.php";
            break;

      case "logout":
            include "inc/logout.php";
            break;

      case "register":
            include "inc/register.php";
            break;

      case "profile":
            include "inc/profile.php";
            break;

      case "data":
            include "inc/datenschutz.php";
            break;

      case "use":
            include "inc/nutzungsbedingungen.php";
            break;

      case "cart_overview":
            include "inc/cart_overview.php";
            break;
      case "imp":
            include "inc/impressum.php";
            break;

      case "agb":
            include "inc/agb.php";
            break;

      default:  // Wenn eine ungültige Section angegeben wurde
                // soll home angezeigt werden
          include "inc/main_content.php";
          $_SESSION['page']=="home";
          break;
        }

  include 'inc/main_footer.php';
 ?>
