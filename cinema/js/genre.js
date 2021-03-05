$(document).ready(function(){

  $(document).on('click','.genreBtns button',function(){
    $(".genreSlideBox>div").remove();
    $('.loading').show();
    let genArr = ['action', 'romance', 'horror', 'sci-fi', 'fantasy', 'animation'];
    $(".genreBtns button").removeClass("active");
    $(this).addClass("active");
    let genIndex=$(this).index();
    getGenre(genArr[genIndex],'.' + genArr[genIndex] + 'Contents', '#' + genArr[genIndex] + 'Slide');
  });

  $('.genre i').on('click',function(){
    $(".genreSlideBox>div").remove();
    $('.loading').show();
    getGenre('action','.actionContents', '#actionSlide');
  });

  function getGenre(gen, box, slide){
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
                              <a href="/cinema/pages/detail.php?id=${data.data.movies[i].id}">
                              <div class="movie-img">
                                <span>Go to Detail</span>
                                <img src="${data.data.movies[i].medium_cover_image}" alt="" onError="this.src='/cinema/img/default.jpg'">
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
          item:5,
          slideMove:1,
          auto:true,
          loop:true,
          speed:400,
          responsive : [
            { breakpoint:900,
              settings:{
                item:3
              }
            },
            { breakpoint:480,
              settings:{
                item:1
              },
            }
          ]
        });
        $('.lSPrev').text('<');
        $('.lSNext').text('>'); 
      }
    });
  };
});