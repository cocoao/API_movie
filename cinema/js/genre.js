$(function(){
  function getGenre(gen, box, slideID){
    let getGenres = [];
    $.ajax({
      url : 'https://yts.mx/api/v2/list_movies.json?genre=' + gen + '&page=1&limit=15',
      success : function(data){
        for (let i=0; i < data.data.movies.length; i++){
          let ganreHtml = `<div class="slideBox">
                            <div>
                              <img src="${data.data.movies[i].medium_cover_image}" alt="">
                              <div class="slideTxt">
                                <h3>${data.data.movies[i].title}</h3>
                                <p class="rating">Rating_${data.data.movies[i].rating}</p>
                              </div>
                              <a href="/cinema/detail.php?id=${data.data.movies[i].id}">Details</a>
                            </div>
                          </div>`
                          getGenres += ganreHtml;
        }
        $(box).append(getGenres);
  
        $(slideID).lightSlider({
          item:5,
          slideMove:1,
          auto:true,
          loop:true,
          speed:400,
        });
      }
    });
  }
  getGenre('action','.actionContents','#actionSlide');
  getGenre('romance','.romanceContents','#romanceSlide');
  getGenre('drama','.dramaContents','#dramaSlide');
});