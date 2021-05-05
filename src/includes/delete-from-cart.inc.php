<?php
require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {

  $cartId = $_POST["cart-id"];

  deleteFromCart ($conn, $cartId);

} else {
    header("location: ../home");
    exit();
}
