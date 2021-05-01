<?php
require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {

  $cartid = $_POST["cart-id"];
  $conn->query('DELETE FROM cart WHERE cart . cart_id = \'' . $cartid . ' \';');

  header("location: ../cart");

} else {
    header("location: ../home?error=exit");
    exit();
}
