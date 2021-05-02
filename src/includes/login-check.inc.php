<?php
if (!isset($_SESSION['user-uid'])) {
  header("location: login");
  
}
