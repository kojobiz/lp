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
				<source srcset="<?php echo get_template_directory_uri() ?>/images/service/web_design/mv_sp.jpg" media="(max-width: 833px)"/>
				<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/mv_pc.jpg" width="1600" height="650">
			</picture>
			<ul class="page-list">
				<?php if(get_field('download-form')): ?>
					<li>
						<a href="#download">
							<dl>
								<dt>詳しいサービス紹介・事例も確認できる</dt>
								<dd>「資料ダウンロード」</dd>
							</dl>
						</a>
					</li>
				<?php endif; ?>

				<?php if(get_field('consultation-form')): ?>
					<li>
						<a href="#contact">
							<dl>
								<dt>お見積り・今の課題について</dt>
								<dd>「無料相談する」</dd>
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
			<h2 class="ttl">ホームページでこんなご希望はありませんか︖</h2>
			<ul class="check-list">
				<li>問い合わせをもっと増やして、売上や集客につなげたい</li>
				<li>古くなってきたので、トレンドのデザインに作り替えたい</li>
				<li>⾃社のサービスや商品をもっと多くの⼈に知ってもらいたい</li>
				<li>ホームページ関連は全部丸投げしたい</li>
				<li>どこまでも付き添ってくれる制作会社に作ってもらいたい</li>
			</ul>
		</section>
		<section class="resolution-block">
			<div class="page-width txt-center">
				<h3 class="ttl">⼀向社なら、お客さまのどんなご希望にも寄り添い、<br>共に実現していきます︕</h3>
			</div>
		</section>
	</article>

	<article class="section-block svc-sec01">
		<section class="content page-width">
			<h3 class="headline-03 svc-ttl03">⼀向社の強み</h3>
			<div class="svc-flow-v2 svc-strength">
				<div class="flow-box">
					<div class="txt-area">
						<span class="ttl02">STRENGTH01</span>
						<h3 class="ttl01">企画・戦略⽴案から制作、<br>運⽤管理まで⼀気通貫</h3>
						<p>
							⼀向社ではしっかりとお客さまのご要望をヒアリングした上で、付加価値の⾼いアイデアをご提案します。<br>
							ホームページの⽅向性やゴールを設計し、⽬的に合わせたデザインを制作します。ただし、ホームページ作りに終わりはありません。<br>
							「作って終わり」ではなく、その後どのように運⽤・改善するのかが最も⼤切です。数値・データに基づく根拠のあるPDCAを回し、お客さまの事業成⻑に貢献するホームページをともに作り上げていきます。
						</p>
					</div>
					<figure class="pic-area">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/strength01.jpg" width="550" height="378" alt="">
					</figure>
				</div>
				<div class="flow-box">
					<div class="txt-area">
						<span class="ttl02">STRENGTH02</span>
						<h3 class="ttl01">デザイン会社ならではの<br>クリエイティブ⼒</h3>
						<p>
							ホームページの課題で多いのは「オシャレだけど使いにくい」。<br>
							⼤事なのはユーザーにとって使いやすいホームページであることです。<br>
							⼀向社ではユーザビリティを意識した設計を前提に、お客さまの表現したい想いに合わせてデザインします。また、写真撮影やイラスト制作、商品・サービスを伝える動画制作など、お客さまのご要望に合わせてクリエイティブをお作りします。
						</p>
					</div>
					<figure class="pic-area">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/strength02.jpg" width="550" height="362" alt="">
					</figure>
				</div>
				<div class="flow-box">
					<div class="txt-area">
						<span class="ttl02">STRENGTH03</span>
						<h3 class="ttl01">お客さまの事業に<br class="spOnly">どこまでも寄り添う</h3>
						<p>
							⼀向社は単なるホームページ制作会社ではありません。<br>
							制作を通じて、お客さまの事業の奥底までコミットし、時には経営戦略にも⼝出しさせていただきます。<br>
							お客さまの成⻑を第⼀に考え、最新のトレンドや新しいアイデアを積極的に共有し、次の⼀⼿をご提案します。
						</p>
					</div>
					<figure class="pic-area">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/strength03.jpg" width="550" height="312" alt="">
					</figure>
				</div>
			</div>
		</section>

		<section class="content page-width">
			<div class="l-column col-2 col-1-sp web-design-compare">
				<dl class="compare-box other">
					<dt>今までのホームページ</dt>
					<dd>
						<figure>
							<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/compare01.jpg" width="570" height="337" alt="">
							<figcaption class="label">どこに何をお願いすれば良いかわからない…</figcaption>
						</figure>
					</dd>
				</dl>
				<dl class="compare-box own">
					<dt>⼀向社ならすべておまかせ</dt>
					<dd>
						<figure>
							<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/compare02.jpg" width="570" height="337" alt="">
							<figcaption class="label">お客さまのご要望に合わせてご提案します</figcaption>
						</figure>
					</dd>
				</dl>
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
					'terms' => 'web-design'
        )
      )
		);
		$the_query = new WP_Query($args);
		if ( $the_query->have_posts() ) :
		?>
		<section class="content page-width">
			<h3 class="headline-03 svc-ttl03">ホームページの制作実績</h3>
			<p>
				⼀向社ではホームページの中でも特に企業の顔となる「コーポレートサイト（企業サイト）」「BtoBサイト（集客サイト）」<br>
				「リクルートサイト（採⽤サイト）」の実績が豊富です。<br>
				その他、ECサイトやオウンドメディアサイト、多⾔語サイト（英語サイト）など、多岐にわたるジャンルのホームページを制作しています。<br>
				Web広告やSNSを絡めた1枚もののLP（ランディングページ）制作もご提案しています。<br>
				「こんなホームページを作ってみたい！」というご要望に全⼒でお応えします。
			</p>
			<div class="swiper work-slider svc-work-slider">
				<ul class="l-column col-3 col-1-tab swiper-wrapper work-list">
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<li class="swiper-slide work-item">
							<a href="<?php the_permalink(); ?>" target="_blank" class="variableBox">
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
			<a href="<?php echo esc_url( home_url( '/work_type' ) ); ?>/web-design/" target="_blank" class="btn btn-01 btn-arw btn-center">その他の制作実績を⾒る</a>
		</section>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>	

	</article>

	<article class="section-block common-block pd-y_none" data-color="white">
		<section class="content contact-area">
			<div class="inner">
				<h2 class="headline-02 txt-center">ご相談・ご質問等ございましたら、お気軽にお問い合わせください</h2>
				<div class="btn-column">
					<a href="#contact" class="btn btn01">
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
			<h3 class="headline-03 svc-ttl03">ホームページ制作の流れ</h3>
			<ul class="l-column col-3 col-1-sp svc-flow-v3">
				<li class="flow-box">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/flow01.jpg" width="370" height="280" alt="">
					</figure>
					<dl>
						<dt>1.お打ち合わせ</dt>
						<dd>まずはお客さまのビジネスについて理解を深めるために、お打ち合わせでの社内インタビューや、市場・競合調査を⾏います。また、今のホームページのアクセス解析や、プロの⽬による分析・評価を実施し、現状の問題点や課題を洗い出し、お客さまと共有します。</dd>
					</dl>
				</li>
				<li class="flow-box">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/flow02.jpg" width="370" height="280" alt="">
					</figure>
					<dl>
						<dt>2.企画・戦略</dt>
						<dd>ホームページの⽅向性を決める最も重要なフェーズです。インタビューや調査結果をもとに、お客さまの魅⼒をどのようなターゲットにどうやって伝え、どのようなコンテンツ・機能を持たせるかをご提案します。お客さまとともにアイデアを創出し、戦略を作り上げていきます。</dd>
					</dl>
				</li>
				<li class="flow-box">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/flow03.jpg" width="370" height="280" alt="">
					</figure>
					<dl>
						<dt>3.デザイン</dt>
						<dd>企画・戦略に基づいて、ターゲットにとって最適なホームページの構造やレイアウトを設計します。設計書が出来上がれば、お客さまの魅⼒を伝えるデザインを制作していきます。この段階で、写真・イラスト・動画・テキスト（原稿）もお客さまと⼀緒にご⽤意します。</dd>
					</dl>
				</li>
				<li class="flow-box">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/flow04.jpg" width="370" height="280" alt="">
					</figure>
					<dl>
						<dt>4.コーディング・システム構築</dt>
						<dd>デザインが出来上がれば、実際のホームページに実装していきます。パソコン・スマホでの表⽰（レスポンシブ対応）はもちろんのこと、WordPressなどのCMSを利⽤して、簡単にホームページ管理ができるようにシステム構築します。基本的なSEO対策やアクセス解析の設定、セキュリティ対策も実施します。</dd>
					</dl>
				</li>
				<li class="flow-box">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/flow05.jpg" width="370" height="280" alt="">
					</figure>
					<dl>
						<dt>5.公開・アフターフォロー</dt>
						<dd>無事ホームページが公開できれば、しっかり管理・運⽤していくことが⼤切です。お客さま側でコンテンツの更新ができるようにマニュアルを作成します。また、⼀向社にすべて丸投げいただくことも可能です。ドメイン・サーバの保守管理だけでなく、ネットワークの監視や不正アクセス防⽌対策までカバーします。</dd>
					</dl>
				</li>
				<li class="flow-box">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/web_design/flow06.jpg" width="370" height="280" alt="">
					</figure>
					<dl>
						<dt>6.Webマーケティング</dt>
						<dd>ホームページは「作って終わり」ではなく、「作ってからが始まり」です。⼀向社では、Web広告やSNSでの認知拡⼤・問い合わせ増加や、マーケティングオートメーション（MA）でのリード獲得・育成などのPDCA施策をご提案します。お客さまのビジネスが持続的に成⻑できるよう、パートナーとしてご⽀援し続けます。</dd>
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
		
		<section class="content page-width">
			<h2 class="headline-03 svc-ttl03">よくあるご質問</h2>
			<dl class="faq-list">
				<dt>ホームページを制作・リニューアルしたいが、何からはじめて良いかわからない…</dt>
				<dd>まずはお気軽にお問い合わせください。お客さまのご希望や課題感をヒアリングし、どんな流れでどのようなホームページを作っていくか、そもそもホームページを作るべきかどうかまで、お客さまに寄り添った最適なご提案をいたします。</dd>
			</dl>
			<dl class="faq-list">
				<dt>費⽤はどのぐらいかかりますか?</dt>
				<dd>
					お客さまのご要望や案件規模によって柔軟にお⾒積りします。わかりやすい料⾦表があれば良いのですが、<br class="pcOnly">お客さまごとにオリジナルのものを制作しますので、明確にご提⽰するのが難しいのが正直なところです。<br>
					「100〜300万円」が相場として多いですが、お客さまのご予算に最⼤限寄り添いたいと考えています。
				</dd>
			</dl>
			<dl class="faq-list">
				<dt>急いで制作して欲しいのですが可能でしょうか?</dt>
				<dd>
					公開予定⽇や、現状そろっている素材などをご共有いただけましたら、現実的に可能なスケジュールをご提案します。<br>
					お客さまとしっかり協議した上で、「本番公開⽇までに必須のコンテンツは掲載したい」「リリース以降に順次ページを公開していきたい」などのご要望にお応えします。
				</dd>
			</dl>
			<dl class="faq-list">
				<dt>無料で診断してもらうことは可能でしょうか?</dt>
				<dd>
					もちろん無料で診断させていただきます。例えば、アクセス解析ツールの閲覧権限をいただけましたら、定量調査による現状把握をし、<br class="pcOnly">どこを改善すべきかご提案します。その他、プロの⽬によるホームページ調査（ヒューリスティック分析）なども実施しています。<br>
					まずはお気軽にご相談ください。
				</dd>
			</dl>
			<dl class="faq-list">
				<dt>全⾯リニューアルでなく、⼀部のみ改修できますか?</dt>
				<dd>
					⼀部のページ改修や、追加ページの制作も対応可能です。ただし、⼀部改修によりホームページの全体感が崩れたり、<br class="pcOnly">ユーザーにとって不便になりそうであれば、全⾯リニューアルのご提案をさせていただく場合がございます。
				</dd>
			</dl>
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
			<h2 class="headline">ホームページの無料診断・ご相談はこちらから</h2>
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