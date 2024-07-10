
// ======================================
// ローディング
// ======================================
// $(window).on('load',function () {
//   setTimeout(function(){
//     endLoading();
//     setTimeout(function(){
//       $("#header").addClass("is-show");
//       $("#hero-visual").addClass("is-animated");
//     }, 1000);
//   }, 500);
// });

// //ローディング非表示処理
// function endLoading(){
//   $('#loading .loading-wrap').fadeOut(500, function(){
//     $('#loading').fadeOut(500);
//   });
// }

// $(function(){
//   var thisPosition = $(window).scrollTop();
//   if (thisPosition < 900) {
//     $('body').addClass('firstView');
//   }
// });

// $(window).scroll(function() {
//   var thisPosition = $(window).scrollTop();
//   if (thisPosition > 900) {
//     $('body').removeClass('firstView');
//   }
// });


// ======================================
// Function スライド
// ======================================
// function slickFlow(){
//   var flowSlider = $('.function-flow');
//   flowSlider.on("init", function (event, slick) {
//       var count = slick.currentSlide;
//       $('.function-navi li').eq(count).addClass("is-current");
//   })
//   .not('.slick-initialized').slick({
//     arrows: false,
//     dots: false,
//     infinite: false,
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     variableWidth: true
//   })
//   .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
//     $('.function-navi li').removeClass('is-current next prev');
//     $('.function-navi li').eq(nextSlide).addClass("is-current");
//   });

//   $('.function-navi li').click(function (e) {
//     var slideindex = $(this).index();
//     flowSlider.slick('slickGoTo', slideindex);
//   });
// }

// $(function(){
//   var windowWidth = $(window).width();
// 	var brakePoint = 833;

//   if (windowWidth <= brakePoint) {
//     slickFlow();
//   }
// });

// $(window).resize(function(){
//   var windowWidth = $(window).width();
// 	var brakePoint = 833;

//   if (windowWidth <= brakePoint) {
//     slickFlow();
//   } else {
//     $('.function-flow.slick-initialized').slick('unslick');
//   }
// });	