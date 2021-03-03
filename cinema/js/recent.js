$(function(){

  let currentPage = 0;
  const pageNumLength = $(".numBtns button.pageNum").length;

  function getData(page){
    let getDatas = [];
    $.ajax({
      url:'https://yts.mx/api/v2/list_movies.json?sort_by=year&order_by=desc&limit=10&page=' + page,
      success: function(data){
        // console.log(data.data.movies);
        for(let i = 0; i < data.data.movies.length; i++){
          if(data.data.movies[i].title == ''){
            data.data.movies[i].title = 'No Title';
          }
          let recentHTML =`<div class="recent-movie-wrap">
                            <div class="recent-movies">
                              <a link href="${data.data.movies[i].url}">
                              <div class="movie-img">
                                <span>Go to link</span>
                                <img src="${data.data.movies[i].medium_cover_image}" alt="">
                              </div>
                              <h3 class="movie-title">${data.data.movies[i].title}</h3>
                              </a>
                            </div>
                          </div>`;
                          getDatas += recentHTML;
        }
        $(".container").append(getDatas);
      }
    });
    currentPage = page;
    // console.log(typeof(page));
  }

  $(".numBtns button.pageNum").click(function(){
    let btnValue = Number($(this).attr('value'));
    // console.log(btnValue);
    $(".recent-movie-wrap").remove();
    $('.loading').show();
    getData(btnValue);

    let btnIdx = $(this).index();
    $('.numBtns button').removeClass('active');
    $('.numBtns button').eq(btnIdx).addClass('active');
  });

  function goToPrevNext(a,b){
    if(currentPage == a){
      return false;
    } else {
      $(".recent-movie-wrap").remove();
      getData(b);
      $(".loading").show();
      $('.numBtns button').removeClass('active');
      $('.numBtns button').eq(currentPage).addClass('active');
    }
  }

  $('.numBtns button.prev').click(function(){
    goToPrevNext(1,currentPage - 1);
  });
  
  $('.numBtns button.next').click(function(){
    goToPrevNext(pageNumLength,currentPage + 1);
  });


  $('.numBtns button').eq(1).trigger('click');
  // getData(1);

  $(document).ajaxComplete(function(){
    $('.loading').hide();
  })

  $(".navigation .tabBtn").click(function(){
    index = $(this).index();
    $(".navigation .tabBtn").eq(index).toggleClass("on");
    if($(".navigation .tabBtn").eq(index).hasClass("on")){
      $(".navigation .tabBtn").removeClass("on");
      $(".panel").removeClass("on");
      $(".panel").find(".tabpanel").removeClass("on");
      
      $(".navigation .tabBtn").eq(index).addClass("on");
      $(".panel").addClass("on");
      $(".panel").find(".tabpanel").eq(index).addClass("on");
    }else {
      $(".navigation .tabBtn").removeClass("on");
      $(".panel").removeClass("on");
      $(".panel").find(".tabpanel").removeClass("on");
    }
  });
});