<?php
require "includes/layouts/header.php";
?>

<div class="login-container">
  <div class="login-form">

    <h4>
      <i class="bi bi-person-fill"></i> Register.
    </h4>

    <br />

    <?php
    if (isset($_GET["error"])) {

        if ($_GET["error"] == "invaliduid") {
            echo '
            <p style="color: red;">
              Your username isn\'t valid.
            </p>';
        }

        else if ($_GET["error"] == "invalidemail") {
            echo '
            <p style="color: red;">
              Your email isn\'t valid.
            </p>';
        }

        else if ($_GET["error"] == "passworddontmatch") {
            echo '
            <p style="color: red;">
              Passwords don\'t match.
            </p>';
        }

        else if ($_GET["error"] == "usernametaken") {
            echo '
            <p style="color: red;">
              This username was already taken.
            </p>';
        }

        else if ($_GET["error"] == "stmtfailed") {
            echo '
            <p style="color: red;">
              Passwords don\'t match.
            </p>';
        }
    }
    ?>

    <br />

    <form id="register" action="includes/register.inc" method="post">

      <p>Full name</p>
      <input type="name" name="full-name" placeholder="Your full name.">

      <p>Username</p>
      <input type="name" name="uid" placeholder="Your username.">

      <p>Email</p>
      <input type="email" name="email" placeholder="Your email.">

      <p>Password</p>
      <input type="password" name="pwd" placeholder="Your password.">

      <p>Repeat password</p>
      <input type="password" name="pwd-repeat" placeholder="Repeat your password.">

      <br />

      <button form="register" class="btn" type="submit" name="submit">
        Register.
      </button>

    </form>

  </div>
</div>

<br />

<?php
require "includes/layouts/footer.php";
?>
