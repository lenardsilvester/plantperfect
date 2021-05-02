<?php
require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {

  $userId = $_POST["user-id"];
  $item = $_POST["hidden_name"];
  $price = $_POST["hidden_price"];

  createOrder($conn, $userId, $item, $price);

} else {
    header("location: ../home?error=exit");
    exit();
}
