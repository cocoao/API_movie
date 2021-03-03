<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- jQuery link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(function(){
      let detailId = document.location.href.split("=")[1];

      $.ajax({
        url :'https://yts.mx/api/v2/movie_details.json?movie_id=' + detailId,
        success : function(detailData){
          console.log(detailData);
        }
      })
    });
  </script>
</head>
<body>
  
</body>
</html>