import './bootstrap';


var swiper = new Swiper(".tranding-slider", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 1,
    //when loop enabled amount of slides must be >= slidesPerView * 2
    loop: true,
    slideToClickedSlide:true, 
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2.5,
    },
    pagination: {
      el: ".swiper-pagination",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
      },
      // when window width is >= 640px
      720: {
        slidesPerView: 3,
      }
    }
});

$('.profile-slider').slick({
  arrows:false,
  dots:false,
})

$('.navbar-action').on('click',function name() {
  $('.navbar').toggleClass('active')
})

$('.sub-action').on('click',function name() {
  $('.sub-nav').toggleClass('active')
})

$(window).scroll(function() {
  const currentScrollTop = $(this).scrollTop();
  const lastScrollTop = $(this).data('lastScrollTop');

  let scrollDirection;
  if (currentScrollTop > lastScrollTop) {
    scrollDirection = 'down';
  } else if (currentScrollTop < lastScrollTop) {
    scrollDirection = 'up';
  } else {
    scrollDirection = 'none'; // No change
  }

  if (scrollDirection == 'down') {
    $('header').hide()
  } else {
    $('header').show()
  }

  $(this).data('lastScrollTop', currentScrollTop); 
});