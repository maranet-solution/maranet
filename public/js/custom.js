
    
    // Preloader 
    jQuery(window).on('load', function() {
        // jQuery("#status").fadeOut();
        jQuery(".page-loader").delay(3500).fadeOut("slow");
    });
    
    
    // ===== Scroll to Top ==== //
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 100) {
            $('#return-to-top').fadeIn(200);
        } else {
            $('#return-to-top').fadeOut(200);
        }
    });
    
    $('#return-to-top').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
    });	

    //  wow

new WOW().init();
  
// index1 memnu

    $(document).ready(function(){
      $(".menu-click1").click(function(){
        $(".menu-open1").slideToggle();
      });
        $('body').on('click', function (e) {
            if (!$('.menu-click1').is(e.target)
                && $('.menu-click1').has(e.target).length === 0
                && $('.open').has(e.target).length === 0
            ) {
                $('.menu-open1').slideUp();
            }
        });
    });

    $('.dropdown').on('show.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
        });

        $('.dropdown').on('hide.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
        });
    
    $(function () {
       
        //removing a existing class from button element
        $('.menu-click1 a').on('click',function () {
            $('.menu-click1').toggleClass('clicked');
        });
    
        
      
    });

// 




$(document).ready(function () {
    $(".sidebar-toggle , .sidebar-close").click(function () {
        $("#right-sidebar").toggleClass("open")
    });
});




		(function ($) {
            $(document).ready(function () {

                $('#cssmenu li.active').addClass('open').children('ul').show();
                $('#cssmenu li.has-sub>a').on('click', function () {
                    $(this).removeAttr('href');
                    var element = $(this).parent('li');
                    if (element.hasClass('open')) {
                        element.removeClass('open');
                        element.find('li').removeClass('open');
                        element.find('ul').slideUp(200);
                    }
                    else {
                        element.addClass('open');
                        element.children('ul').slideDown(200);
                        element.siblings('li').children('ul').slideUp(200);
                        element.siblings('li').removeClass('open');
                        element.siblings('li').find('li').removeClass('open');
                        element.siblings('li').find('ul').slideUp(200);
                    }
                });

            });
        })(jQuery);

        // menu fixed
        $(window).scroll(function () {
            var window_top = $(window).scrollTop() + 1;
            if (window_top > 100) {
            $('.menu-item-wrapper3').addClass('menu-fixed animated fadeInDown');
            } else {
            $('.menu-item-wrapper3').removeClass('menu-fixed animated fadeInDown');
            }
        });
        
        // toggle cross btn js
        $(".toggle-main-wrapper , #toggle_close").on("click", function () {
            $("#sidebar").toggleClass("open")
        });


    









$(document).ready(function() {
    $(".click-toggle").on('click', function() {
        $(".click-toggle").toggleClass("main");
    });
});



// counter
$('.hosting-slider-wrapper .owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    dots: true,
    nav: false,
    autoplay: false,
    smartSpeed: 1200,
    responsive: {
        0: {
            items: 1
        },
        350: {
            items: 1
        },
        991: {
            items: 1
        },
        1100: {
            items: 2
        }
    }
})

//   dark mode js start

$(function() {

    // Toggleable dark mode
    (function darkMode() {
  
      /**
       * Define the elements we will be working with.
       * ---
       * NOTE: #id selectors are used over .classes because jQuery will use the
       *       .getElementByID() method to traverse the DOM, which is much faster.
       */
  
      var $toggleButton = $('.js-toggle-dark-mode');
      var $body = $('body');
  
      // Set up a function to be used by the click event on $toggleButton
      function toggleDarkMode() {
  
        // Check if body does not have the `dark` class
        if (!$body.hasClass('dark')) {
  
          // If it doesn't, it should when this button is clicked, so add it
          $body.addClass('dark');
  
          /**
           * We will also add the "true" state to a localStorage item. This is the
           * property that tells the browser that dark mode should be set.
           * ---
           * NOTE: localStorage will only store strings, we can use "true" and
           *       "false" as values to determine which state should be set.
           */
  
          localStorage.setItem('darkmode', 'true');
  
        } else {
  
          // If body does have the `dark` class, remove it when the toggle is clicked
          $body.removeClass('dark');
  
          // Also set the storage item to "false"
          localStorage.removeItem('darkmode');
  
        }
  
      }
  
      /**
       * Fire the toggleDarkMode function on each click.
       * ---
       * NOTE: This is called last so that the script will first check against
       *       other conditions, before doing any actual toggling.
       */
  
      $toggleButton.on('click', toggleDarkMode);
  
    })();
  
  });
  
  
  
    /**
     * Set `dark` class on body if dark mode should be enabled.
     * Has to be at top of `<body>` so that body exists, and happens
     * as soon as possible.
     */
    if (localStorage.getItem('darkmode') === 'true') {
      document.body.className = 'dark';
    }

// gallery js start

$('.portfolio_img_text').magnificPopup({
    delegate: '.img-link',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1]
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return item.el.attr('title') + '<small></small>';
      }
    }
  });


//   counter js start

// Get the countdown container element
const countdownContainer = document.getElementById("countdown-container");

// Set the target date and time (adjust it according to your needs)
const targetDate = new Date("2023-12-31T23:59:59").getTime();

// Function to initialize the countdown
function startCountdown() {
  // Get the current date and time
  const currentDate = new Date().getTime();

  // Calculate the time remaining
  const timeRemaining = targetDate - currentDate;

  // Calculate and update the days, hours, minutes, and seconds
  const daysElement = document.getElementById("days");
  const hoursElement = document.getElementById("hours");
  const minutesElement = document.getElementById("minutes");
  const secondsElement = document.getElementById("seconds");

  // Calculate the days, hours, minutes, and seconds remaining
  let days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
  let hours = Math.floor(
    (timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  let minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);
hours = String(hours).padStart(2, "0");
  minutes = String(minutes).padStart(2, "0");
  seconds = String(seconds).padStart(2, "0");
  // Update the HTML elements with the calculated values
  daysElement.textContent = days;
  hoursElement.textContent = hours;
  minutesElement.textContent = minutes;
  secondsElement.textContent = seconds;

  // TODO: Implement the countdown logic to update the timer every second
}

// ...

// Update the countdown timer every second
setInterval(startCountdown, 1000);

// ...
