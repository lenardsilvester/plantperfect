<?php
require_once 'includes/dbh.inc.php';

$sql = "SELECT * FROM plants;";
$result = mysqli_query($conn, $sql);
?>

<div id="catalog" class="item-container">

<?php
foreach ($result as $results) {
  echo '
    <div class="item-column">
      <div class="item-cards">
        <div class="item-content">

          <h4>
          ' . $results['plant_name'] . '
          </h4>

          <p>
          ' . $results['plant_bio'] . '
          </p>

          <br />
          <img class="content-image" src="assets\image\plant'. $results['plant_id'] .'.png" alt="' . $results['plant_name'] . '">';

          if (isset($_SESSION['user-id'])) {
          echo '
          <form id="' . $results['plant_id'] . '" action="includes\add-to-cart.inc" method="post">

          <input type="hidden" name="user-id" value="'  . $_SESSION["user-id"] . '" />
          <input type="hidden" name="hidden_name" value="'  . $results['plant_name'] . '" />
          <input type="hidden" name="hidden_price" value="'  . $results['plant_price'] . '" />

          <button class="btn" form="'. $results['plant_id'] . '" type="submit" name="submit">
            Add to cart. &#8364; ' . $results['plant_price'] . '
          </button>

          </form>

          </div>
        </div>
      </div>' . "\n";

    } else {
      echo '
      <a class="btn" href="login">
        Add to cart. &#8364;' . $results['plant_price'] .'
      </a>

      </div>
    </div>
  </div>';
    }
};
?>

</div>
