jQuery(document).ready(function($){
// Add your custom jQuery here

            $(document).ready(function () {

                var menuLeft = $('#test-menu-left').slideMenu({
                    position: 'left',
                    submenuLinkAfter: ' >',
                    backLinkBefore: '< '
                });

                var menuRight = $('#test-menu-right').slideMenu({
                    submenuLinkAfter: ' ⇒',
                    backLinkBefore: '⇐ '
                });

                if ($(window).width() > 767) {
                    menuRight.open(false);
                }

            });

              $('.hamburger').click(function()
            {
              $('.hamburger').toggleClass('is-active');

              if ($('.hamburger').hasClass("is-active")) {
              }
              else {
                   $('main').css('margin-right','0px');  
              }

            });


 var serviceImage1 = $('.box1');
  $(serviceImage1).mouseover(function(){
    TweenMax.to(serviceImage1, 1, {scale:1.15});
  });
  $(serviceImage1).mouseout(function(){
    TweenMax.to(serviceImage1, 0.5, {scale: 1});
  });
 var serviceImage2 = $('.box2');
  $(serviceImage2).mouseover(function(){
    TweenMax.to(serviceImage2, 1, {scale:1.15});
  });
  $(serviceImage2).mouseout(function(){
    TweenMax.to(serviceImage2, 0.5, {scale: 1});
  });
 var serviceImage3 = $('.box3');
  $(serviceImage3).mouseover(function(){
    TweenMax.to(serviceImage3, 1, {scale:1.15});
  });
  $(serviceImage3).mouseout(function(){
    TweenMax.to(serviceImage3, 0.5, {scale: 1});
  });


  // Init ScrollMagic
  var controller = new ScrollMagic.Controller();

   var sidefooterScene = new ScrollMagic.Scene({
        triggerElement: '.footer-trigger',
        triggerHook: 0.8,
        reverse: true
    })
    .setClassToggle('.side-footer-info', 'in-view') // add class to fade-in
    .addIndicators()
    .addTo(controller);

});