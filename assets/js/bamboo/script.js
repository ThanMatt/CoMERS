$(document).ready(function () {

  parallaxscroll();
  remove();
  hamburger();
  menu();

  function parallaxscroll() {

    $(window).scroll(function () {

      var vscroll = $(this).scrollTop();

      $(".title").css({
        'transform': 'translate(0px, ' + vscroll / 10 + '%)'
      });

      $(".lantern1").css({
        'transform': 'translate(0px, ' + vscroll / 5 + '%)'
      });

      $(".lantern2").css({
        'transform': 'translate(0px, -' + vscroll / 10 + '%)'
      });

      $(".lantern3").css({
        'transform': 'translate(0px, ' + vscroll / 5 + '%)'
      });

      $(".lantern4").css({
        'transform': 'translate(0px, -' + vscroll / 10 + '%)'
      });

      if (vscroll > $('.menubox').offset().top - ($(window).height() / 1.2)) {

        $('.kiki').each(function (i) {

          setTimeout(function () {
            $('.kiki').eq(i).addClass('show');
          }, 150 * (i + 1));

        });
      }

    });

  }

  function remove() {

    $(window).scroll(function () {

      var wscroll = $(this).scrollTop();

      /* console.log(wscroll); */

      if (wscroll > 650) {
        $(".lantern1").css('display', 'none');
      }
      else {
        $(".lantern1").css('display', 'block');
      }

    });

  }

  function hamburger() {

    $(".hamburger").on("click", function () {
      $(".hamburger-container").css("display", "block");
      $(".hamburger-container").css("height", "500px");
      $(".logo-title").css("display", "none");
      $(".hamburger-nav").css("display", "flex");
      $(".exit").css("display", "block");
    });

    $(".exit").on("click", function () {
      $(".hamburger-container").css("height", "0");
      $(".hamburger-nav").css("display", "none");
      $(this).css("display", "none");
      $(".logo-title").css("display", "block");

    });
  }

  function menu() {

    $(".category").on("click", function () {

      $(".menu-parent").toggleClass("togglemenu");


    });

    $(".category1").on("click", function () {

      $(".menu-parent1").toggleClass("togglemenu");

      $(".menu-parent").removeClass("togglemenu");

    });

    $(".category2").on("click", function () {

      $(".menu-parent2").toggleClass("togglemenu");

    });

    $(".category3").on("click", function () {

      $(".menu-parent3").toggleClass("togglemenu");

    });

    $(".category4").on("click", function () {

      $(".menu-parent4").toggleClass("togglemenu");

    });

    $(".category5").on("click", function () {

      $(".menu-parent5").toggleClass("togglemenu");

    });

    $(".category6").on("click", function () {

      $(".menu-parent6").toggleClass("togglemenu");

    });

    $(".category7").on("click", function () {

      $(".menu-parent7").toggleClass("togglemenu");

    });

    $(".category8").on("click", function () {

      $(".menu-parent8").toggleClass("togglemenu");

    });

    $(".category9").on("click", function () {

      $(".menu-parent9").toggleClass("togglemenu");

    });

    $(".category10").on("click", function () {

      $(".menu-parent10").toggleClass("togglemenu");

    });

    $(".category11").on("click", function () {

      $(".menu-parent11").toggleClass("togglemenu");

    });

    $(".category12").on("click", function () {

      $(".menu-parent12").toggleClass("togglemenu");

    });

  }

});