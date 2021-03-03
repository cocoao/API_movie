$(function(){

  let searchValue = document.location.href.split("=")[1];
  let decodeValue = decodeURI(searchValue);

  $('.resultBoxes').masonry({
    itemSelector: '.movie_box',
    columnWidth: '.movieBox-sizer',
    percentPosition: true
    });

  // $(".resultBoxes").append(itemContents);

  // console.log(decodeValue);
  $.ajax({
    type:"POST",
    url:"/cinema/data/api.php",
    data: {
      search_value:decodeValue,
    },
    success: function(data){
      let obj = JSON.parse(data);
      // console.log(obj);
      // console.log(obj.items);
      if(obj.items.length == 0){
        alert("일치하는 영화가 없습니다.");
        location.href = "/cinema/index.php";
      }

      let itemContents = [];
      $.each(obj.items, function(i,item){
        // console.log(item.title);
        let itemHTML = `<div class="movie_box">
                        <span>
                          <h2>${item.title}</h2>
                          <div class="view_box">

                            <a link href='${item.link}'>자세히 보기</a>
                            <img src="${item.image}" alt="">
                          </div>
                          <div class="textBox clear">
                            <p>감독 _ ${item.director}</p>
                            <p>배우 _ ${item.actor}</p>
                            <p>개봉 _ ${item.pubDate}</p>
                            <p>평점 _ ${item.userRating}</p>
                          </div>
                          </span>
                        </div>`;
                        itemContents.push($(itemHTML).get(0));
      });
      $(".resultBoxes").append(itemContents);
      $(".searchboxes .searchBox input").attr('value',searchValue);
      
      $(".resultBoxes").imagesLoaded(function() {
        $(".resultBoxes").masonry('appended', itemContents);
      });
    },
  });
});
