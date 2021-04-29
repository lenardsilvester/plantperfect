<?php
require "includes/layouts/header.php";
?>

<div class="login-container">
  <div class="login-form">

    <h4>
      <i class="bi bi-person-fill"></i> Login.
    </h4>

    <br />

    <form class="" action="index.html" method="post">
      <p>Email</p>
      <input type="email" name="" value="" placeholder="Your email">

      <p>Password</p>
      <input type="password" name="" value="" placeholder="Your password.">

      <p>
        Dont have an account?<br />
        Make an account <a class="register-link" href="register">here</a>.
       </p>

      <br />
      <br />

      <button class="btn" type="button" name="button">
        Login.
      </button>

    </form>

  </div>
</div>

<?php
require "includes/layouts/footer.php";
?>
