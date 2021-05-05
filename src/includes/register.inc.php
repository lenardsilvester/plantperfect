<?php
require 'dbh.inc.php';
require 'functions.inc.php';

if (isset($_POST["submit"])) {

  $name = $_POST["full-name"];
  $email = $_POST["email"];
  $pwd = $_POST["pwd"];
  $username = $_POST["uid"];
  $pwdRepeat = $_POST["pwd-repeat"];

  if (invalidUid($username) !== false) {
    header("location: ../register?error=invaliduid");
    exit();
  }

  if (invalidEmail($email) !== false) {
    header("location: ../register?error=invalidemail");
    exit();
  }

  if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ../register?error=passworddontmatch");
    exit();
  }

  if (uidExists($conn, $username, $email) !== false) {
    header("location: ../register?error=usernametaken");
    exit();
  }

  createUser ($conn, $name, $username, $email, $pwd);

} else {
  header("location: ../register");
}
