$(function(){

  // ======================================
  // スクロールでヘッダー固定
  // ======================================
  // var headerPos = $('#header').offset().top;
  var windowHeight = $(window).height() - 50;
  $(window).scroll(function() {
    if($(this).scrollTop() > windowHeight) {
      $('#header').addClass('is-fixed');
      $('#naviMenu').addClass('is-fixed');
      $('#pageTop').addClass('is-active');
    } else {
      $('#header').removeClass('is-fixed');
      $('#naviMenu').removeClass('is-fixed');
      $('#pageTop').removeClass('is-active');
    }
  });

  // ======================================
  // ヘッダーメガメニュー
  // ======================================
  $(".header-sub-menu").parent().addClass('has-child');

  var device = '';
  
  megaMenu();

  $(window).on("resize", function() { megaMenu(); });

  function megaMenu() {
    windowWidth = $(window).width();
    var flag = 'close';
    $('.header-sub-menu')
    if (windowWidth >= 1120 && device != 'pc') {
      device = 'pc';
      // PC時
      $('.navi-menu > li').hover(function() {
        $(this).find('.header-sub-menu').stop().slideDown();
        $(this).addClass('is-open');
        flag = 'open';
      }, function() {
        $(this).find('.header-sub-menu').stop().slideUp();
        $(this).removeClass('is-open');
        flag = 'close';
      });
    } else if (windowWidth < 1120 && device != 'sp') {
      device = 'sp';
      var clickEventType=((window.ontouchstart!==null)?'click':'touchstart');
      $('#spNavi .sub-menu-tggle').on(clickEventType, function() {
        if (flag =='close') {
          flag = 'open';
          $(this).next('.sub-menu-list').stop().slideDown();
          $(this).addClass('open');
          event.preventDefault();
        } else {
          flag = 'close';
          $(this).next('.sub-menu-list').stop().slideUp();
          $(this).removeClass('open');
          event.preventDefault();
        }
      });
    }
  }
  
  // ======================================
  // ハンバーガーアイコン
  // ======================================
  var state = false;
  var scrollpos;
  var naviTarget = '#spNavi';

  function menuOpen() {
    if(state == false) {
      scrollpos = $(window).scrollTop();
      $('body').addClass('fixed').css({'top': -scrollpos});
      $(naviTarget).addClass('is-open');
      $('#header').addClass('is-open');
      $('#hamburgerMenu').addClass('is-open');
      state = true;
    } else {
      $('body').removeClass('fixed').css({'top': 0});
      window.scrollTo( 0 , scrollpos );
      $(naviTarget).removeClass('is-open');
      $('#header').removeClass('is-open');
      $('#hamburgerMenu').removeClass('is-open');
      state = false;
    }
    return false;
  }

  $('#hamburgerMenu').on('click', function() {
    menuOpen();
  });


  // var windowWidth = $(window).width();
	// var brakePoint = 833;

	// if (windowWidth <= brakePoint) {
  //   //スマホ時のみ動作
  //   // $('#header').css({'top': windowHeight});
  // } else {
  //   //PC時のみ動作
  //   // randomImage(heroVisualArray, $heroVisualElement);	// 関数の実行
  // }

  // $(naviTarget + ' a').on('click', function() {
  //   menuOpen();
  // });
  
});


// ======================================
// スクロールアニメーション
// ======================================
$(window).on('load scroll', function(){
	$(".anmContent").each(function(){
    var winHeight = $(window).height();
    var posi = $(this).offset().top;
    var scroll = $(window).scrollTop();
    if (scroll + winHeight > posi){
      $(this).addClass("is-animated");
    }
  });
});


// ======================================
// スムーススクロール
// ======================================
$(function(){
	var headerHeight = $('#header').height();
	var scrollAdjust = 0;

  var urlHash = location.hash;
  if(urlHash) {
    $('body,html').stop().scrollTop(0);
    setTimeout(function () {
      scrollToAnker(urlHash) ;
    }, 100);
  }

  //通常のクリック時
  $('a[href^="#"]').click(function() {
    var href= $(this).attr("href");
    var hash = href == "#" || href == "" ? 'html' : href;
    scrollToAnker(hash);
    return false;
  });

  // 指定したアンカー(#ID)へアニメーションでスクロール
  function scrollToAnker(hash) {
    var target = $(hash);
    var position = target.offset().top - scrollAdjust;
    $('body,html').stop().animate({scrollTop:position}, 1000);
  }

  // 別ページのアンカーリンク ?id=○○ で遷移
  $(window).on('load', function() {
    var url = $(location).attr('href');
    if(url.indexOf("?id=") != -1){
      var id = url.split("?id=");
      var $target = $('#' + id[id.length - 1]);
      if($target.length){
        $('body').removeClass('fixed');
        $('.start_overlay').hide();
        var pos = $target.offset().top - scrollAdjust;
        $("html, body").animate({scrollTop:pos}, 1000);
      }
    }
  });

});