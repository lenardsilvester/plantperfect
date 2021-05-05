<?php
require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {

  $email = $_POST["email"];
  $pwd = $_POST["psw"];

  loginUser($conn, $email, $pwd);

} else {
  header("location: ../login");
  exit();
}
