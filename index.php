<?php
session_start();

if (isset($_SESSION["user_id"])){
include "inc/main_header_member.php";
} else {
include "inc/main_header.php";
}
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

      case "cart":
            include "inc/shop-cart.php";
            break;
      case "profile":
            include "inc/profile.php";
            break;
      default:  // Wenn eine ungültige Section angegeben wurde
                // soll home angezeigt werden
          include "inc/main_content.php";
          break;
        }

  include 'inc/main_footer.php';
 ?>
