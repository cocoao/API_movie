$(document).ready(function(){

  $(window).resize(function(){
    var winWidth = $(window).width();
    if(winWidth < 900){
      minItem(3);
    } else {
      minItem(5);
    }
  });
  var winWidth = $(window).width();
  if(winWidth < 900){
    minItem(3);
  } else {
    minItem(5);
  }
  
  function minItem(item){
  $(document).on('click','.genreBtns button',function(){
    $(".genreSlideBox>div").remove();
    let genArr = ['action', 'romance', 'horror', 'sci-fi', 'fantasy', 'animation'];
    $(".genreBtns button").removeClass("active");
    $(this).addClass("active");
    let genIndex=$(this).index();
    getGenre(genArr[genIndex],'.' + genArr[genIndex] + 'Contents', '#' + genArr[genIndex] + 'Slide', item);
  });
  $('.ganre i').on('click',function(){
    getGenre('action','.actionContents', '#actionSlide', item);
  });
  }

  function getGenre(gen, box, slide, items){
   let getGenres = [];
    $.ajax({
      url : 'https://yts.mx/api/v2/list_movies.json?genre=' + gen + '&page=1&limit=15',
      success : function(data){        

        let boxHTML = `<div class="${gen}">
                        <div class="${gen}Contents" id="${gen}Slide">
                        </div>
                      </div>`;
                      $('.genreSlideBox').append(boxHTML);

        for (let i=0; i < data.data.movies.length; i++){
          let genreHtml = `<div class="slideBox">
                            <div class="genre-movie">
                              <a href="/cinema/detail.php?id=${data.data.movies[i].id}">
                              <div class="movie-img">
                                <span>Go to Detail</span>
                                <img src="${data.data.movies[i].medium_cover_image}" alt="">
                              </div>
                              <div class="slideTxt">
                                <h3>${data.data.movies[i].title}</h3>
                                <p class="rating">Rating_${data.data.movies[i].rating}</p>
                              </div>
                              </a>
                            </div>
                          </div>`;

                          getGenres += genreHtml;
        };
        $(box).append(getGenres);
  
        $(slide).lightSlider({
          item:items,
          slideMove:1,
          auto:true,
          loop:true,
          speed:400,
        });

        $('.lSPrev').text('<');
        $('.lSNext').text('>'); 
      }
    });
  }
});