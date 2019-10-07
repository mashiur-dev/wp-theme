jQuery(document).ready(function($){

   var tx =  new TimelineMax({paused: true});

   tx.to(".one", 0.8, {
      y:6,
      rotation: 45,
      ease: Expo.easeInOut
   });

   tx.to(".two", 0.8, {
      y:-6,
      rotation: -45,
      ease: Expo.easeInOut,
      delay: -0.8
   });

   tx.to(".menu", 2, {
      top: '0%',
      ease: Expo.easeInOut,
      delay: -2
   });

   tx.staggerFrom(".menu ul li", 2, {x: -200, opacity: 0, ease: Expo.easeOut}, 0.3);

   tx.reverse();

   $(document).on("click", ".top-menu-icon", function() {
      tx.reversed(!tx.reversed());
   });

   $(document).on("click", ".menu li > a", function() {
      tx.reversed(!tx.reversed());
   });


});