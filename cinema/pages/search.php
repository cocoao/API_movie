<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CINEMA NOW.</title>
  
  <!-- favicon link -->
  <link rel="icon" href="/cinema/img/cinema_favicon.ico">
  <link rel="apple-touch-icon" href="/cinema/img/cinema_favicon.ico">

  <!-- font awesome font link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- css link -->
  <link rel="stylesheet" href="/cinema/css/reset.css">
  <link rel="stylesheet" href="/cinema/plugin/lightslider.css">
  <link rel="stylesheet" href="/cinema/css/style.css">
  <link rel="stylesheet" href="/cinema/css/media.css">

  <!-- jQuery link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
  <script src="/cinema/plugin/lightslider.js"></script>
  <script src="/cinema/js/custom.js"></script>
  <script src="/cinema/js/search.js"></script>
  <script src="/cinema/js/recent.js"></script>
  <script src="/cinema/js/genre.js"></script>
</head>
<body>
  <div class="wrap">
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/cinema/include/tab_page.php';
    ?>
    <div class="boxes searchBoxes">
      <div class="logo">
        <h2><a href="/cinema/index.php" class="searchLogo">CINEMA NOW.</a></h2>
      </div>
      <div class="searchBox clear">
        <?php
        $searchResult = $_GET['key'];
        ?>
        <input type="text" class="searchInput" value="<?=$searchResult?>">
        <button type="button" class="sendBtn">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </div>
    <div class="center">
      <div class="resultBoxes">
        <div class="movieBox-sizer"></div>
      </div>
    </div>
  </div>
</body>
</html>