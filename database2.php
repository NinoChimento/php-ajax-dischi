<?php
  echo $_GET["artist"];
   include __DIR__ . "/database.php";
  header('Content-Type: application/json');
  echo json_encode($raccolta);
 ?>
