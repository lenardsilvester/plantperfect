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

          <h4>'
            . $results['plant_name'] . '
          </h4>

          <p>'
          . $results['plant_bio'] . '
          </p>

          <br /><br />
          <img class="content-image" src="assets\image\plant'. $results['plant_id'] .'.png" alt="' . $results['plant_name'] . '">

          <a class="btn" href="item?plant='. $results['plant_id'] .'">
            Learn more.
          </a>

          </div>
        </div>
      </div>
      ';
};
?>

</div>
