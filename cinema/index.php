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
  <link rel="stylesheet" href="/cinema/plugin/lightslider.css">
  <link rel="stylesheet" href="/cinema/css/style.css">
  <link rel="stylesheet" href="/cinema/css/media.css">

  <!-- jQuery link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/cinema/plugin/lightslider.js"></script>
  <script src="/cinema/js/custom.js"></script>
  <script src="/cinema/js/recent.js"></script>
  <script src="/cinema/js/genre.js"></script>
  
</head>
<body>
  <div class="wrap">
    <div class="bg">
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/cinema/include/tab_page.php';
    ?>
      <div class="boxes clear">
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
   </div>
  </div>
</body>
</html>