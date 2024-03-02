<?php

session_start();

if (isset($_SESSION['id_admin'])) {
  header('location: <Placement-Portal-main>index.php');
  exit();
}
else{
  header('location: <Placement-Portal-main>index.php');
}

?>