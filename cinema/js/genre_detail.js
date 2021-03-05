$(function(){
  let detailId = document.location.href.split("=")[1];

  $.ajax({
    url :'https://yts.mx/api/v2/movie_details.json?movie_id=' + detailId,
    success : function(detailData){
      console.log(detailData);
    }
  });
});