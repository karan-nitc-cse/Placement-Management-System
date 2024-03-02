<?php

session_start();

if (isset($_SESSION['id_admin'])) {
  header("Location: dashboard.php");
  exit();
}
else{
  header('location: index.php');
}

?>