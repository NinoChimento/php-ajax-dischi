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
    <div class="wrap-cd">
      <?php foreach ($raccolta as $key => $cd) { ?>
      <div class="cd">

          <img src=" <?php echo $cd["poster"]; ?>" alt="">
          <h2> <?php echo $cd["title"]; ?></h2>
          <h4><?php echo $cd["author"]; ?></h4>
          <h6><?php echo $cd["year"]; ?></h6>

      </div>
        <?php } ?>
    </div>
    <!-- <script src="dist/app.js" charset="utf-8"></script> -->
  </body>
</html>
