<?php
/**
 * The template for displaying all pages
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

get_header();
?>

	<div class="service-headline">
		<div class="inner">
			<picture class="mv">
				<source srcset="<?php echo get_template_directory_uri() ?>/images/service/graphic_design/mv_sp.jpg" media="(max-width: 833px)"/>
				<img src="<?php echo get_template_directory_uri() ?>/images/service/graphic_design/mv_pc.jpg" width="1600" height="650">
			</picture>
			<ul class="page-list">
				<?php if(get_field('consultation-form')): ?>
					<li>
						<a href="#contact">
							<dl>
								<dt>お見積り・制作の相談についてはこちら</dt>
							</dl>
						</a>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>

	<div class="breadcrumbs page-width" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php if(function_exists('bcn_display')) {
			bcn_display();
		}?>
	</div>

	<article class="section-block svc-worries type02">
		<section class="content page-width">
			<h2 class="ttl">こんな⽅は⼀向社へお気軽にご相談ください</h2>
			<ul class="check-list">
				<li>⾃社でデザインしたがなかなか集客につながらない</li>
				<li>イメージに合ったイラストを制作してほしい</li>
				<li>印刷や紙の質にもこだわりたい</li>
				<li>複数の制作会社に依頼したためデザインに統⼀感がない</li>
				<li>Webとも連動させて、効果計測したい</li>
			</ul>
		</section>
		<section class="resolution-block">
			<div class="page-width txt-center">
				<h3 class="ttl">⼀向社なら、ロゴや名刺・チラシ・パンフレット・カタログなど<br>販促物のデザイン制作から印刷までを⼀括してお任せいただけます。</h3>
			</div>
		</section>
	</article>

	<article class="section-block svc-sec01">
		<section class="content page-width">
			<h3 class="headline-03 svc-ttl03">⼀向社のデザイン制作の特徴</h3>
			<div class="svc-flow-v2 svc-strength">
				<div class="flow-box">
					<div class="txt-area">
						<span class="ttl02">STRENGTH01</span>
						<h3 class="ttl01">お客さまにとことん寄り添う</h3>
						<p>
							⼀向社ではお客さまのご要望にお応えし、時にはお互いにアイデアをぶつけ合いながら、納得のいくまでお付き合いいたします。<br>
							お客さまとの直接のやりとりを⼤事にし、親⾝に何でも相談できるお取引を⼼がけています。
						</p>
					</div>
					<figure class="pic-area">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/graphic_design/strength01.jpg" width="550" height="378" alt="">
					</figure>
				</div>
				<div class="flow-box">
					<div class="txt-area">
						<span class="ttl02">STRENGTH02</span>
						<h3 class="ttl01">ロジカルなクリエイティブ</h3>
						<p>
							視覚効果、余⽩の取り⽅、⽂書の組み⽅、適切な書体の選び⽅…などを熟知した経験豊富なデザイナーが、センスだけでなく論理的にも効果を説明できるクリエイティブを制作します。QRコードとの連動で、効果計測をすることも可能です。
						</p>
					</div>
					<figure class="pic-area">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/graphic_design/strength02.jpg" width="550" height="362" alt="">
					</figure>
				</div>
				<div class="flow-box">
					<div class="txt-area">
						<span class="ttl02">STRENGTH03</span>
						<h3 class="ttl01">気軽な打ち合わせ</h3>
						<p>
							⼀向社では、⼤阪をはじめ全国のお客様と幅広くご対応させていただいています。<br>
							当社の事務所はもちろん、訪問でのお打ち合わせ、メール・電話・オンライン（Zoom、Google Meet）など、様々な打ち合わせに対応。お客さまに合わせた打ち合わせ⽅法をご⽤意しておりますのでお気軽にご相談ください。
						</p>
					</div>
					<figure class="pic-area">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/graphic_design/strength03.jpg" width="550" height="312" alt="">
					</figure>
				</div>
			</div>
		</section>

		<?php
		$paged = (int) get_query_var('paged');
		$args = array(
			'posts_per_page' => 6,
			'paged' => $paged,
			'orderby' => 'post_date',
			'order' => 'DESC',
			'post_type' => 'works',
			'post_status' => 'publish',
			'tax_query' => array(
				array(
					'taxonomy' => 'work_type',
					'field' => 'slug',
					'terms' => 'graphic'
        )
      )
		);
		$the_query = new WP_Query($args);
		if ( $the_query->have_posts() ) :
		?>
		<section class="content page-width">
			<h3 class="headline-03 svc-ttl03">グラフィックデザインの制作実績</h3>
			<div class="swiper work-slider svc-work-slider">
				<ul class="l-column col-3 col-1-tab swiper-wrapper work-list">
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<li class="swiper-slide work-item">
							<a href="<?php the_permalink(); ?>" class="variableBox">
								<figure class="inner">
									<?php if(has_post_thumbnail()): ?>
										<?php the_post_thumbnail( 'large', array('class' => 'pic') ); ?>
									<?php else : ?>
										<img src="<?php echo get_template_directory_uri() ?>/images/common/placehold744x744.png" width="372" height="372" class="pic">
									<?php endif; ?>
									<figcaption class="work-name">
										<?php
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
										?>
									</figcaption>
								</figure>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
				<div class="tabOnly">
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
			</div>
			<a href="<?php echo esc_url( home_url( '/work_type' ) ); ?>/graphic" class="btn btn-01 btn-arw btn-center">その他の制作実績を⾒る</a>
		</section>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>	

	</article>

	<article class="section-block common-block pd-y_none" data-color="white">
		<section class="content contact-area">
			<div class="inner">
				<h2 class="headline-02 txt-center">ご相談・ご質問等ございましたら、お気軽にお問い合わせください</h2>
				<div class="btn-column">
					<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn01">
						<img src="<?php echo get_template_directory_uri() ?>/images/common/icon_mail02.png" width="25" height="20" alt="MAIL" class="icon">
						メールでのお問い合わせ
					</a>
					<a href="tel:0120150585" class="btn btn02">
						<dl>
							<dt class="txt-serif"><span>0120-150-<span class="lastnum-tel">585</span></span></dt>
							<dd class="label">受付時間 / 平日 9:00～18:00</dd>
						</dl>
					</a>
				</div>
			</div>
		</section>
	</article>

	<article class="section-block svc-sec02">
		<section class="content page-width">
			<h3 class="headline-03 svc-ttl03">グラフィックデザイン制作の流れ</h3>
			<ul class="l-column col-3 col-1-sp svc-flow-v3">
				<li class="flow-box">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/flow01.jpg" width="370" height="280" alt="">
					</figure>
					<dl>
						<dt>1.お打ち合わせ</dt>
						<dd>訪問・オンラインでの打ち合わせなど、様々に対応しております。お客さまに合わせた打ち合わせ⽅法をご提案いたしますので、お気軽にご相談ください。打ち合わせでは、お客さまのビジネスを理解するためのヒアリングも実施しています。</dd>
					</dl>
				</li>
				<li class="flow-box">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/flow02.jpg" width="370" height="280" alt="">
					</figure>
					<dl>
						<dt>2.お⾒積・スケジュール作成</dt>
						<dd>打ち合わせで制作内容が決まりましたら、お⾒積やスケジュールを作成いたします。<br>イラスト・画像の点数や、販促物のサイズ・枚数などで費⽤が変動いたします。</dd>
					</dl>
				</li>
				<li class="flow-box">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/flow03.jpg" width="370" height="280" alt="">
					</figure>
					<dl>
						<dt>3.デザイン作成</dt>
						<dd>当社のデザイナーがお客さまのご要望に沿って企画し、デザインを作成します。場合によっては複数案を提⽰させていただきます。原稿や素材画像がある場合は、ご提供いただけますと幸いです。</dd>
					</dl>
				</li>
				<li class="flow-box">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/flow04.jpg" width="370" height="280" alt="">
					</figure>
					<dl>
						<dt>4.ご確認・修正</dt>
						<dd>修正回数の制限は設けていませんが、出来るだけスムーズに進むように、細かい⽂字チェックや情報にお間違いがないかなど、お客さま⾃⾝にも最終確認をお願いしております。</dd>
					</dl>
				</li>
				<li class="flow-box">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/flow05.jpg" width="370" height="280" alt="">
					</figure>
					<dl>
						<dt>5.印刷</dt>
						<dd>印刷機や紙によっても異なってくることがあるため、印刷⼊稿前に⾊校正（試し刷り）をオススメしています。（別途有料）⾊校正を⾏わないまま印刷をした際に、⾊の誤差が出ても責任は負い兼ねますのでご了承下さい。</dd>
					</dl>
				</li>
				<li class="flow-box">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/flow06.jpg" width="370" height="280" alt="">
					</figure>
					<dl>
						<dt>6.納品</dt>
						<dd>印刷後、郵送にてご希望の納品先へお届けします。印刷無しのメールでのデータ納品も承っています。<br>また、商品の増刷も承っていますので、お気軽にご相談ください。増刷をご希望される場合、前回の印刷分と⽐べて⾊合いが微妙に異なることがございますが、ご了承ください。</dd>
					</dl>
				</li>
			</ul>
		</section>
		
		<section class="content page-width">
			<h3 class="headline-03 svc-ttl03">その他の⼀向社のサービス</h3>
			<div class="swiper other-service-slider svc-other-service">
				<ul class="other-service-list swiper-wrapper">
					<li class="other-service-card swiper-slide">
						<figure class="pic">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/other01.jpg" width="370" height="280" alt="">
						</figure>
						<dl>
							<dt>Web広告</dt>
							<dd>リスティングやディスプレイ広告など<br>幅広く対応します。</dd>
						</dl>
					</li>
					<li class="other-service-card swiper-slide">
						<figure class="pic">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/other02.jpg" width="370" height="280" alt="">
						</figure>
						<dl>
							<dt>SNSマーケティング</dt>
							<dd>Facebook、Instagram、Twitter、LINEなどの<br class="pcOnly">SNSを活用して、売上を拡⼤します。</dd>
						</dl>
					</li>
					<li class="other-service-card swiper-slide">
						<figure class="pic">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/other03.jpg" width="370" height="280" alt="">
						</figure>
						<dl>
							<dt>マーケティングオートメーション</dt>
							<dd>営業活動を自動化・効率化し、<br>匿名顧客の実名化を実現します。</dd>
						</dl>
					</li>
					<li class="other-service-card swiper-slide">
						<figure class="pic">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/other04.jpg" width="370" height="280" alt="">
						</figure>
						<dl>
							<dt>Googleアナリティクス解析</dt>
							<dd>数値データによるWebサイトの<br class="spOnly">理論的な改善案を<br class="pcOnly">ご提⽰します。</dd>
						</dl>
					</li>
					<li class="other-service-card swiper-slide">
						<figure class="pic">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/other05.jpg" width="370" height="280" alt="">
						</figure>
						<dl>
							<dt>SEO/MEO対策</dt>
							<dd>内部・外部施策や、キーワード分析、<br>競合調査によるコンテンツSEOをご提案します。</dd>
						</dl>
					</li>
				</ul>
				<!-- 前後ボタン -->
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</section>
	</article>

	<?php if(get_field('download-form')): ?>
		<article id="download" class="section-block pd-t_md">
			<section class="content page-width">
				<?php 
				$post_objects = get_field('download-form');
				$postID = $post_objects->ID;
				?>
				<div class="download-contents svc-download">
					<div class="visual-area">
						<?php
						$downloadImg = get_field('download_img', $postID);
						if( !empty( $downloadImg ) ): 
						?>
						<figure class="pic">
							<img src="<?php echo esc_url($downloadImg['url']); ?>" alt="<?php echo esc_attr($downloadImg['alt']); ?>" />
						</figure>
						<?php endif; ?>
						<h3 class="headline-02 h-pdf"><?php echo get_the_title($postID); ?></h3>
						<?php if(get_field('download_comment', $postID)): ?>
							<div class="comment">
								<p><?php the_field('download_comment', $postID); ?></p>
							</div>
						<?php endif; ?>
					</div>
					<div class="form-area download-form">
						<p class="download-msg">フォームに必要事項をご記入いただくと、無料で資料ダウンロードが可能です。</p>
						<?php echo do_shortcode('[mwform_formkey key="65"]'); ?>
					</div>
				</div>
			</section>
		</article>
	<?php endif; ?>

	<?php if(get_field('consultation-form')): ?>
		<article id="contact" class="section-block svc-contact pd-t_none bg-c01">
			<h2 class="headline">無料お見積り・制作の<br class="spOnly">ご相談はこちらから</h2>
			<section class="content page-width">
				<?php echo do_shortcode(get_field('consultation-form')); ?>
			</section>
		</article>
	<?php endif; ?>

<?php
get_footer();
?>

<script>
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

// 制作実績（SPのみ）
const workLength = document.querySelectorAll('.work-slider .swiper-slide').length;
const workSlider = document.getElementsByClassName('work-slider');
window.addEventListener('DOMContentLoaded', () => {
	const options = {
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		loop: true,
		spaceBetween: 0,
		slidesPerView: 1,
	}
	const breakPoint = 834;
	let swiper;
	if ( window.innerWidth < breakPoint ) {
		if (workLength > 1) {
			workSlider[0].classList.remove("no-slide");
			swiper = new Swiper('.work-slider', options);
		} else {
			workSlider[0].classList.add("no-slide");
		}
	} else {
		swiper = undefined;
	}
	window.addEventListener('resize', () => {
		if ( window.innerWidth < breakPoint ) {
			if( swiper ) return;
			if (workLength > 1) {
				workSlider[0].classList.remove("no-slide");
				swiper = new Swiper('.work-slider', options);
			} else {
				workSlider[0].classList.add("no-slide");
			}
		} else {
			if( !swiper ) return;
			swiper.destroy();
			swiper = undefined;
		}
	}, false);
}, false);

// ブログ
const blogSwiper = new Swiper(".other-service-slider", {
	loop: true,
	speed: 1500,
	autoplay: {
		delay: 5000,
	},
	// ボタン
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev"
	},
	slidesPerView: 1,
	spaceBetween: 22,
	breakpoints: {
		834: {
			slidesPerView: 3,
			spaceBetween: 44,
		},
	}
});

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
	$('.accept-box .mwform-checkbox-field-text').html('<a href="<?php echo esc_url(home_url('privacy-policy/')); ?>" target="_blank" rel="noopener noreferrer" class="underline">プライバシーポリシー</a>に同意する');

});

</script>