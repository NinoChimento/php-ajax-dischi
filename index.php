<?php include __DIR__ . "/database.php";
  var_dump($raccolta)
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">

    <title></title>
  </head>
  <body>
    <div class="warap-cd">
      <div class="cd">
        <?php foreach ($raccolta as  $cd) {
          echo $cd["title"];
        } ?>
        <img src="" alt="">
        <h2></h2>
        <h4></h4>
        <h6></h6>
      </div>
    </div>
    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
