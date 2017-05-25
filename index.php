<?php
session_start();
include "inc/main_header.php";

$_SESSION['page'] = "home";

switch(@$_GET['section']) {
      case "home":
          include "inc/main_content.php";
          $_SESSION['page']=="home";
          break;

      case "aboutus":
          include "inc/aboutus_content.php";
          $_SESSION['page']=="about";
          break;

      case "repair":
          include "inc/repair_content.php";
          $_SESSION['page']=="repair";
          break;

      case "shop":
            include "inc/shop_content.php";
            $_SESSION['page']=="shop";
            break;

      case "faq":
            include "inc/faq_content.php";
            $_SESSION['page']=="faq";
            break;

      case "login":
            include "inc/login.php";
            $_SESSION['page']=="login";
            break;

      case "logout":
            include "inc/logout.php";
            $_SESSION['page']=="logout";
            break;

      case "register":
            include "inc/register.php";
            $_SESSION['page']=="home";
            break;

      case "profile":
            include "inc/profile.php";
            $_SESSION['page']=="profile";
            break;

      case "data":
            include "inc/datenschutz.php";
            $_SESSION['page']=="home";
            break;

      case "use":
            include "inc/nutzungsbedingungen.php";
            $_SESSION['page']=="home";
            break;

      case "cart_overview":
            include "inc/cart_overview.php";
            $_SESSION['page']=="home";
            break;
      case "imp":
            include "inc/impressum.php";
            $_SESSION['page']=="home";
            break;

            case "agb":
                  include "inc/agb.php";
                  $_SESSION['page']=="shop";
                  break;

      default:  // Wenn eine ungültige Section angegeben wurde
                // soll home angezeigt werden
          include "inc/main_content.php";
          $_SESSION['page']=="home";
          break;
        }

  include 'inc/main_footer.php';
 ?>
