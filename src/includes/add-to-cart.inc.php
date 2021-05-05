<?php
require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {

  $userId = $_POST["hidden-id"];
  $item = $_POST["hidden_name"];
  $price = $_POST["hidden_price"];

  addToCart($conn, $userId, $item, $price);

} else {
    header("location: ../home");
    exit();
}
