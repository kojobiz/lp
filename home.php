<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ikkosha_theme
 */

get_header();
?>

	<article class="section-block">
		<section class="content page-width">
			<h2 class="headline-01 txt-center has-icon h-service">
				<span class="main">SERVICE</span>
				<span class="sub">サービス</span>
				<figure class="icon">
					<img src="<?php echo get_template_directory_uri() ?>/images/common/kaeru01.svg" width="220" height="142">
				</figure>
			</h2>
			<ul class="l-column col-3 col-2-tab service-list">
				<li>
					<a href="<?php echo esc_url( home_url( '/service' ) ); ?>/exhibition_support/">
						<figure class="pic">
							<img src="<?php echo get_template_directory_uri() ?>/images/home/service01.png" width="125" height="113" class="pic01">
						</figure>
						<dl>
							<dt>展⽰会まるごと<br class="spOnly">サポート</dt>
							<dd>ブース企画・事前準備から当日運営・顧客獲得まで<br class="pcOnly">ワンストップでサポートします。</dd>
						</dl>
					</a>
				</li>
				<li>
					<a href="<?php echo esc_url( home_url( '/service' ) ); ?>/web_design/">
						<figure class="pic">
							<img src="<?php echo get_template_directory_uri() ?>/images/home/service02.png" width="142" height="119" class="pic02">
						</figure>
						<dl>
							<dt>ホームページ<br class="spOnly">制作</dt>
							<dd>サイト戦略の策定から、リリース後の改善運⽤<br class="pcOnly">までお任せください。</dd>
						</dl>
					</a>
				</li>
				<li>
					<a href="<?php echo esc_url( home_url( '/service' ) ); ?>/graphic_design/">
						<figure class="pic">
							<img src="<?php echo get_template_directory_uri() ?>/images/home/service03.png" width="122" height="121" class="pic03">
						</figure>
						<dl>
							<dt>グラフィック<br class="spOnly">デザイン</dt>
							<dd>ロゴ、名刺、チラシ、パッケージなど、<br class="pcOnly">紙媒体からノベルティまで何でも制作します。</dd>
						</dl>
					</a>
				</li>
				<!-- <li>
					<a href="<?php echo esc_url( home_url( '/service' ) ); ?>">
						<figure class="pic">
							<img src="<?php echo get_template_directory_uri() ?>/images/home/service04.png" width="140" height="138" class="pic04">
						</figure>
						<dl>
							<dt>Web広告</dt>
							<dd>リスティングやディスプレイ広告など<br class="pcOnly">幅広く対応します。</dd>
						</dl>
					</a>
				</li>
				<li>
					<a href="<?php echo esc_url( home_url( '/service' ) ); ?>">
						<figure class="pic">
							<img src="<?php echo get_template_directory_uri() ?>/images/home/service05.png" width="150" height="140" class="pic05">
						</figure>
						<dl>
							<dt>マーケティングオートメーション</dt>
							<dd>マーケティング活動を自動化・効率化し、<br class="pcOnly">匿名顧客の実名化を実現します。</dd>
						</dl>
					</a>
				</li>
				<li>
					<a href="<?php echo esc_url( home_url( '/service' ) ); ?>">
						<figure class="pic">
							<img src="<?php echo get_template_directory_uri() ?>/images/home/service06.png" width="155" height="128" class="pic06">
						</figure>
						<dl>
							<dt>SEO/MEO対策</dt>
							<dd>内部・外部施策や、キーワード分析、<br class="pcOnly">競合調査によるコンテンツSEOをご提案します。</dd>
						</dl>
					</a>
				</li> -->
			</ul>
			<a href="<?php echo esc_url( home_url( '/service' ) ); ?>" class="btn btn-01 btn-arw btn-center">サービス一覧を見る</a>
		</section>
	</article>

	<article class="section-block bg-c01">
		<section class="content page-width">
			<h2 class="headline-01 txt-center has-icon h-strength">
				<span class="main">STRENGTH</span>
				<span class="sub">選ばれる理由</span>
				<figure class="icon">
					<img src="<?php echo get_template_directory_uri() ?>/images/common/kaeru02.svg" width="244" height="126">
				</figure>
			</h2>
			<div class="strength-column">
				<div class="txt">
					<h3 class="headline-02" data-color="red">あらゆるニーズに応えるサービスラインナップ</h3>
					<p>例えばホームページ制作の場合であれば、Webサイトを作って終わりでなく、継続的に成果を上げるためのWebマーケティング施策や、リアルなイベントも含めた集客、メールシステムやネットワーク回線の改善にいたるまで、お客さまのあらゆるお困りごとにお応えします。<strong>「まずはどんなお悩みごとでもお聞かせください」</strong>その姿勢がお客さまの信頼に繋がり、何かあれば真っ先に⼀向社を選んでいただける理由です。</p>
					<a href="<?php echo esc_url( home_url( '/strength' ) ); ?>" class="btn btn-01 btn-arw">詳細はこちら</a>
				</div>
				<figure class="pic">
					<img src="<?php echo get_template_directory_uri() ?>/images/home/strength01.jpg" width="600" height="381" alt="選ばれる理由">
				</figure>
			</div>
		</section>
	</article>

	<article class="section-block">
		
		<?php
		$paged = (int) get_query_var('paged');
		$args = array(
			'posts_per_page' => 6,
			'paged' => $paged,
			// 'orderby' => 'post_date',
			// 'order' => 'DESC',
			'post_type' => 'works',
			'post_status' => 'publish'
		);
		$the_query = new WP_Query($args);
		if ( $the_query->have_posts() ) :
		?>
		<section class="content page-width">
			<h2 class="headline-01 txt-center has-icon h-work">
				<span class="main">WORKS</span>
				<span class="sub">制作実績</span>
				<figure class="icon">
					<img src="<?php echo get_template_directory_uri() ?>/images/common/kaeru03.svg" width="248" height="152">
				</figure>
			</h2>
			<div class="swiper work-slider">
				<ul class="swiper-wrapper work-list">
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
			<a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="btn btn-01 btn-arw btn-center">制作実績一覧を見る</a>
		</section>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>	

		<section class="content page-width">
			<h3 class="headline-02 txt-center">主な取引先</h3>
			<div class="swiper loop-slider">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="<?php echo get_template_directory_uri() ?>/images/home/client/msys.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="<?php echo get_template_directory_uri() ?>/images/home/client/sharp.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="<?php echo get_template_directory_uri() ?>/images/home/client/chugairo.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="<?php echo get_template_directory_uri() ?>/images/home/client/shimadzu.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="<?php echo get_template_directory_uri() ?>/images/home/client/doshisha.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="<?php echo get_template_directory_uri() ?>/images/home/client/daiwa.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="<?php echo get_template_directory_uri() ?>/images/home/client/kobelco.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="<?php echo get_template_directory_uri() ?>/images/home/client/nissin.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="<?php echo get_template_directory_uri() ?>/images/home/client/nomura.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="<?php echo get_template_directory_uri() ?>/images/home/client/docomo.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="<?php echo get_template_directory_uri() ?>/images/home/client/hyogo_univ.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="<?php echo get_template_directory_uri() ?>/images/home/client/shin_kabukiza.png" alt="">
					</div>
				</div>
			</div>
		</section>
	</article>

	<?php
	$paged = (int) get_query_var('paged');
	$args = array(
		'posts_per_page' => 10,
		'paged' => $paged,
		'orderby' => 'post_date',
		'order' => 'DESC',
		'post_type' => 'post',
		'post_status' => 'publish'
	);
	$the_query = new WP_Query($args);
	if ( $the_query->have_posts() ) :
	?>
	<article class="section-block section-blog bg-c01">
		<section class="content page-width">
			<h2 class="headline-01 txt-center has-icon h-blog">
				<span class="main">BLOG</span>
				<span class="sub">ブログ</span>
				<figure class="icon">
					<img src="<?php echo get_template_directory_uri() ?>/images/common/kaeru04.svg" width="130" height="200">
				</figure>
			</h2>
			<div class="swiper blog-slider">
				<ul class="blog-list swiper-wrapper">
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<li class="blog-card swiper-slide">
							<figure class="pic">
								<a href="<?php the_permalink(); ?>">
									<?php if(has_post_thumbnail()): ?>
										<?php the_post_thumbnail('large'); ?>
									<?php else : ?>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 366 266" fill="#cccccc"><rect x="0" y="0" width="366" height="266"></rect></svg>
									<?php endif; ?>
								</a>
							</figure>
							<div class="blog-info">
								<time datetime="<?php the_time('Y-m-d'); ?>" class="date"><?php the_time('Y.m.d'); ?></time>
								<?php
								$category = get_the_category();
								$cat = $category[0];
								$cat_name = $cat->name;
								$cat_id = $cat->cat_ID;
								$cat_slug = $cat->slug;
								$cat_link = get_category_link($cat_id);
								?>
								<a href="<?php echo $cat_link; ?>" class="cat"><?php echo $cat_name; ?></a>
							</div>
							<h3 class="title"><?php the_title(); ?></h3>
						</li>
					<?php endwhile; ?>
				</ul>
				<!-- 前後ボタン -->
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
			<a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn btn-01 btn-arw btn-center">ブログ一覧を見る</a>
		</section>
	</article>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>	

	<article class="section-block section-company">
		<section class="content page-width">
			<h2 class="headline-01 txt-center" data-color="white">
				<span class="main">COMPANY</span>
				<span class="sub">会社案内</span>
			</h2>
			<ul class="company-navi" data-color="white">
				<li><a href="<?php echo esc_url( home_url( '/company' ) ); ?>?id=message" class="btn btn-01 btn-arw btn-border">代表挨拶</a></li>
				<li><a href="<?php echo esc_url( home_url( '/company' ) ); ?>?id=outline" class="btn btn-01 btn-arw btn-border">会社概要</a></li>
				<li><a href="<?php echo esc_url( home_url( '/company' ) ); ?>?id=access" class="btn btn-01 btn-arw btn-border">アクセスマップ</a></li>
				<li><a href="<?php echo esc_url( home_url( '/staff' ) ); ?>" class="btn btn-01 btn-arw btn-border">スタッフ紹介</a></li>
			</ul>
			<a href="<?php echo esc_url( home_url( '/company' ) ); ?>?id=history" class="banner center">
				<picture class="pic">
					<source srcset="<?php echo get_template_directory_uri() ?>/images/home/banner_history_sp.jpg" media="(max-width: 833px)"/>
					<img src="<?php echo get_template_directory_uri() ?>/images/home/banner_history.jpg" width="841" height="182" alt="">
				</picture>
			</a>
		</section>
	</article>

	<?php
	$paged = (int) get_query_var('paged');
	$args = array(
		'posts_per_page' => 3,
		'paged' => $paged,
		'orderby' => 'post_date',
		'order' => 'DESC',
		'post_type' => 'news',
		'post_status' => 'publish'
	);
	$the_query = new WP_Query($args);
	if ( $the_query->have_posts() ) :
	?>
	<article class="section-block news-block">
		<section class="content page-width news-column">
			<h2 class="headline-01 txt-center">
				<span class="main">NEWS</span>
				<span class="sub">お知らせ</span>
			</h2>
			<div class="news-area">
				<ul class="news-list">
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<li>
							<time datetime="<?php the_time('Y-m-d'); ?>" class="date"><?php the_time('Y.m.d'); ?></time>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</li>
					<?php endwhile; ?>
				</ul>
				<a href="<?php echo esc_url( home_url( '/news' ) ); ?>" class="link-more">お知らせ一覧はこちら</a>
			</div>
		</section>
	</article>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>	

<?php
get_footer();
?>

<script>
	// メインビジュアル
	const swiper = new Swiper(".hero-slider", {
		effect: "fade",
		fadeEffect: {
			crossFade: true,
		},
		loop: true,
		speed: 2500,
		autoplay: {
			delay: 5000,
		},
		// ページネーション
		pagination: {
			el: "#hero-pagination",
			clickable: true,
		},
	});

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

	// 主な取引先
	const loopSwiper = new Swiper(".loop-slider", {
		loop: true,
		speed: 6000,
		allowTouchMove: false,
		autoplay: {
			delay: 0,
		},
		// loopedSlides: 2,
		slidesPerView: "auto",
		spaceBetween: 36,
		// slidesPerView: 2,
		// breakpoints: {
		// 	600: {
		// 		slidesPerView: 2,
		// 	},
		// 	768: {
		// 		slidesPerView: 5,
		// 	},
		// 	1025: {
		// 		slidesPerView: 6,
		// 	},
		// },
	});

	// ブログ
	const windowSize = window.innerWidth;
	if (windowSize < 834) {
		blogCount = 1;
	} else {
		blogCount = 3;
	}
	const blogLength = document.querySelectorAll('.blog-slider .swiper-slide').length;
	const blogSlider = document.getElementsByClassName('blog-slider');
	if (blogLength > blogCount) {
		blogSlider[0].classList.remove("no-slide");
		const blogSwiper = new Swiper(".blog-slider", {
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
	} else {
		blogSlider[0].classList.add("no-slide");
	}

	// 高さを合わせる
	$('.service-list .pic').matchHeight();
	$('.service-list dt').matchHeight();
</script>