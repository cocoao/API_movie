<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CINEMA NOW.</title>
  
  <!-- font awesome font link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- css link -->
  <link rel="stylesheet" href="/cinema/css/reset.css">
  <link rel="stylesheet" href="/cinema/css/style.css">

  <!-- jQuery link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
  <script src="/cinema/js/custom.js"></script>
  <script src="/cinema/js/search.js"></script>
</head>
<body>
  <div class="wrap">
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/cinema/include/header.php';
    ?>
    <div class="boxes searchBoxes">
      <div class="logo">
        <h2><a href="/cinema/index.php">CINEMA NOW.</a></h2>
      </div>
      <div class="searchBox clear">
        <input type="text" class="searchInput">
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