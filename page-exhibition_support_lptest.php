<?php
/**
 * Template Name: Lptest Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ikkosha_theme
 */
get_header('lp');
?>
<style>
.lp-btn-radius-shadow {
	border-radius: 99px;
    box-shadow: 5px 5px 5px 0 rgba(0, 0, 0, 0.3);
}
.lp-text-nowrap {
	text-wrap: nowrap;
	font-size: 1.4rem;
}
.variableBox:hover {
	cursor: pointer;
}
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%!important;
    height: 100vh!important;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}
.lp-modal-inner {
	display: grid;
	grid-template-columns: 1fr 1fr;
	gap: 50px;
}
/* .lp-modal-inner-text p {
	font-size: clamp(16px, 2vw, 10px);
} */
.lp-modal-inner-text {
	font-size: clamp(16px, 2vw, 10px);
}
.lp-modal-td {
	width: 20%;
	height: 26px;
}
.lp-exhib-infos {
	width: 100%!important;
}
.lp-exhib-infos-inner {
	width: 100%!important;
}
.modal-content {
    background-color: #fefefe;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 92%;
	height: 80%;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -55%);
}
.lp-modal-table {
	text-wrap: nowrap;
}
.lp-work-header {
	padding-bottom: 50px;
}
.close-button {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close-button:hover,
.close-button:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
/* モーダル表示時のスクロール防止用スタイル */
.no-scroll {
    overflow: hidden;
    height: 100%;
}

/* 初期状態のスタイル */
.text80, .text82 {
    overflow: hidden;
    opacity: 0;
    visibility: hidden;
    transition: opacity 2s, transform 2s;
}

/* アクティブ状態のスタイル */
.text80.is-active {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.text82.is-active82 {
    opacity: 1;
    visibility: visible;
}

@media screen and (max-width: 833px) {
	.lp-modal-inner {
		grid-template-columns: 1fr;
		grid-template-rows: auto auto;
	}
	.lp-modal-inner-img {
		max-width: 100%!important;
		height: 320px!important;
		object-fit: cover!important;	
	}
}

</style>

	
	<article class="section-block svc-sec01">
		
		<!-- 実績紹介 -->
		<article class="section-block svc-sec03">
			<?php		
			$numItems = 12;
			if ( wp_is_mobile() ) { $numItems = 8; }
			// check for more page link 
			$paged = (int) get_query_var('paged');
			$args = array(
				'posts_per_page' => $numItems + 1,
				'paged' => $paged,
				'orderby' => 'post_date',
				'order' => 'DESC',
				'post_type' => 'works',
				'post_status' => 'publish',
				'tax_query' => array(
					array(
						'taxonomy' => 'work_type',
						'field' => 'slug',
						'terms' => 'exhibition'
					)
				)
			);
			$the_query = new WP_Query($args);		
			$totalItems = $the_query->found_posts;
			wp_reset_postdata();
			// loop posts
			$paged = (int) get_query_var('paged');
			$args['posts_per_page'] = $numItems;
			$args['paged'] = $paged;
			$the_query = new WP_Query($args);
			?>
			<!-- テスト２ -->
			<section class="content page-width" id="last-achvm-intro">
    <h3 class="headline-03 svc-ttl03 text80">実績紹介</h3>
    <?php if ( $the_query->have_posts() ) : ?>
    <div class="svc-work-slider">
        <ul class="l-column col-3 col-1-tab work-list work-exhib-list">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li class="work-item text80">
                <div href="<?php the_permalink(); ?>" target="_blank" class="variableBox" 
                     data-exhib-client-title="<?php echo get_field('exhib-client',$post->ID); ?>"
                     data-exhib-client="<?php echo get_field('exhib-client',$post->ID); ?>"
                     data-exhib-name="<?php echo get_field('exhib-name',$post->ID); ?>"
                     data-exhib-addr="<?php echo get_field('exhib-addr',$post->ID); ?>"
                     data-exhib-boots="<?php echo get_field('exhib-boots',$post->ID); ?>"
                     data-exhib-surface="<?php echo get_field('exhib-surface',$post->ID); ?>"
                     data-exhib-width="<?php echo get_field('exhib-width',$post->ID); ?>"
                     data-exhib-height="<?php echo get_field('exhib-height',$post->ID); ?>">
                    <figure class="inner">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail( 'large', array('class' => 'pic') ); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri() ?>/images/common/placehold744x744.png" width="372" height="372" class="pic">
                        <?php endif; ?>
                        <figcaption class="work-name<?php if(get_field('exhib-name',$post->ID)){?> work-exhib-name<?php }?>">
                            <?php
                            if(get_field('exhib-name',$post->ID)){
                                $strInfo = get_field('exhib-name',$post->ID).'<br>';
                                $strInfo = $strInfo . get_field('exhib-boots',$post->ID) . '小間';
                                $strInfo = $strInfo . get_field('exhib-surface',$post->ID) . '面開放(';
                                $strInfo = $strInfo . get_field('exhib-width',$post->ID) . 'mx';
                                $strInfo = $strInfo . get_field('exhib-height',$post->ID) . 'm)';
                                echo '<span class="cat_exhib">'.$strInfo.'</span>';
                            } else {										    
                                $termsParent = get_the_terms($post->ID,'work_type');
                                foreach ( $termsParent as $term ){
                                    if($term->parent == 0) {
                                        echo '<span class="cat">'.$term->name.'</span>';
                                    }
                                }
                                foreach ( $termsParent as $term ){
                                    if($term->parent != 0) {
                                        echo '<span class="name">'.$term->name.'</span>';
                                    }
                                }
                            }
                            ?>
                        </figcaption>
                    </figure>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
    <?php endif; ?>
</section>
<!-- モーダル -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close-button">&times;</span>
		<br>
        <div class="exhib-infos lp-exhib-infos">
            <figure class="inner lp-exhib-infos-inner">
				<div class="work-header lp-work-header">
					<div class="headline">
						<h2 class="ttl" id="modal-exhib-client-title"></h2>
					</div>
				</div>
				<div class="exhib-infos">
					<img id="modal-img" src="" width="600" height="auto" class="pic exhib-visual lp-modal-inner-img">
					<!-- テーブル -->
					<table class="exhibi-tbl lp-modal-table lp-modal-inner-text">
						<tbody>
							<tr>
								<td id="lp-modal-client" class="lp-modal-td">クライアント名：</td>
								<td id="modal-exhib-client"></td>
							</tr>
							<tr>
								<td id="lp-modal-name" class="lp-modal-td">展示会名：</td>
								<td id="modal-exhib-name"></td>
							</tr>
							<tr>
								<td id="lp-modal-addr" class="lp-modal-td">開催場所：</td>
								<td id="modal-exhib-addr"></td>
							</tr>
							<tr>
								<td id="lp-modal-boots" class="lp-modal-td">小間数：</td>
								<td id="modal-exhib-boots"></td>
							</tr>
							<tr>
								<td id="lp-modal-surface" class="lp-modal-td">開放面：</td>
								<td id="modal-exhib-surface"></td>
							</tr>
							<tr>
								<td id="lp-modal-size" class="lp-modal-td">サイズ：</td>
								<td id="modal-exhib-size"></td>
							</tr>
							<tr>
								<td id="lp-modal-area" class="lp-modal-td">面積：</td>
								<td id="modal-exhib-area"></td>
							</tr>
						</tbody>
					</table>
					<!-- <div class="lp-modal-inner-text">
						<p id="modal-exhib-client"></p>
						<p id="modal-exhib-name"></p>
						<p id="modal-exhib-addr"></p>
						<p id="modal-exhib-boots"></p>
						<p id="modal-exhib-surface"></p>
						<p id="modal-exhib-size"></p>
						<p id="modal-exhib-area"></p>
					</div> -->
				</div>
            </figure> 
        </div>
    </div>
</div>
<!-- テスト２ここまで -->
<?php //endif; ?>
<?php wp_reset_postdata(); ?>


			

		
	
	<!-- footer -->
	<?php
	get_footer('lp');
	?>

<script>
	// 遷移リロードしてからheaderの高さを取得しheaderHeight分オフセットをかける
	$(document).ready(function() {
		function updateHeaderHeight() {
			var headerHeight = $(".header-inner").outerHeight();
			$(".section").css("padding-top", headerHeight + "px");
		}

		function scrollToHash() {
			var hash = window.location.hash;
			if (hash) {
				setTimeout(function() { // ページが完全にロードされた後に少し遅れて実行
					var targetOffset = $(hash).offset().top;
					var headerHeight = $(".header-inner").outerHeight();
					$('html, body').animate({
						scrollTop: targetOffset - headerHeight
					}, 500);
				}, 400);
			}
		}

		updateHeaderHeight();
		scrollToHash(); // ハッシュに基づいてスクロール

		$(window).resize(updateHeaderHeight);

		// 表示速度の調整
		$('.header-inner a[href^="#"]').on('click', function(event) {
			event.preventDefault();
			var targetId = $(this).attr("href");
			var targetOffset = $(targetId).offset().top;
			var headerHeight = $(".header-inner").outerHeight();
			$('html, body').animate({
				scrollTop: targetOffset - headerHeight
			}, 500);
		});
	});

	$(window).on('load', function() {
		$(".text80").each(function() {
			$(this).addClass("is-active");
		});
		$(".text82").each(function() {
			$(this).addClass("is-active82");
		});
	});



	// サムネイルのスライダー
	window.onload = function() {
		//ラッパー要素
		var sliderWrap = document.querySelectorAll('.slider-wrap');
		//サムネイルのスライダー
		var sliderThumb = document.querySelectorAll('.slider-thumb');
		//メインのスライダー
		var sliderMain = document.querySelectorAll('.slider-main');
		
		for (let i = 0; i < sliderWrap.length; i++) {
			//.slider-wrap、.slider-thumb、.slider-mainに01から始まる連番を振る
			var num = ('00' + (i+1)).slice(-2);
			sliderWrap[i].className += (num);
			sliderThumb[i].className += (num);
			sliderMain[i].className += (num);
			//サムネイル用のスライダー呼び出し&オプション指定
			var swiperThumb = new Swiper('.slider-thumb' + (num), {
				slidesPerView: 4,
				freeMode: true,
				watchSlidesVisibility: true,
				watchSlidesProgress: true,
				spaceBetween: 4,
			});
			//メインのスライダー呼び出し&オプション指定
			var swiperMain = new Swiper ('.slider-main' + (num), {
				thumbs: {
					swiper: swiperThumb,
				},
				slidesPerView: 1,
			});
		}
	}

	



	// モーダルを開く関数
	function openModal() {
		document.getElementById('modal').style.display = 'block';
		document.body.classList.add('no-scroll');
	}

	// モーダルを閉じる関数
	function closeModal() {
		document.getElementById('modal').style.display = 'none';
		document.body.classList.remove('no-scroll');
	}

	// モーダルを閉じるためのクリックイベント
	document.querySelector('.close-button').addEventListener('click', closeModal);

	// モーダル外をクリックしたときに閉じる
	window.addEventListener('click', function(event) {
		if (event.target == document.getElementById('modal')) {
			closeModal();
		}
	});

	// モーダル出現,データ取得,null非表示,小数点第1位表示の処理
	document.querySelectorAll('.variableBox').forEach(function(item) {
		item.addEventListener('click', function(event) {
			event.preventDefault();
			var imgSrc = item.querySelector('.pic').src;
			var exhibClientTitle = item.getAttribute('data-exhib-client-title');
			var exhibClient = item.getAttribute('data-exhib-client');
			var exhibName = item.getAttribute('data-exhib-name');
			var exhibAddr = item.getAttribute('data-exhib-addr');
			var exhibBoots = item.getAttribute('data-exhib-boots');
			var exhibSurface = item.getAttribute('data-exhib-surface');
			var exhibWidth = parseFloat(item.getAttribute('data-exhib-width'));
			var exhibHeight = parseFloat(item.getAttribute('data-exhib-height'));
			var exhibArea = (exhibWidth && exhibHeight) ? (exhibWidth * exhibHeight).toFixed(1) : null;

			document.getElementById('modal-img').src = imgSrc;

			var modalExhibClientTitle = document.getElementById('modal-exhib-client-title');
			var modalExhibClient = document.getElementById('modal-exhib-client');
			var modalExhibName = document.getElementById('modal-exhib-name');
			var modalExhibAddr = document.getElementById('modal-exhib-addr');
			var modalExhibBoots = document.getElementById('modal-exhib-boots');
			var modalExhibSurface = document.getElementById('modal-exhib-surface');
			var modalExhibSize = document.getElementById('modal-exhib-size');
			var modalExhibArea = document.getElementById('modal-exhib-area');

			// 非表示可能性モーダル項目
			var modalClient = document.getElementById('lp-modal-client');
			var modalName = document.getElementById('lp-modal-name');
			var modalAddr = document.getElementById('lp-modal-addr');
			var modalBoots = document.getElementById('lp-modal-boots');
			var modalSurface = document.getElementById('lp-modal-surface');
			var modalSize = document.getElementById('lp-modal-size');
			var modalArea = document.getElementById('lp-modal-area');

			// 表示非表示
			if (exhibClientTitle) {
				modalExhibClientTitle.textContent = exhibClientTitle + '様';
				modalExhibClientTitle.style.display = 'block';
			} else {
				modalExhibClientTitle.style.display = 'none';
			}

			if (exhibClient) {
				modalExhibClient.textContent = exhibClient;
			} else {
				modalExhibClient.style.display = 'none';
				modalClient.style.display = 'none';
			}

			if (exhibName) {
				modalExhibName.textContent = exhibName;
			} else {
				modalExhibName.style.display = 'none';
				modalName.style.display = 'none';
			}

			if (exhibAddr) {
				modalExhibAddr.textContent = exhibAddr;
			} else {
				modalExhibAddr.style.display = 'none';
				modalAddr.style.display = 'none';
			}

			if (exhibBoots) {
				modalExhibBoots.textContent = exhibBoots;
			} else {
				modalExhibBoots.style.display = 'none';
				modalBoots.style.display = 'none';
			}

			if (exhibSurface) {
				modalExhibSurface.textContent = exhibSurface;
			} else {
				modalExhibSurface.style.display = 'none';
				modalSurface.style.display = 'none';
			}

			if (exhibWidth && exhibHeight) {
				modalExhibSize.textContent = exhibWidth + 'm X ' + exhibHeight + 'm';
			} else {
				modalExhibSize.style.display = 'none';
				modalSize.style.display = 'none';
			}

			if (exhibArea) {
				modalExhibArea.textContent = exhibArea + '㎡';
			} else {
				modalExhibArea.style.display = 'none';
				modalArea.style.display = 'none';
			}

			openModal();
		});
	});

	// 問い合わせ
	// MW WP FORMのスクロール位置調整
	$(function(){
		let target01 = $(".mw_wp_form").eq(0);	// 資料請求フォーム
		let target02 = $(".mw_wp_form").eq(1);	// お問い合わせフォーム

		if (target01.hasClass('mw_wp_form_confirm') || target01.hasClass('mw_wp_form_complete')) {
			var posy = $(target01).offset().top - 80;
			posy = posy + parseInt(mwform_scroll.offset);
			$('body').scrollTop(posy);
			$(window).scrollTop(posy);
		} else if (target02.hasClass('mw_wp_form_confirm') || target02.hasClass('mw_wp_form_complete')) {
			var posy = $(target02).offset().top - 80;
			posy = posy + parseInt(mwform_scroll.offset);
			$('body').scrollTop(posy);
			$(window).scrollTop(posy);
		} 

		//規約チェックボックスの文言変更
		$('.accept-box .mwform-checkbox-field-text').html('<a href="<?php echo esc_url(home_url('privacy-policy-lp/')); ?>" target="_blank" rel="noopener noreferrer" class="underline">プライバシーポリシー</a>に同意する');
	});
	
</script>