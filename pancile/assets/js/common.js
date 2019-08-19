$(function() {

    $("#price2").change(function () {
      if ($("#price2").is(":checked")) {
        $('#btn1').addClass('first-part_open');
        $('#btn1').removeClass('first-part--check_open');
        $('#btn1').removeClass('disabled');
      }
    });        
    $("#small2").change(function () {
      if ($("#small2").is(":checked")) {
        $('#btn1').addClass('first-part--check_open');
        $('#btn1').removeClass('first-part_open');
        $('#btn1').removeClass('disabled');
      }
    });        

    $("#price1").change(function () {
      if ($("#price1").is(":checked")) {
        $('#btn2').addClass('two-part_open');
        $('#btn2').removeClass('two-part--check_open');
        $('#btn2').removeClass('disabled');
      }
    });        
    $("#small").change(function () {
      if ($("#small").is(":checked")) {
        $('#btn2').addClass('two-part--check_open');
        $('#btn2').removeClass('two-part_open');
        $('#btn2').removeClass('disabled');
      }
    });

    $("#sec_price").change(function () {
      if ($("#sec_price").is(":checked")) {
        $('#btn3').addClass('three-part_open');
        $('#btn3').removeClass('three-part--check_open');
        $('#btn3').removeClass('disabled');
      }
    });        
    $("#sec_small").change(function () {
      if ($("#sec_small").is(":checked")) {
        $('#btn3').addClass('three-part--check_open');
        $('#btn3').removeClass('three-part_open');
        $('#btn3').removeClass('disabled');
      }
    });        

//-------------------------------попандер---------------------------------------
  $('.modal').popup({transition: 'all 0.3s'});

//------------------------------------form-------------------------------------------
  $('input[type="tel"]').mask('+0 (000) 000-00-00');

  jQuery.validator.addMethod("phoneno", function(phone_number, element) {
     return this.optional(element) || phone_number.match(/\+[0-9]{1}\s\([0-9]{3}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}/);
  }, "Введите Ваш телефон");

  $(".form").each(function(index, el) {
    $(el).addClass('form-' + index);

    $('.form-' + index).validate({
      rules: {
        phone: {
          required: true,
          phoneno: true
        },
        name: 'required',
      },
      messages: {
        name: "Введите Ваше имя",
        phone: "Введите Ваш телефон",
        mail: "Введите Ваш Email",
        content: "Введите Вашe Cообщение",
      },
      submitHandler: function(form) {
        var t = {
          name: jQuery('.form-' + index).find("input[name=name]").val(),
          phone: jQuery('.form-' + index).find("input[name=phone]").val(),
          mail: jQuery('.form-' + index).find("input[name=mail]").val(),
          content: jQuery('.form-' + index).find("textarea[name=content]").val(),
          second: jQuery('.form-' + index).find("input[name=second]").val(),
          price: jQuery('.form-' + index).find("input[name=price]").val(),
          price1: jQuery('.form-' + index).find("input[name=price1]").val(),
          subject: jQuery('.form-' + index).find("input[name=subject]").val()
        };
        ajaxSend('.form-' + index, t);
      }
    });

  });

  function ajaxSend(formName, data) {
    jQuery.ajax({
      type: "POST",
      url: "wp-content/themes/pancile/sendmail.php",
      data: data,
      success: function() {
        $(".modal").popup("hide");
        $("#thanks").popup("show");
        setTimeout(function() {
          $(formName).trigger('reset');
        }, 2000);
      }
    });
  }

//-------------------------скорость якоря---------------------------------------

  $(".click").on("click","a", function (event) {
      event.preventDefault();
      var id  = $(this).attr('href'),
          top = $(id).offset().top;
      $('body,html').animate({scrollTop: top - 60}, 950);
  });


//-------------------------slider---------------------------------------
  var swiper = new Swiper('.works__slider', {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 50,
    pagination: {
      el: '.works__pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.works__next',
      prevEl: '.works__prev',
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
        nextEl: '.reviews__next',
        prevEl: '.reviews__prev',
      },
  });

  var swiper = new Swiper('.teacher__slider', {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 50,
    // init: false,
    pagination: {
      el: '.teacher__pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.teacher__next',
      prevEl: '.teacher__prev',
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

