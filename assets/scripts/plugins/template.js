(function($){
  $(document).ready(function(){

    // Isotope filters
    //-----------------------------------------------
    if ($('.isotope-container').length>0) {
      $(window).load(function() {
        $('.isotope-container').fadeIn();
        var $container = $('.isotope-container').isotope({
          itemSelector: '.isotope-item',
          layoutMode: 'fitRows',
          transitionDuration: '0.6s',
          filter: "*"
        });
        // filter items on button click
        $('.filters').on( 'click', 'ul.nav li.nav-item a', function() {
          var filterValue = $(this).attr('data-filter');
          $(".filters").find("li.active.nav-item").removeClass("active");
          $(this).parent().addClass("active");
          $container.isotope({ filter: filterValue });
          return false;
        });
      });
    };

    //Modal
    //-----------------------------------------------
    if($(".modal").length>0) {
      $(".modal").each(function() {
        $(".modal").prependTo( "body" );
      });
    }

  }); // End document ready
    //

  function htmlVideo() {
    videojs("demo_video", {
      controlBar: {
        timeDivider: false,
        fullscreenToggle: false,
        playToggle: false,
        remainingTimeDisplay: false
      },
      "height": "auto",
      "width": "auto"
    }).ready(function() {
      var myPlayer = this;
      var aspectRatio = 5 / 12; // aspect ratio 12:5 (video frame 960x400)
      function resizeVideoJS() {
          var width = document.getElementById(myPlayer.id()).parentElement.offsetWidth;
          myPlayer.width(width).height(width * aspectRatio);
      }
      resizeVideoJS();
      window.onresize = resizeVideoJS;
    });
  }

  function videoModal() {

    // VIMEO

    $('#videoModal').on('shown.bs.modal', function () {
      $("#vimeo-play").vimeo("play");
    });

    $('#videoModal').on('hidden.bs.modal', function () {
      $("#vimeo-play").vimeo("pause");
    });

    // YOUTUBE

    $('#youtube-trigger').click(function () {

      var videoSRC     = $(this).attr("data-video"),
          videoSRCauto = videoSRC + "?autoplay=1&html5=1&rel=0&showinfo=0";

      $('#youtubeModal').on('shown.bs.modal', function () {
        $('#youtube-play').attr('src', videoSRCauto);
      });

      $('#youtubeModal').on('hidden.bs.modal', function () {
        $('#youtube-play').attr('src', videoSRC);
      });

    });
  }

  function init() {
    htmlVideo();
    videoModal();
  }

  $(".ft").fitText();

  $('[data-toggle="tab"]').tab({container: "body"});

    // Page scrolling for #page-scroll li classes in navbar
  $('#page-scroll a').bind('click', function (event) {
    var $anchor = $(this);
    $('html, body').stop().animate ({
      scrollTop: $($anchor.attr('href')).offset().top
    },
    1500, 'easeInOutExpo');
    event.preventDefault();
  });

  $('.arrow').click(function () {
    $('body, html').animate({
      scrollTop: $('#portfolio').offset().top
    }, 1500, 'easeInOutExpo');
    return false;
  });

  var wow = new WOW(
      {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       100,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
        live:         true,       // act on asynchronously loaded content (default is true)
        callback:     function(box) {
          // the callback is fired every time an animation is started
          // the argument that is passed in is the DOM node being animated
        }
      }
    );
    wow.init();

})(this.jQuery);
