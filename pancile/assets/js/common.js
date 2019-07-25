$(function() {


//-------------------------скорость якоря---------------------------------------

  $(".click").on("click","a", function (event) {
      event.preventDefault();
      var id  = $(this).attr('href'),
          top = $(id).offset().top;
      $('body,html').animate({scrollTop: top - 60}, 950);
  });


//-------------------------slider---------------------------------------
  var swiper = new Swiper('.works__slider', {
    freeMode: true,
    loop: true,
    slidesPerView: 3,
    spaceBetween: 50,
    // init: false,
    pagination: {
      el: '.works__prev',
      clickable: true,
    },
    breakpoints: {
      1200: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      480: {
        slidesPerView: 1,
        spaceBetween: 10,
      }
    }
  });

  var swiper = new Swiper('.reviews__slider', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 50,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
  });

  var swiper = new Swiper('.kurs__slider', {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 50,
    // init: false,
    pagination: {
      el: '.kurs__prev',
      clickable: true,
    },
    breakpoints: {
      992: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      767: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      480: {
        slidesPerView: 1,
        spaceBetween: 10,
      }
    }
  });

  var swiper = new Swiper('.teacher__slider', {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 50,
    // init: false,
    pagination: {
      el: '.teacher__prev',
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      480: {
        slidesPerView: 1,
        spaceBetween: 10,
      }
    }
  });

//------------------------------acardeon---------------------------
  $(".inst__dropdown").slideUp("slow");
  $(".inst__item").first('').addClass('active');
  $(".active .inst__dropdown").slideDown("slow");

  $(".inst__header").on("click", function(){
    if ($(this).parent().hasClass('active')) {
      $(this).parent().removeClass('active');
      $(".inst__dropdown").slideUp("slow");
    }
    else {
      $(".active .inst__dropdown").slideUp("slow");
      $(".active").removeClass('active');
      $(this).parent().addClass('active');
      $(".active .inst__dropdown").slideDown("slow");
    }
  });

//------------------------------acardeon---------------------------
  $(".resultat__dropdown").slideUp("slow");
  $(".resultat__item").first('').addClass('active');
  $(".active .resultat__dropdown").slideDown("slow");

  $(".resultat__header").on("click", function(){
    if ($(this).parent().hasClass('active')) {
      $(this).parent().removeClass('active');
      $(".resultat__dropdown").slideUp("slow");
    }
    else {
      $(".active .resultat__dropdown").slideUp("slow");
      $(".active").removeClass('active');
      $(this).parent().addClass('active');
      $(".active .resultat__dropdown").slideDown("slow");
    }
  });
  
});

