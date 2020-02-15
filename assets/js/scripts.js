$(function() {

  AOS.init();

  $('.mylink').mouseover(function(){
      var $this = $(this);
      var count = parseInt($this.data('count'), 10) + 1;
      $this.data('count', count);
  });

  setTimeout(function() {
    $('.kitty').removeClass('slideInDown').addClass('hinge');
    setTimeout(function() {
      $('.kitty').remove();
    }, 5500);
  }, 4500);

  $('body').removeClass('fade-out');

  $(".font").fitText(0.8, {
    minFontSize: '105px',
    maxFontSize: '220px'
  });
  $(".fonty").fitText(4.5, {
    minFontSize: '20px',
    maxFontSize: '60px'
  });

  $(".navbar-burger").click(function() {
    $(".navbar-burger").toggleClass("is-active");
    $(".navbar-menu").slideToggle();
  });

  $(".has-dropdown").click(function() {
    $(this).toggleClass("is-active");
  });

  $("a.navbar-item").click(function() {
    if ($('.navbar-menu').css('display') == 'block') {
      $(".navbar-burger").toggleClass("is-active");
      $(".navbar-menu").slideToggle();
    }
  });

  $(".old_gigs").click(function() {
    $("#new_gigs").slideToggle();
    setTimeout(function() {
      $("#old_gigs").slideToggle();
    }, 550);
  });
  $(".new_gigs").click(function() {
    $("#old_gigs").slideToggle();
    setTimeout(function() {
      $("#new_gigs").slideToggle();
    }, 550);
  });

  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      if (!$('.navbar').hasClass('navvi')) {
        $('.navbar').addClass('navvi');
      }
    } else {
      if ($('.navbar').hasClass('navvi')) {
        $('.navbar').removeClass('navvi');
      }
    }
  });

  $('a[href*="#"]:not([href="#"])').click(function() {
    event.preventDefault()
    var offset = -57;
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top + offset
        }, 1000);
        return false;
      }
    }
  });

});

if (typeof MauticSDKLoaded == 'undefined') {
    var MauticSDKLoaded = true;
    var head            = document.getElementsByTagName('head')[0];
    var script          = document.createElement('script');
    script.type         = 'text/javascript';
    script.src          = 'https://recycledrobot.co.uk/mautic/media/js/mautic-form.js';
    script.onload       = function() {
        MauticSDK.onLoad();
    };
    head.appendChild(script);
    var MauticDomain = 'https://recycledrobot.co.uk/mautic';
    var MauticLang   = {
        'submittingMessage': "Please wait..."
    }
}
