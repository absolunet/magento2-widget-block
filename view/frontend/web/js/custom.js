require(['jquery','Absolunet_WidgetBlock/js/slick/slick.min'],function($){
    $(window).load(function() {
        $('.absolunet-gallery-widget').slick({
          dots: false,
          infinite: true,
          speed: 1000,
          slidesToShow: 1,
      });
    });
});

