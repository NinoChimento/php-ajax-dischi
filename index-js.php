<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <!--  -->
    <title></title>
  </head>
  <body>
    <!-- <?php echo $_GET["artist"]; ?> -->
    <header>
      <div class="nav-bar">
        <img class="logo" src="img/download.png" alt="spotify">
        <div class="search">
            <!-- <input type="text" name="artist" value="">
            <button type="submit" name="button">Cerca</button> -->
            <select class="" name="">
              <option value=""></option>
            </select>

        </div>
      </div>

    </header>
    <div class="wrap-cd">

    </div>
    <!-- template -->
    <script id="entry-template" type="text/x-handlebars-template">

      <div class="cd">
        <img src="{{poster}}" alt="">
        <h2>{{title}} </h2>
        <h4>{{author}}</h4>
        <h6>{{year}}</h6>
      </div>
    </script>
    <script id="autore" type="text/x-handlebars-template">
      <option value="{{author}}">{{author}}</option>
    </script>
    <!-- //template -->
    <script src="dist/app.js" charset="utf-8"></script>
  </body>
  </html>
