$(function($) {

  // Scroll event
  $(window).on('load scroll', function() {
    var s = $(window).scrollTop();
    if (s >= 400) {
      $('#hd').addClass('scroll-on');
      $('#menuBtn').addClass('scroll-on');
      $('.fixBtn').addClass('scroll-on');
    } else {
      $('#menuBtn').removeClass('scroll-on');
      $('#hd').removeClass('scroll-on');
      $('.fixBtn').removeClass('scroll-on');
    }
  });

  //メニュー
  $('#menuBtn').click(function() {
    $(this).toggleClass('active');
    $('#openMenu').toggleClass('open');
  });
  $('.sp-lang').click(function() {
    $(this).toggleClass('open');
  });


  if ($('.slide-kv').length) {
    $('.slide-kv').slick({
      autoplay: true,
      autoplaySpeed: 5000,
      arrows: false,
      fade: true,
      zIndex: 100
    });
  }

  if ($('.slide-near').length) {
    $('.slide-near').slick({
      autoplay: true,
      arrows: true,
      centerMode: true,
      slidesToShow: 5,
      responsive: [{
        breakpoint: 961,
        settings: {
          slidesToShow: 3
        }
      }, {
        breakpoint: 481,
        settings: {
          slidesToShow: 1
        }
      }],
      zIndex: 100
    });
  }
  if ($('.rooms-picutuers').length) {
    $('.rooms-picutuers').slick({
      autoplay: true,
      arrows: false,
      centerMode: true,
      slidesToShow: 3,
      responsive: [{
        breakpoint: 961,
        settings: {
          slidesToShow: 2
        }
      }, {
        breakpoint: 481,
        settings: {
          slidesToShow: 1
        }
      }],
      zindex: 100
    });
  }

  if ($('.slide-guide').length) {
    $('.slide-guide').slick({
      autoplay: true,
      arrows: true,
      slidesToShow: 4,
      responsive: [{
        breakpoint: 961,
        settings: {
          slidesToShow: 3
        }
      }, {
        breakpoint: 481,
        settings: {
          slidesToShow: 1
        }
      }],
      zIndex: 100
    });
  }
  if ($('.slide-pht').length) {
    $('.slide-pht').slick({});
  }
  //スクロール時のページトップ表示
  if ($('.pagetop').length) {
    $(".scrl").click(function() {
      $('html,body').animate({
        scrollTop: $($(this).attr("href")).offset().top
      }, 'slow', 'swing');
      return false;
    })
  }

  //スクロール時のページトップ表示
  if ($('.pagetop').length) {
    var topBtn = $('.pagetop');
    topBtn.hide();
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        topBtn.fadeIn(500);
      } else {
        topBtn.fadeOut(500);
      }
    });
  }

  if ($('.scrollArea').length) {
    $('.scrollArea').mCustomScrollbar();
  }

  $(window).scroll(function() {
    for (var i = 0; i < $(".js-show").length; i++) {
      if ($(this).scrollTop() > ($(".js-show").eq(i).offset().top - 2 * (winH / 3))) {
        $(".js-show").eq(i).addClass('show');
      }
    }
    for (var i = 0; i < $(".js-tit").length; i++) {
      if ($(this).scrollTop() > ($(".js-tit").eq(i).offset().top - 2 * (winH / 3))) {
        $(".js-tit").eq(i).addClass('show');
      }
    }
  });
});