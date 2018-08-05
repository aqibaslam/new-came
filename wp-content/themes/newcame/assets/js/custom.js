$(document).ready(function($) {
  $(".scroll").click(function(event){
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
  });

  $().UItoTop({ easingType: 'easeOutQuart' });
});

addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }

$(window).load(function(){
  $('.flexslider').flexslider({
    animation: "slide",
    start: function(slider){
      $('body').removeClass('loading');
    }
  });
});

function filterSelection(filterValue) {
  $("#myBtnContainer .btn.active").removeClass("active");
  $("#myBtnContainer #"+filterValue).addClass("active");
  $('.gallery .gallery-grids').html('<p class="text-center" style="margin-top:40px;"><img src="../wp-content/themes/newcame/assets/images/loader.gif"></p>');

  $.ajax({
    type: 'post',
    url: '../wp-admin/admin-ajax.php',
    data: {
      gallery_category: filterValue,
      action: 'gallery_posts'
    },
    success: function( response ) {
      if(response){
        $('.gallery .gallery-grids').html(response);
      }
    }
  });
}