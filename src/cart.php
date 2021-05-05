<?php
require "includes/layouts/header.php";
loginCheck();
?>

<div class="cart-container">
  <div class="cart-content">
    <h4>Your shopping cart.</h4>

    <table>

    <?php
    $sql = 'SELECT * FROM cart WHERE user_id = \'' . $_SESSION["user-id"] . ' \';';
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
      echo '
      <p>
        Your cart is currently empty.
      </p>';

    } else {
      echo '
      <tr>
        <th>Plant</th>
        <th>Price</th>
      </tr>';
    }


    foreach ($result as $results) {
      echo '
      <tr>
        <td>' . $results['plant_name'] . '</td>
        <td>&#8364; ' . $results['plant_price'] . '</td>
        <td>

        <form id="' . $results['cart_id'] . '" action="includes\delete-from-cart.inc" method="post">
        <input type="hidden" name="cart-id" value="' . $results['cart_id'] . '" />

        <button class="delete-btn" form="' . $results['cart_id'] . '" type="submit" name="submit">
          Delete
        </button>

        </form>

        </td>
      </tr>';
    }
    ?>

    </table>

    <?php
    if (mysqli_num_rows($result) == 0) {
      echo '
      <a class="btn" href="#catalog">
        Go back to shopping.
      </a>';
    } else {
      echo '
      <a class="btn" href="home">
        Go to checkout.
      </a>';
    }
    ?>
  </div>
</div>

<header>
  <span class="logo">
    <a href="#catalog">
      Maybe check out some more of our plants.
    </a>
  </span>
</header>

<?php
require "includes/layouts/catalog.php";
require "includes/layouts/footer.php";
?>
