<?php
require "includes/layouts/header.php";
?>

<div class="login-container">
  <div class="login-form">

    <h4>
      <i class="bi bi-person-fill"></i> Login.
    </h4>

    <br />

    <?php
    if (isset($_GET["error"])) {

        if ($_GET["error"] == "none") {
            echo '
            <p>
              Your account was successfully created.
            </p>';
        }

        if ($_GET["error"] == "wronglogin") {
            echo '
            <p style="color: red;">
              Your credenials dont match.
            </p>';
        }

        if ($_GET["error"] == "wrongpassword") {
            echo '
            <p style="color: red;">
              Your password is not correct try again.
            </p>';
        }

        if ($_GET["error"] == "notloggedin") {
            echo '
            <p style="color: red;">
              Login before you put <br /> something in your cart.
            </p>';
        }

    }
    ?>

    <br />

    <form id="login" action="includes/login.inc" method="post">

      <p>Email</p>
      <input type="email" name="email" placeholder="Your email">

      <p>Password</p>
      <input type="password" name="psw" placeholder="Your password.">

      <p>
        Dont have an account?<br />
        Make an account <a class="register-link" href="register">here</a>.
       </p>

      <br />

      <button form="login" class="btn" type="submit" name="submit">
        Login.
      </button>

    </form>

  </div>
</div>

<br />

<?php
require "includes/layouts/footer.php";
?>
