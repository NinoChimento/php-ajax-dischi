<?php

  $filtroAutore = $_GET["artist"];
  if (empty($filtroAutore)) {
    include __DIR__ . "/database.php";
    header('Content-Type: application/json');
    echo json_encode($raccolta);
  }
  else {
    include __DIR__ . "/database.php";
    foreach ($raccolta as $key => $value) {

      if ($value["author"] == "Ligabue") {
        var_dump($value["author"]);
        $cdFiltrati[] = $value;
        var_dump($cdFiltrati);
        // header('Content-Type: application/json');
        // echo json_encode($raccolta);
      }
      }

  }
  // header('Content-Type: application/json');
  // echo json_encode($raccolta);
 ?>
