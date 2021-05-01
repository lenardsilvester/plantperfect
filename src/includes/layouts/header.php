<?php
if(!isset($_SESSION)) {
  session_start();
}
?>
<!DOCTYPE HTML>
<html lang="nl">
  <head>
    <title>plantperfect</title>

    <!-- meta data -->
    <meta charset="UTF-8">
    <meta name="author" content="lenardsilvester">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:site_name" content="plantperfect" />
    <meta property="og:title" content="plantperfect webshop." />
    <meta property="og:url" content="https://lenardsilvester.nl/" />
    <meta property="og:description" content="&copy; <?php echo date("Y"); ?> - lenardsilvester." />

    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <!-- css stylesheets -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- font: poppins -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet" />

  </head>
<body>
  <header>

    <span class="logo">
      <a href="index">
        plantperfect.
      </a>
    </span>

    <nav>
      <ul class="nav-links">

        <li>
          <a class="left" href="index#catalog">
            catalog
          </a>
        </li>

        <?php
        if (isset($_SESSION['user-uid'])) {
            echo '<li>
              <a class="left" href="includes/logout.inc">
                logout
              </a>
            </li>';
        }
        else {
            echo '<li>
              <a class="left" href="login">
                login
              </a>
            </li>';
        }
        ?>

        <li>
          <a class="left" href="cart">
            <i class="bi bi-cart"></i>
          </a>
        </li>

      </ul>
    </nav>
  </header>
