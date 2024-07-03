(function($) {

  $.fn.menumaker = function(options) {
      
      var cssmenu = $(this), settings = $.extend({
        title: "Menu",
        format: "dropdown",
        sticky: false
      }, options);

      return this.each(function() {
        cssmenu.prepend('<div id="menu-button">' + settings.title + '</div>');
        $(this).find("#menu-button").on('click', function(){
          $(this).toggleClass('menu-opened');
          var mainmenu = $(this).next('ul');
          if (mainmenu.hasClass('open')) { 
            mainmenu.hide().removeClass('open');
          }
          else {
            mainmenu.show().addClass('open');
            if (settings.format === "dropdown") {
              mainmenu.find('ul').show();
            }
          }
        });

        cssmenu.find('li ul').parent().addClass('has-sub');

        multiTg = function() {
          cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
          cssmenu.find('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open').hide();
            }
            else {
              $(this).siblings('ul').addClass('open').show();
            }
          });
        };

        if (settings.format === 'multitoggle') multiTg();
        else cssmenu.addClass('dropdown');

        if (settings.sticky === true) cssmenu.css('position', 'fixed');

        resizeFix = function() {
          if ($( window ).width() > 1024) {
            cssmenu.find('ul').show();
          }

          if ($(window).width() <= 1024) {
            cssmenu.find('ul').hide().removeClass('open');
          }
        };
        resizeFix();
        return $(window).on('resize', resizeFix);

      });
  };
})(jQuery);

(function($){
$(document).ready(function(){

$("#cssmenu").menumaker({
   title: "",
   format: "multitoggle"
});

});
})(jQuery);






/*----- slier --------*/




$('.slider').slick({
  autoplay: false,
  speed: 2000,
  lazyLoad: 'progressive',
  arrows: false,
  dots: true,
	prevArrow: '<div class="slick-nav prev-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
	nextArrow: '<div class="slick-nav next-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
  responsive: [
   
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false
      }
    }
  ]
});

$('.slick-nav').on('click touch', function(e) {

    e.preventDefault();

    var arrow = $(this);

    if(!arrow.hasClass('animate')) {
        arrow.addClass('animate');
        setTimeout(() => {
            arrow.removeClass('animate');
        }, 2000);
    }

});


$('.testimponial_slid').slick({
  dots: false,
  arrows:false,
  autoplay: true,
  infinite: true,
  centerMode: false,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  prevArrow: '<div class="slick-nav prev-arrow"><i class="fa-regular fa-angle-left"></i></div>',
	nextArrow: '<div class="slick-nav next-arrow"><i class="fa-regular fa-angle-right"></i></div>',
  responsive: [
    {
      breakpoint: 1367,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$('.trained_slid').slick({
  dots: false,
  arrows:false,
  autoplay: true,
  infinite: true,
  centerMode: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: '<div class="slick-nav prev-arrow"><i class="fa-regular fa-angle-left"></i></div>',
	nextArrow: '<div class="slick-nav next-arrow"><i class="fa-regular fa-angle-right"></i></div>',
  responsive: [
    {
      breakpoint: 1367,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$('.ser_slid').slick({
  dots: false,
  arrows:false,
  autoplay: true,
  infinite: true,
  centerMode: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: '<div class="slick-nav prev-arrow"><i class="fa-regular fa-angle-left"></i></div>',
	nextArrow: '<div class="slick-nav next-arrow"><i class="fa-regular fa-angle-right"></i></div>',
  responsive: [
    {
      breakpoint: 1367,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});



$('.gallery_big').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
  asNavFor: '.gallery_small',
  prevArrow: '<div class="slick-nav prev-arrow"><i class="fa-regular fa-angle-left"></i></div>',
	nextArrow: '<div class="slick-nav next-arrow"><i class="fa-regular fa-angle-right"></i></div>'
});
$('.gallery_small').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.gallery_big',
  dots: false,
  centerMode: false,
  centerPadding: '60px',
  focusOnSelect: true,
  arrows:false
});

/*----- slier --------*/



var counted = 0;
$(window).scroll(function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (counted == 0 && $(window).scrollTop() > oTop) {
    $('.count').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    counted = 1;
  }

});
var counted = 0;
$(window).scroll(function() {

  var oTop = $('#counter1').offset().top - window.innerHeight;
  if (counted == 0 && $(window).scrollTop() > oTop) {
    $('.count1').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    counted = 1;
  }

});

$(document).ready(function() {
  var scrollTop = $(".scrollTop");
  $(scrollTop).click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;
  });
});

AOS.init();
