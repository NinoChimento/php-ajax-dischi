<?php include __DIR__ . "/database.php";
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
        <?php foreach ($raccolta as $key => $cd) { ?>
          <img src=" <?php echo $cd["poster"]; ?>" alt="">
        <?php } ?>
      </div>
    </div>
    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
