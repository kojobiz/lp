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

	<div class="lower-headline lh-service">
		<div class="inner page-width">
			<h1 class="headline-01 txt-center">
				<span class="main">STRENGTH</span>
				<span class="sub">選ばれる理由</span>
			</h1>
			<figure class="icon">
				<img src="<?php echo get_template_directory_uri() ?>/images/common/kaeru02a.svg" width="220" height="142">
			</figure>
		</div>
	</div>

	<div class="breadcrumbs page-width" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php if(function_exists('bcn_display')) {
			bcn_display();
		}?>
	</div>

	<div class="strength-lead-block">
		<h2 class="headline-02 txt-center" data-color="red">お客さまに寄り添い、<br class="spOnly">成果にこだわり続ける<br>それが私たち⼀向社の<br class="spOnly">想いです</h2>
		<div class="contents-navi bg-c01">
			<div class="inner page-width txt-serif">
				<h3 class="ttl">一向社の選ばれる理由</h3>
				<ol>
					<li><a href="#strength01">あらゆるニーズに応えるサービスラインナップ</a></li>
					<li><a href="#strength02">百年にわたるさまざまなお客さまへの⽀援実績</a></li>
					<li><a href="#strength03">豊富な経験と専⾨性を持った多様な⼈材⼒</a></li>
				</ol>
				<figure class="pic">
					<img src="<?php echo get_template_directory_uri() ?>/images/strength/point.svg" width="286" height="256" alt="一向社の選ばれる3つの理由">
				</figure>
			</div>
		</div>
	</div>

	<article id="strength01" class="section-block">
		<section class="content page-width">

			<div class="l-column type01 service-point mg-b_lg">
				<div class="txt">
					<h3 class="headline-03">1.あらゆるニーズに応えるサービスラインナップ</h3>
					<p>
						広告代理店だからといって「広告サービス」だけを取り扱っていません。<br>
						例えば、ホームページを作って終わりでなく、継続的に成果を上げるためのWebマーケティング施策や、リアルなイベントも含めた集客、メールシステムやネットワーク回線の改善にいたるまで、お客さまのあらゆるお困りごとにお応えします。<br>
						「まずはどんなお悩みごとでもお聞かせください」その姿勢がお客さまの信頼に繋がり、何かあれば真っ先に⼀向社を選んでいただける理由です。
					</p>
				</div>
				<figure class="pic">
					<img src="<?php echo get_template_directory_uri() ?>/images/strength/strength01.jpg" width="510" height="324" alt="">
				</figure>
			</div>
			
			<h3 class="headline-03">⼀向社の主なサービス</h3>
			<ul class="l-column col-3 col-1-tab service-list">
				<li>
					<figure class="pic">
						<a href="<?php echo esc_url( home_url( '/service' ) ); ?>/exhibition_support/" class="link-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/promotion01.jpg" width="370" height="280">
						</a>
					</figure>
					<dl>
						<dt>展⽰会まるごとサポート</dt>
						<dd>ブース企画・事前準備から当日運営・顧客獲得まで<br class="pcOnly">ワンストップでサポートします。</dd>
					</dl>
				</li>
				<li>
					<figure class="pic">
						<a href="<?php echo esc_url( home_url( '/service' ) ); ?>/web_design/" class="link-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/marketing01.jpg" width="370" height="280">
						</a>
					</figure>
					<dl>
						<dt>ホームページ制作</dt>
						<dd>サイト戦略の策定から、<br class="pcOnly">リリース後の改善運⽤までお任せください。</dd>
					</dl>
				</li>
				<li>
					<figure class="pic">
						<a href="<?php echo esc_url( home_url( '/service' ) ); ?>/graphic_design/" class="link-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/promotion02.jpg" width="370" height="280">
						</a>
					</figure>
					<dl>
						<dt>グラフィックデザイン</dt>
						<dd>ロゴ、名刺、チラシ、パッケージなど、<br class="pcOnly">紙媒体からノベルティまでなんでも制作します。</dd>
					</dl>
				</li>
			</ul>
			<a href="<?php echo esc_url( home_url( '/service' ) ); ?>" class="btn btn-01 btn-arw btn-center">サービス一覧を見る</a>
		</section>

		<!-- <section class="content page-width">
			<div class="cv-area01">
				<figure class="pic">
					<img src="<?php echo get_template_directory_uri() ?>/images/service/cv_img.jpg" width="525" height="375" alt="">
				</figure>
				<div class="txt">
					<h3 class="headline-02 h-pdf">Webサイト制作サービス資料</h3>
					<p>弊社が取り扱うWebサイト制作サービスのご紹介資料です。デジタルマーケティングの知見をもとに、ビジネス成果拡大に貢献するWebサイト制作を行います。</p>
					<a href="<?php echo esc_url( home_url( '/download' ) ); ?>" class="btn btn-01 btn-download">資料ダウンロードはこちら</a>
				</div>
			</div>
		</section> -->
	</article>

	<article id="strength02" class="section-block bg-c01">
		<section class="content page-width">
			<div class="l-column type01 service-point">
				<div class="txt">
					<h3 class="headline-03">2.百年にわたるさまざまなお客さまへの⽀援実績</h3>
					<p>創業当初は「印刷業」として、⾼度経済成⻑期の技術⾰新のもと量産される⼯業製品や家電製品の取扱説明書制作をメイン事業としておりました。<br>その後、プロモーションの多様化やデジタル技術の発展の中で、「ネット×リアル」両⾯でのアプローチを強みに、時代を先取って常に進化し続けてまいりました。<br>100年にわたり「お客さまに寄り添い、成果にこだわり続ける」ことで、業界・企業規模問わず、さまざまなお客さまからの信頼をいただくことができました。</p>
				</div>
				<!-- <figure class="pic">
					<img src="<?php echo get_template_directory_uri() ?>/images/strength/strength02-1.jpg" width="510" height="324" alt="">
				</figure> -->
				<figure class="pic">
					<div class="swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="<?php echo get_template_directory_uri() ?>/images/strength/strength02-1.jpg" width="510" height="324" alt="">
							</div>
							<div class="swiper-slide">
								<img src="<?php echo get_template_directory_uri() ?>/images/strength/strength02-2.jpg" width="510" height="324" alt="">
							</div>
						</div>
					</div>
					<div id="pagination" class="swiper-pagination"></div>
				</figure>
			</div>
		</section>
		<section class="content page-width service-support">
			<h3 class="headline-04">100年の間にお取引頂いた主な企業様（順不同）</h3>
			<ul class="trading-company-list">
				<li><img src="<?php echo get_template_directory_uri() ?>/images/home/client/msys.png" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri() ?>/images/home/client/sharp.png" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri() ?>/images/home/client/chugairo.png" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri() ?>/images/home/client/shimadzu.png" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri() ?>/images/home/client/doshisha.png" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri() ?>/images/home/client/daiwa.png" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri() ?>/images/home/client/kobelco.png" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri() ?>/images/home/client/nissin.png" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri() ?>/images/home/client/nomura.png" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri() ?>/images/home/client/docomo.png" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri() ?>/images/home/client/hyogo_univ.png" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri() ?>/images/home/client/shin_kabukiza.png" alt=""></li>
			</ul>
			<ul class="l-column col-3 col-1-sp">
				<li>
					CTCテクノロジー株式会社<br>
					DTP base Cammp<br>
					FM802<br>
					株式会社 ジーエス・ユアサ コーポレーション<br>
					シャープ株式会社<br>
					オッペン化粧品株式会社<br>
					きひら耳鼻咽喉科<br>
					キョードー大阪<br>
					コベルコビジネスパートナーズ株式会社<br>
					コマツ教習所株式会社<br>
					株式会社サンコーフォト<br>
					野村不動産コマース株式会社<br>
					シスメックス株式会社<br>
					株式会社テレシステムズ<br>
					株式会社ドコモ・インサイトマーケティング<br>
					ナカバヤシ株式会社<br>
					ノックス株式会社<br>
					株式会社ハナヤ勘兵衛<br>
					モック工芸株式会社<br>
					株式会社ルッツ<br>
					株式会社安田陳列<br>
					井上昇商店<br>
					永田眼科<br>
					丸紅ITソリューションズ株式会社<br>
					𠮷野建設株式会社<br>
					京都電子工業株式会社<br>
					郷商事株式会社<br>
					株式会社栗田製作所<br>
					もがみクリニック<br>
					一般財団法人自転車センター<br>
					大林新星和不動産株式会社<br>
					成山興産株式会社<br>
					千里丘観光開発株式会社<br>
					川惣電機工業株式会社<br>
					双葉金属工業株式会社
				</li>
				<li>
					新大阪小倉屋株式会社<br>
					株式会社島津製作所<br>
					東洋アルミニウム株式会社<br>
					丹平製薬株式会社<br>
					中外炉工業株式会社<br>
					津田産業株式会社<br>
					大和ハウス工業株式会社<br>
					同志社校友会<br>
					日新イオン機器株式会社<br>
					日新電機株式会社<br>
					日本ペイントホールディングス株式会社<br>
					一般社団法人梅研究会<br>
					株式会社梅丹本舗<br>
					株式会社富士電装<br>
					丸紅情報システムズ株式会社<br>
					株式会社ステラス<br>
					リタール株式会社<br>
					ラリタン・ジャパン株式会社<br>
					広栄化学株式会社<br>
					Quest Software<br>
					Commvault Systems, Inc<br>
					藍野大学短期大学部<br>
					トーカドエナジー株式会社<br>
					株式会社パルコスペースシステムズ<br>
					宝塚医療大学<br>
					同志社国際中学・高等学校<br>
					株式会社京あはせ<br>
					株式会社池田模範堂<br>
					関西化学機械製作株式会社<br>
					株式会社KOGAO<br>
					EPLAN Software & Services株式会社<br>
					同志社女子中学校・高等学校<br>
					株式会社関電オフィスワーク<br>
					国立大学法人兵庫教育大学<br>
					医療法人池澤クリニック
				</li>
				<li>
					和歌山県農協<br>
					アルテオ・ジャパン株式会社<br>
					株式会社汎設計<br>
					日本クインライト株式会社<br>
					株式会社オプティム<br>
					内海株式会社<br>
					高槻スイミングスクール<br>
					同志社香里中学校・高等学校<br>
					株式会社環境管理会計研究所<br>
					株式会社アクアティック<br>
					株式会社ティーネットジャパン<br>
					TMTマシナリー株式会社<br>
					参天製薬株式会社<br>
					城陽スイミングスクール<br>
					公益社団法人関西経済連合会<br>
					タキイ種苗株式会社<br>
					株式会社九里<br>
					マツイコーポレーション株式会社<br>
					くしま矯正歯科<br>
					株式会社レーベン<br>
					熱研産業株式会社<br>
					株式会社大洋工芸<br>
					テスコ株式会社<br>
					京都地域包括ケア機構<br>
					松原文化会館<br>
					アクティ法律事務所<br>
					株式会社キリン堂<br>
					まつむら皮フ科<br>
					新歌舞伎座<br>
					日本ダイオネクス株式会社<br>
					コフロック株式会<br>
					ダイセン株式会社<br>
					株式会社辻井商会<br>
					株式会社内本商会<br>
					株式会社ツバサ建業
				</li>
			</ul>
			<a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="btn btn-01 btn-arw btn-center">制作実績一覧を見る</a>
		</section>
	</article>

	<article id="strength03" class="section-block">
		<section class="content page-width">
			<div class="l-column type01 service-point">
				<div class="txt">
					<h3 class="headline-03">3.豊富な経験と専⾨性を持った多様な⼈材⼒</h3>
					<p>
						⼀向社にはベテランから若⼿まで、国籍にとらわれない多様なメンバーが在籍しています。1⼈として同じような⼈材はおらず、「3Dモデルを使ったデザインで提案できるクリエイティブディレクター」「Web広告運⽤やサイト構築もできる営業」など、各メンバーが複数の領域にまたがり⾼い専⾨性をもっています。<br>
						また、チームでの⼀体感も⼤事にしています。例えば、展⽰会出展のご依頼があれば、当⽇のお⼿伝いや顧客データ⼊⼒まで、社内メンバー総⼒をあげてご⽀援させていただきます。⼀向社では年代の垣根を超え、⻑年培った知⾒とアップデートされていく最新知識を掛け合わせることで、新たな「アイデアとひらめき」を⽣み出します。
					</p>
				</div>
				<figure class="pic">
					<img src="<?php echo get_template_directory_uri() ?>/images/strength/strength03.jpg" width="510" height="358" alt="">
				</figure>
			</div>
			<a href="<?php echo esc_url( home_url( '/staff' ) ); ?>" class="btn btn-01 btn-arw btn-center">スタッフ紹介を見る</a>
		</section>
	</article>

<?php
get_footer();
?>

<script>
	// メインビジュアル
	const swiper = new Swiper(".swiper", {
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
			el: "#pagination",
			clickable: true,
		},
	});
</script>