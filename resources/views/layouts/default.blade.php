<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Maranet Solutions Limited</title>
    <meta name="description"
        content="maranet- is a Ultimate Multipurpose  Premium  HTML5 Responsive Templeate by Webstrot Team. You can use this for anykind of multi-purpose Bussiness">
    <meta name="keywords" content="Premium HTML5 Template">
    <meta name="author" content="Webstrot">
    @include("includes.head")

</head>

<body style="background-color: #ffffff;">
      <!-- top to return -->
   <a href="javascript:;" id="return-to-top" class="change-bg2"> <i class="fas fa-angle-double-up"></i></a>
    @include("includes.header")

    @yield("content")
    
    @include("includes.footer")<script src="js/jquery-3.6.0.min.js"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.magnific-popup.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>

    <script src="/js/owl.carousel.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js'></script>
    <script src='https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js'></script>
    <script src="/js/custom.js"></script>
    <script>
       $('.slider').slick({
          autoplay: true,
          speed: 800,
          lazyLoad: 'progressive',
          arrows: true,
          dots: false,
          adaptiveHeight: true,
          prevArrow: '<div class="slick-nav prev-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
          nextArrow: '<div class="slick-nav next-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
       }).slickAnimation();
 
 
 
       $('.slick-nav').on('click touch', function (e) {
 
          e.preventDefault();
 
          let arrow = $(this);
 
          if (!arrow.hasClass('animate')) {
             arrow.addClass('animate');
             setTimeout(() => {
                arrow.removeClass('animate');
             }, 1600);
          }
 
       });
    </script>
</body>
</html>