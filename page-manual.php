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
				<source srcset="<?php echo get_template_directory_uri() ?>/images/service/manual/mv_sp.jpg" media="(max-width: 833px)"/>
				<img src="<?php echo get_template_directory_uri() ?>/images/service/manual/mv_pc.jpg" width="1600" height="650">
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
								<dt>お見積り・制作について</dt>
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
			<h2 class="ttl">取扱説明書∕マニュアルでこんなお悩みはありませんか︖</h2>
			<ul class="check-list">
				<li>ユーザーからわかりにくいとクレームがあった</li>
				<li>社内の⼈材で制作しており、他の業務を圧迫する</li>
				<li>すでに作成済みの取扱説明書／マニュアルについて、内容やデザインをリニューアルしたい</li>
				<li>掲載⽤のイラスト制作に多⼤な時間とコストがかかる</li>
				<li>紙媒体で作成している取扱説明書／マニュアルを、Web媒体や電⼦媒体にしたい</li>
				<li>企画・構成や原稿作成の段階からサポートしてほしい</li>
				<li>内容が法律的に問題ないかチェックしてほしい</li>
				<li>海外から輸入した製品を日本で販売するにあたって、日本語の取扱説明書／マニュアルを作成してほしい</li>
				<li>制作を全部丸投げしたい</li>
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
						<h3 class="ttl01">⼤⼿家電メーカーさまの取扱説明書（紙媒体・電⼦媒体）を⻑年担当している、豊富な制作実績</h3>
						<p>
							⼀向社は、シャープ株式会社さまの液晶テレビ／有機ELテレビ「AQUOS」の取扱説明書を、ブランド⽴ち上げの2000年代初頭より受注しています。紙媒体はもちろん、近年では電⼦媒体およびWeb媒体の取扱説明書も制作しています。<br>
							⻑年の制作実績により、経験豊富なスタッフがお客さまの取扱説明書／マニュアルづくりをサポートします。
						</p>
					</div>
					<figure class="pic-area">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/manual/img1.jpg" width="550" height="378" alt="">
					</figure>
				</div>
				<div class="flow-box">
					<div class="txt-area">
						<span class="ttl02">STRENGTH02</span>
						<h3 class="ttl01">企画・構成・表現設計から原稿作成、紙媒体・電⼦媒体の制作・テクニカルイラスト作成まで⼀気通貫</h3>
						<p>
							⼀向社は取扱説明書／マニュアルの制作のみならず、企画・構成の段階からお客さまをサポートします。<br>
							お客様がユーザーに伝えたい内容や現状からの改善点を整理し、新しく制作する取扱説明書／マニュアルに反映するためのアイデアを提案させていただきます。<br>
							また、紙媒体・電⼦媒体・Web媒体いずれも対応しています。例えば、「簡単な紙媒体の取扱説明書を商品に添付して、詳細はWebマニュアルで説明する」といった展開も可能です。<br>
							テクニカルイラストの制作も⾏っているため、共通のイラストを作成して複数の媒体で使⽤することも可能です。
						</p>
					</div>
					<figure class="pic-area">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/manual/img2.jpg" width="550" height="378" alt="">
					</figure>
				</div>
				<div class="flow-box">
					<div class="txt-area">
						<span class="ttl02">STRENGTH03</span>
						<h3 class="ttl01">「TC（テクニカルコミュニケーション）検定」の資格を持った専⾨スタッフが、お客さまの取扱説明書・マニュアル制作にとことん寄り添う</h3>
						<p>
							⼀向社には、「TC（テクニカルコミュニケーション）検定」という取扱説明書／マニュアル制作の資格を持ったプロフェッショナルのスタッフが在籍しています。<br>
							お客さまのご要望にお応えし、時にはユーザーにわかりやすい内容にするためのアイデアをご提案しながら、納得のいくまでお付き合いいたします。
						</p>
					</div>
					<figure class="pic-area">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/manual/img3.jpg" width="550" height="378" alt="">
					</figure>
				</div>
			</div>
		</section>

		<section class="content page-width">
			<h3 class="headline-02 txt-center svc-ttl02" data-color="red">一向社ならすべておまかせ</h3>
			<figure class="pic txt-center">
				<img src="<?php echo get_template_directory_uri() ?>/images/service/manual/img4.jpg" width="800" height="612" alt="">
			</figure>
		</section>

		<?php
		$paged = (int) get_query_var('paged');
		$args = array(
			'posts_per_page' => 3,
			'paged' => $paged,
			'orderby' => 'post_date',
			'order' => 'DESC',
			'post_type' => 'works',
			'post_status' => 'publish',
			'tax_query' => array(
				array(
					'taxonomy' => 'work_type',
					'field' => 'slug',
					'terms' => 'manual-cat'
        )
      )
		);
		$the_query = new WP_Query($args);
		//if ( $the_query->have_posts() ) :
		?>
		<section class="content page-width">
			<h3 class="headline-03 svc-ttl03">取扱説明書∕マニュアルの制作実績</h3>
			<p>
				⼀向社には、シャープ株式会社さまの液晶テレビ／有機ELテレビ「AQUOS」取扱説明書の制作をはじめとした、豊富な実績があります。<br>
				紙媒体はもちろん、電⼦媒体やWeb媒体での取扱説明書／マニュアルも対応しています。<br>
				TC（テクニカルライティング）検定の資格を持ったスタッフが、制作のみならず必要に応じて原稿作成の段階からサポートさせていただきます。
			</p>
			<?php if ( $the_query->have_posts() ) :	?>
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
			<?php endif; ?>
			<a href="<?php echo esc_url( home_url( '/work_type' ) ); ?>/manual-cat/" target="_blank" class="btn btn-01 btn-arw btn-center">その他の制作実績を⾒る</a>
		</section>
		<?php //endif; ?>
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
			<h3 class="headline-03 svc-ttl03">取扱説明書∕マニュアル制作の流れ</h3>
			<ul class="l-column col-3 col-1-sp svc-flow-v3">
				<li class="flow-box">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/manual/img5.jpg" width="370" height="280" alt="">
					</figure>
					<dl>
						<dt>1.お打ち合わせ</dt>
						<dd>
							製品仕様や必要なデータの確認、スケジュール確認など、取扱説明書／マニュアルの制作に関する必要事項のお打ち合わせを⾏います。<br>
							現⾏の取扱説明書／マニュアルについても、ご要望に応じて分析・評価を実施のうえ、現状の問題点や課題を洗い出し、お客さまと共有します。
						</dd>
					</dl>
				</li>
				<li class="flow-box">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/manual/img6.jpg" width="370" height="280" alt="">
					</figure>
					<dl>
						<dt>2.企画・構成・表現設計</dt>
						<dd>
							お打合せの内容や現状の問題点等を踏まえ、まずターゲットユーザーや解決するべき課題など、企画段階の⽅針を決定します。次に、⽬標・課題を達成するためにどのような構成が適切か情報のグルーピング・整理を⾏い、⽬次構成を検討します。並⾏して、取扱説明書／マニュアルをどのような媒体（紙媒体・電⼦媒体・Web媒体など）で作成するのか、どのような編集⽅針で作成するのかなど、表現⽅法を具体的に決める作業も⾏います。
						</dd>
					</dl>
				</li>
				<li class="flow-box">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/manual/img7.jpg" width="370" height="280" alt="">
					</figure>
					<dl>
						<dt>3.原稿作成・編集</dt>
						<dd>
							原稿作成を⾏います。<br>
							新規に作成する場合は、⽬次の構成からご提案します。ベースとなる取扱説明書／マニュアルがある場合、仕様書などの各種資料より変更箇所を抽出し、編集⽤の原稿を作成いたします。<br>
							直近の制作事例では、原稿データはすべてPDFにて管理しています。PDFのテキスト検索により、仕様変更箇所を漏れなく原稿に反映します。修正履歴についても、スムーズな確認が可能です。
						</dd>
					</dl>
				</li>
				<li class="flow-box">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/manual/img8.jpg" width="370" height="280" alt="">
					</figure>
					<dl>
						<dt>4.デザイン</dt>
						<dd>
							ご要望に応じて、ユーザーにとって最適な取扱説明書のデザインを制作します。<br>
							製品の使⽤⽅法をわかりやすく、かつ必要な情報を適切に伝えるデザイン・レイアウトをご提案します。
						</dd>
					</dl>
				</li>
				<li class="flow-box">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/manual/img9.jpg" width="370" height="280" alt="">
					</figure>
					<dl>
						<dt>5.実制作（DTP/テクニカルイラスト作成、コーディングなど）</dt>
						<dd>
							デザイン⼯程で作成した雛形をベースとして、媒体に応じた作業を⾏います。紙媒体であればDTP、電⼦媒体・Web媒体であればコーディング作業を経験豊富なスタッフが⾏います。取扱説明書／マニュアルに記載するための「テクニカルイラスト」も作成します。
						</dd>
					</dl>
				</li>
				<li class="flow-box">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/manual/img10.jpg" width="370" height="280" alt="">
					</figure>
					<dl>
						<dt>6.納品・アフターフォロー</dt>
						<dd>
							納品後も必要に応じて取扱説明書／マニュアルの改訂・改善を⾏ないます。<br>
							Web媒体であれば、公開・納品後もデータの更新・メンテナンスが可能となります。<br>
							その他、ユーザーからの問い合わせなど課題が残った場合、必要に応じた改訂作業や、次回案件企画時のフィードバックを⾏います。
						</dd>
					</dl>
				</li>
			</ul>
		</section>
				
		<section class="content page-width">
			<h2 class="headline-03 svc-ttl03">よくあるご質問</h2>
			<dl class="faq-list">
				<dt>費⽤はどのくらいかかりますか？</dt>
				<dd
					>お客さまのご要望や案件規模によって柔軟にお⾒積りします。わかりやすい料⾦表があれば良いのですが、<br class="pcOnly">制作する媒体（紙媒体・電⼦媒体・Web媒体）や内容（企画・構成、原稿作成・編集、デザイン、DTP、コーディング、イラスト作成、リーガルチェックなど）の組み合わせによるため、まずはお気軽にお問い合わせをお願いいたします。<br>
					内容をヒアリングしたうえで、お客さまのご予算に最⼤限寄り添ったお⾒積りをさせていただきます。</dd>
			</dl>
			<dl class="faq-list">
				<dt>急いで制作してほしいのですが可能でしょうか？</dt>
				<dd>
					納品予定⽇や、現状そろっている素材などをご共有いただけましたら、現実的に可能なスケジュールをご提案します。<br>
					お客さまとしっかり協議した上で、「イラストのみ素材がそろっているので先に進⾏する」「紙媒体で必須の情報のみ先⾏して作成し、<br class="pcOnly">追ってWeb媒体を作成・更新する」など、媒体や製品の⽣産スケジュールによって柔軟に対応させていただきます。
				</dd>
			</dl>
			<dl class="faq-list">
				<dt>実制作だけでなく、⽬次構成案や原稿の段階から作成してほしいのですが可能でしょうか？</dt>
				<dd>
					可能です。弊社では「TC（テクニカルコミュニケーション）検定」の資格を持ったスタッフが在籍していますので、<br class="pcOnly">必要な資料を⽀給いただければ⽬次構成案や原稿の段階からご提案させていただきます。
				</dd>
			</dl>
			<dl class="faq-list">
				<dt>イラストも作成してほしいのですが、可能でしょうか？</dt>
				<dd>
					可能です。取扱説明書・マニュアルに記載するための「テクニカルイラスト」についても豊富な実績がございます。<br>
					現物の写真からでも、3Dデータからでも作成することが可能です。
				</dd>
			</dl>
			<dl class="faq-list">
				<dt>電⼦媒体・Web媒体の取扱説明書も制作可能でしょうか？</dt>
				<dd>
					可能です。弊社には、シャープ株式会社さまの液晶テレビ／有機ELテレビ「AQUOS」の電⼦取扱説明書をはじめ、<br class="pcOnly">電⼦媒体・Web媒体の取扱説明書でも豊富な実績がございます。<br>
					紙の取扱説明書を電⼦媒体・Web媒体に移⾏する案件も実績がございますので、まずはお気軽にお問い合わせください。
				</dd>
			</dl>
			<dl class="faq-list">
				<dt>紙の取扱説明書のページ数を減らしたいのですが、可能でしょうか？</dt>
				<dd>
					可能です。現⾏の取扱説明書を確認させていただき、構成から検討させていただきます。<br>
					紙媒体のみでページ数を削減する、紙媒体とWeb媒体を併⽤した構成にするなど、<br class="pcOnly">製品仕様や取扱説明書の内容に応じた改善案をご提案させていただきます。
				</dd>
			</dl>
			<dl class="faq-list">
				<dt>多⾔語対応は可能でしょうか？</dt>
				<dd>
					可能です。⽇本語の取扱説明書を多⾔語展開した事例もございます。まずはお気軽にお問い合せください。
				</dd>
			</dl>
			
			<dl class="faq-list">
				<dt>製造物責任法（PL法）、薬機法など、取扱説明書の内容が法律上問題ないか確認することも可能でしょうか？
</dt>
				<dd>
					可能です。リーガルチェックについても、ご要望に応じて対応させていただきます。まずはお気軽にお問い合わせください。
				</dd>
			</dl>
			
			<dl class="faq-list">
				<dt>⼀般的な製品に添付する「取扱説明書」ではないのですが、<br class="pcOnly">「ソフトウェアのマニュアル」や「社内⽤の業務マニュアル」等の制作も可能でしょうか？</dt>
				<dd>
					内容によっては可能です。「マニュアル」という⾔葉は広義であり、どういった内容のマニュアル制作に対してどの⼯程を<br class="pcOnly">サポートさせていただくかによって、対応の可否がございます。まずはお気軽にお問い合わせください。
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
			<h2 class="headline">取扱説明書∕マニュアルについての<br class="pcOnly">お問い合わせ・ご相談はこちらから</h2>
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
	//$('.accept-box .mwform-checkbox-field-text').html('<a href="<?php echo esc_url(home_url('privacy-policy/')); ?>" target="_blank" rel="noopener noreferrer" class="underline">プライバシーポリシー</a>に同意する');

});

</script>