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
//    .addIndicators()
    .addTo(controller);

    var toplogoScene = new ScrollMagic.Scene({
        triggerElement: '.trigger-badge',
        triggerHook: 0.2,
        reverse: true
    })
    .setClassToggle('.header-bg', 'in-view') // add class to fade-in
    .addIndicators()
    .addTo(controller);

  var slideParallaxScene = new ScrollMagic.Scene({
    triggerElement: '.bcg-parallax',
    triggerHook: 0,
    duration: '70%'
  })
  .setTween(TweenMax.from('.bcg', 1, {y:'-50%', opacity: '1', ease:Power0.easeNone}))
//  .addIndicators()
  .addTo(controller);




/*  // number of loaded images for preloader progress
  var loadedCount = 0; //current number of images loaded
  var imagesToLoad = $('.bcg').length; //number of slides with .bcg container
  var loadingProgress = 0; //timeline progress - starts at 0
   
  $('.bcg').imagesLoaded({
      background: true
  }).progress( function( instance, image ) {
      loadProgress();
  });
   
  function loadProgress(imgLoad, image)
  {
      //one more image has been loaded
      loadedCount++;
   
      loadingProgress = (loadedCount/imagesToLoad);
   
      // GSAP tween of our progress bar timeline
      TweenLite.to(progressTl, 0.7, {progress:loadingProgress, ease:Linear.easeNone});
   
  }
  //progress animation instance. the instance's time is irrelevant, can be anything but 0 to void  immediate render
  var progressTl = new TimelineMax({paused:true,onUpdate:progressUpdate,onComplete:loadComplete});

  progressTl
    //tween the progress bar width
    .to($('.progress span'), 1, {width:100, ease:Linear.easeNone});

  //as the progress bar witdh updates and grows we put the precentage loaded in the screen
  function progressUpdate()
  {
    //the percentage loaded based on the tween's progress
    loadingProgress = Math.round(progressTl.progress() * 100);
    //we put the percentage in the screen
    $(".txt-perc").text(loadingProgress + '%');

  }

  function loadComplete() {

    // preloader out
    var preloaderOutTl = new TimelineMax();

    preloaderOutTl
      .to($('.progress'), 0.3, {y: 100, autoAlpha: 0, ease:Back.easeIn})
      .to($('.txt-perc'), 0.3, {y: 100, autoAlpha: 0, ease:Back.easeIn}, 0.1)
      .set($('body'), {className: '-=is-loading'})
      .set($('#intro'), {className: '+=is-loaded'})
      .to($('#preloader'), 0.7, {yPercent: 100, ease:Power4.easeInOut})
      .set($('#preloader'), {className: '+=is-hidden'})
      .from($('#intro .title'), 1, {autoAlpha: 0, ease:Power1.easeOut}, '-=0.2')
      .from($('#intro p'), 0.7, {autoAlpha: 0, ease:Power1.easeOut}, '+=0.2')
      .from($('.scroll-hint'), 0.3, {y: -20, autoAlpha: 0, ease:Power1.easeOut}, '+=0.1');

    return preloaderOutTl;
  }
  */


});