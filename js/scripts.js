jQuery(function($) {
$( document ).ready(function() {
  var eventFired = 0;

    if ($(window).width() < 960) {
      $("#talk-video").attr("src", "");
      $('.js-front-page-video').get(0).load();
      $('.js-front-page-video').get(0).play();
    }

    else {
      var video = $("#talk-video").data("video");
      $('#talk-video').attr("src", video);

      $('.js-front-page-video').get(0).load();
      $('.js-front-page-video').get(0).play();
    }

    $(window).on('resize', function() {
      if (!eventFired) {
          if ($(window).width() < 960) {
            $("#talk-video").attr("src", "");
            $('.js-front-page-video').get(0).load();
            $('.js-front-page-video').get(0).play();
          } else {
            var video = $("#talk-video").data("video");
            $('#talk-video').attr("src", video);

            $('.js-front-page-video').get(0).load();
            $('.js-front-page-video').get(0).play();
          }
      }
    });
 });
});
