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
        <input type="text" class="searchInput" value="">
        <button type="button" class="sendBtn">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </div>
    <div class="center">
      <div class="detailBoxes clear">

      </div>
    </div>
  </div>
  <script>
    $(function(){
      let detailId = document.location.href.split("=")[1];
      
      let genDatas = [];
      $.ajax({
        url :'https://yts.mx/api/v2/movie_details.json?movie_id=' + detailId,
        success : function(detailData){
          let title = detailData.data.movie.title;
          $(".searchInput").attr('value',title);
          console.log(detailData);

          let genDetail = ` <div class="imgBox">
                              <img src="${detailData.data.movie.large_cover_image}" alt="">
                            </div>
                            <div class="textBox">
                              <h2>${detailData.data.movie.title}</h2>
                              <p><b>Release date _ </b>${detailData.data.movie.year}</p> 
                              <p><b>Story _ </b>${detailData.data.movie.description_full}</p>
                              <p><b>Genre _ </b>${detailData.data.movie.genres}</p>
                              <p><b>Running time _ </b>${detailData.data.movie.runtime}min</p>
                              <p><b>Rating _ </b>${detailData.data.movie.rating}</p>
                            </div>`;
                            genDatas += genDetail;
                            $(".detailBoxes").append(genDatas);
        }
      });

    });
  </script>
</body>
</html>