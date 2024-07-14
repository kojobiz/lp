<?php
/**
 * Template Name: Lp1 Page
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
/* モーダルのスタイル */
.variableBox:hover {
	cursor: pointer;
}
.modal {
    display: none; /* デフォルトでは表示しない */
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100vw!important;
    height: 100vh!important;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    max-width: 80%;
	max-height: 60%;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -80%);
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

</style>

	<div class="service-headline">
		<div class="inner">
		<!-- <a class="en-link" href="/service/en-exhibition_support/">ENGLISH</a> -->
			<picture class="mv">
				<source srcset="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/mv_sp.jpg" media="(max-width: 833px)"/>
				<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/mv_pc.jpg" width="1600" height="650">
			</picture>
			<ul class="page-list">
				<?php if(get_field('consultation-form')): ?>
					<li>
						<a href="#contact" style="border-radius: 99px; box-shadow: 5px 5px 5px 0 rgba(0, 0, 0, 0.3);">
							<dl>
								<dt>お見積り・出展について</dt>
								<dd>「無料相談する」</dd>
							</dl>
						</a>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>

	<article class="section-block svc-worries">
		<section class="content page-width">
			<h2 class="ttl" style="text-align: center;">展示会出展に関する、<br>こんな「お悩み」ありませんか？</h2>
			<ul class="check-list check-list2">
				<li>初めての出展で<strong>何から手をつけて良いかわからない</strong></li>
				<li>展示会でやりたいことがあるが<strong>新しいアイデアが欲しい</strong></li>
				<li>当日運営の人手が足りない、<strong>担当者が少なくてやることが多すぎる</strong></li>
				<li>以前の展示会で想定していたよりも<strong>集客できなかった</strong></li>
				<li>出展後の顧客リストが<strong>そのまま眠っている</strong></li>
				
			</ul>
		</section>
		<section class="resolution-block">
			<div class="page-width txt-center">
				<h3 class="ttl">一向社の「展示会まるごとサポート」なら<br>展示会のお困りごとのすべてを解決します！</h3>
			</div>
		</section>
	</article>

	<article class="section-block svc-sec01">
		<section class="content page-width">
			<h2 class="headline-02 txt-center svc-ttl01" data-color="red">展示会出展で<br class="spOnly">最も大切なことは<br>１社にすべて任せることです。</h2>
			<p class="txt-lead txt-center">展示会の出展はさまざまなことが同時に一⻫に動くので、抜け漏れや妥協が起きやすくなります。<br>そのため、ご依頼する支援会社はできるだけ少なくすることが失敗を防ぐ最良の方法と言えます。<br>また、ご担当者さまも展示会専任でないことが多いため、ご負担を軽減することで従来の仕事に注力いただけます。</p>
			<!--<h3 class="headline-02 txt-center svc-ttl02" data-color="red">一向社は、展示会に特化したトータルソリューションにより<br>集客・展示会運営・来場者フォロー・商談機会創出までの<br>効果的な戦略を構築します。</h3>-->
			<figure class="pic txt-center">
				<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow.jpg" width="877" height="584" alt="">
			</figure>
		</section>
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
			
			<section class="content page-width" id="last-achvm-intro">
				<h3 class="headline-03 svc-ttl03">実績紹介</h3>
				<?php if ( $the_query->have_posts() ) :	?>
				<div class="svc-work-slider">
					<ul class="l-column col-3 col-1-tab work-list work-exhib-list">

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<li class="work-item">
								<div href="<?php the_permalink(); ?>" target="_blank" class="variableBox">
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
				<!-- モーダル構造 -->
				<div id="modal" class="modal">
					<div class="modal-content">
						<span class="close-button">&times;</span>
						<div class="exhib-infos">
							<figure class="inner">
							<p>モーダルテスト</p>
							<?php if ( $the_query->have_posts() ) :	?>
			<div class="svc-work-slider">
				<ul class="l-column col-3 col-1-tab work-list work-exhib-list">
					<!-- <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?> -->
						<li class="work-item">
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
							</a>
						</li>
					<!-- <?php endwhile; ?> -->
				</ul>
			</div>
			<?php endif; ?>
							<p>モーダルテストここまで</p>
							</figure> 
						</div>
					</div>
				</div>
				
				<!-- ここまでテスト -->

			</section>
			<?php //endif; ?>
			<?php wp_reset_postdata(); ?>

			










			<!-- cta -->
			<article class="section-block common-block" data-color="white">
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
			<!-- サービス詳細と導入の流れ -->
			<section class="content page-width">
				<h3 class="headline-03 svc-ttl03" id="service-flow">サービス詳細と導入の流れ</h3>
				<div class="svc-flow">
					<dl class="flow-box">
						<dt><span>STEP 1</span>綿密な打ち合わせ</dt>
						<dd class="flow-detail">
							<div class="col-2">
								<dl>
									<dt>出展企画</dt>
									<dd>
										<div class="txt">
											<ul class="circle">
												<li>補助金適用診断</li>
												<li>展示会テーマの企画</li>
											</ul>
										</div>
										<figure class="pic">
											<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow01_1.jpg" width="248" height="181" alt="">
										</figure>
									</dd>
								</dl>
								<dl>
									<dt>当日運営の手配・準備</dt>
									<dd>
										<div class="txt">
											<ul class="circle">
												<li>CO（コンパニオン）／MC（司会者）／通訳者選定</li>
												<li>トークスクリプトの作成</li>
											</ul>
										</div>
										<figure class="pic">
											<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow01_2.jpg" width="248" height="181" alt="">
										</figure>
									</dd>
								</dl>
								<dl>
									<dt>クリエイティブ制作</dt>
									<dd>
										<div class="txt">
											<ul class="circle">
												<li>ブースの設計、導線計画、グラフィックデザイン</li>
												<li>展示パネル／映像／サイネージのコンテンツ計画／制作</li>
											</ul>
										</div>
										<figure class="pic">
											<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow01_3.jpg" width="248" height="181" alt="">
										</figure>
									</dd>
								</dl>
								<dl>
									<dt>集客</dt>
									<dd>
										<div class="txt">
											<ul class="circle">
												<li>告知用特設サイト制作</li>
												<li>DMの制作／発送</li>
											</ul>
										</div>
										<figure class="pic">
											<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow01_4.jpg" width="248" height="181" alt="">
										</figure>
									</dd>
								</dl>
							</div>
						</dd>
					</dl>
					<dl class="flow-box">
						<dt><span>STEP 2</span>事前準備</dt>
						<dd class="flow-detail">
							<dl>
								<dt>設営・装飾</dt>
								<dd>
									<div class="txt">
										<ul class="circle">
											<li>ブース設営、自社機材搬入</li>
											<li>持ち込み製品／カタログ／ノベルティの配置</li>
											<li>アンケートの設置</li>
											<li>ネット環境の確認</li>
											<li>音響／映像チェック</li>
											<li>リハーサル</li>
										</ul>
									</div>
									<figure class="pic col-2">
										<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow02_1.jpg" width="248" height="181" alt="">
										<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow02_2.jpg" width="248" height="181" alt="">
									</figure>
								</dd>
							</dl>
						</dd>
					</dl>
					<dl class="flow-box">
						<dt><span>STEP 3</span>出展期間中</dt>
						<dd class="flow-detail">
							<dl>
								<dt>運営サポート</dt>
								<dd>
									<div class="txt">
										<ul class="circle">
											<li>来場者への対応</li>
											<li>プレゼンテーションのスケジュール管理</li>
											<li>オペレーションの確認</li>
											<li>CO／MCのディレクション</li>
											<li>参加者の昼食手配</li>
											<li>懇親会手配</li>
											<li>持ち帰り品の荷造梱包発送</li>
											<li>ブース内の撮影</li>
										</ul>
									</div>
									<figure class="pic col-2">
										<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow03_1.jpg" width="248" height="181" alt="">
										<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow03_2.jpg" width="248" height="181" alt="">
									</figure>
								</dd>
							</dl>
						</dd>
					</dl>
					<dl class="flow-box">
						<dt><span>STEP 4</span>会期終了後</dt>
						<dd class="flow-detail">
							<dl>
								<dt>顧客アフターフォロー</dt>
								<dd>
									<div class="txt">
										<ul class="circle">
											<li>リード入力（名刺登録/リスト化）</li>
											<li>お礼メール</li>
											<li>MAツールへの展開〜顧客育成</li>
											<li>商談テレアポイント</li>
											<li>セミナー集客／テレアポイント</li>
											<li>カタログ／ノベルティの発送</li>
											<li>カタログの補充印刷</li>
										</ul>
									</div>
									<figure class="pic col-2">
										<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow04_1.jpg" width="248" height="181" alt="">
										<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow04_2.jpg" width="248" height="181" alt="">
									</figure>
								</dd>
							</dl>
						</dd>
					</dl>
				</div>
			</section>
		</article>
		<!-- cta -->
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
		<!-- 他社サービスとの比較 -->
		<article class="section-block svc-sec02">
			<section class="content page-width">
				<h3 class="headline-03 svc-ttl03" id="service-comparison">他社サービスとの比較</h3>
				<div class="sp-scroll-table">
					<table class="comparison-table">
						<thead>
							<tr>
								<th class="th01"></th>
								<th class="th02">一般的な展示会支援会社</th>
								<th class="th03">一向社</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th class="th01">サービス範囲</th>
								<td class="td01">
									<span class="valuation soso"></span>
									<p>「装飾のみ」や「当日の運営だけ」などの<br>限定的な対応</p>
								</td>
								<td class="td02">
									<span class="valuation very-good"></span>
									<p>企画の初期段階から出展後のアフターフォローまでワンストップで幅広く対応</p>
								</td>
							</tr>
							<tr>
								<th class="th01">サポート体制</th>
								<td class="td01">
									<span class="valuation soso"></span>
									<p>展示会運営のフロント部分のみ対応</p>
								</td>
								<td class="td02">
									<span class="valuation good"></span>
									<p>出展書類の作成・提出、獲得した名刺のデータ入力などの細かい作業にも対応</p>
								</td>
							</tr>
							<tr>
								<th class="th01">企画</th>
								<td class="td01">
									<span class="valuation soso"></span>
									<p>お客さまのご要望をそのまま実行</p>
								</td>
								<td class="td02">
									<span class="valuation very-good"></span>
									<p>お客さまとの徹底したコミュニケーションにより出展戦略を構築し、ご要望以上のアイデアを提案</p>
								</td>
							</tr>
							<tr>
								<th class="th01">制作・集客</th>
								<td class="td01">
									<span class="valuation soso"></span>
									<p>展示会当日での魅せ方を考慮していないデザイン<br>Webプロモーションには未対応など</p>
								</td>
								<td class="td02">
									<span class="valuation good"></span>
									<p>導線やブースのレイアウトなどを意識した、<br>緻密な戦略に基づくロジカルなブランディングと<br>集客支援</p>
								</td>
							</tr>
							<tr>
								<th class="th01">運営</th>
								<td class="td01">
									<span class="valuation soso"></span>
									<p>ブース設営・撤収のみの対応</p>
								</td>
								<td class="td02">
									<span class="valuation good"></span>
									<p>設営・装飾のみだけでなく、当日の現場サポートやリード獲得の進捗管理まで細やかに対応</p>
								</td>
							</tr>
							<tr>
								<th class="th01">アフターフォロー</th>
								<td class="td01">
									<span class="valuation soso"></span>
									<p>「アフターフォローなし」や「リード取得のみ」などの限定的な対応</p>
								</td>
								<td class="td02">
									<span class="valuation good"></span>
									<p>名刺登録・リスト化からマーケティングオートメーションによる顧客育成やメール配信、商談アポイントなどを実施</p>
								</td>
							</tr>
							<tr>
								<th class="th01">ご予算</th>
								<td class="td01">
									<span class="valuation soso"></span>
									<p>決められた定価での対応</p>
								</td>
								<td class="td02">
									<span class="valuation good"></span>
									<p>お客さまのご予算状況に合わせた、<br>柔軟なお見積り対応</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</section>
		</article>

		
		<!-- ? -->
		<?php //endif; ?>
		<?php wp_reset_postdata(); ?>
		<!-- ? -->
			
		<section class="content page-width pd-y_none" id="service-faq">
			<h2 class="headline-03 svc-ttl03">よくあるご質問</h2>
			<dl class="faq-list">
				<dt>何から始めたら良いかわからないのですが…</dt>
				<dd>展示会で何をするべきかから出展内容や集客計画をお客さまとともに整理していきますので、お気軽にご相談ください。</dd>
			</dl>
			<dl class="faq-list">
				<dt>ブースはシステム、木工どちらも対応可能ですか？</dt>
				<dd>はい、両方対応可能です。展示会施策の全体予算や目的から選定し、ご提案いたします。</dd>
			</dl>
			<dl class="faq-list">
				<dt>準備期間はどれくらい必要ですか？</dt>
				<dd>事前集客を行う場合は3〜6か月前頃から準備するのが理想ですが、内容によっては短期間でも可能です。</dd>
			</dl>
			<dl class="faq-list">
				<dt>費用はどのくらいかかりますか？</dt>
				<dd>お客さまのご要望に沿ったご提案をしますので、最適なプランに合わせて柔軟にお見積りいたします。<br>まずはお気軽にお問い合わせください。</dd>
			</dl>
		</section>
	</article>

	<!-- 帯：無料相談こちら -->
	<?php if(get_field('consultation-form')): ?>
		<article id="contact" class="section-block svc-contact pd-t_none bg-c01">
			<h2 class="headline">無料お見積り・出展の<br class="spOnly">ご相談はこちらから</h2>
			<!-- コンタクトフォーム　/ 展示会用key252 -->
			<section class="content page-width">
				<?php echo do_shortcode('[mwform_formkey key="252"]'); ?>
			</section>
		</article>
	<?php endif; ?>
	<!-- footer -->
	<?php
	get_footer('lp');
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

// variableBoxをクリックしたときにモーダルを開く
document.querySelectorAll('.variableBox').forEach(function(item) {
    item.addEventListener('click', function(event) {
        event.preventDefault();
        openModal();
    });
});
</script>