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
  <script src="/cinema/js/custom.js"></script>
  <script src="/cinema/js/recent.js"></script>
</head>
<body>
  <div class="wrap">
    <div class="bg">
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/cinema/include/header.php';
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
      <div class="loading">
        <img src="/cinema/img/loading.gif" alt="">
      </div>
      <div class="container clear">
      </div><!-- end of container -->
      <div class="numContainer">
        <div class="numBtns">
          <button type="button" class="prev">prev</button>
          <button type="button" class="pageNum" value="1">1</button>
          <button type="button" class="pageNum" value="2">2</button>
          <button type="button" class="pageNum" value="3">3</button>
          <button type="button" class="pageNum" value="4">4</button>
          <button type="button" class="pageNum" value="5">5</button>
          <button type="button" class="next">next</button>
        </div>
      </div>
   </div>
  </div>
</body>
</html>