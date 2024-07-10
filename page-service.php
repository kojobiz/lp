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
				<span class="main">SERVICE</span>
				<span class="sub">サービス</span>
			</h1>
			<figure class="icon">
				<img src="<?php echo get_template_directory_uri() ?>/images/common/kaeru_service.png" width="226" height="149">
			</figure>
		</div>
	</div>

	<div class="breadcrumbs page-width" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php if(function_exists('bcn_display')) {
			bcn_display();
		}?>
	</div>

	<article class="section-block">
		<section class="content">
			<h2 class="headline-01 txt-center">
				<span class="main">PICK UP</span>
				<span class="sub">ピックアップサービス</span>
			</h2>
			<ul class="l-column col-3 col-1-tab service-list service-pickup">
				<li>
					<figure class="pic">
						<a href="<?php echo esc_url( home_url( '/service' ) ); ?>/exhibition_support/" class="link-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/pickup01.jpg" width="533" height="366">
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
							<img src="<?php echo get_template_directory_uri() ?>/images/service/pickup02.jpg" width="533" height="366">
						</a>
					</figure>
					<dl>
						<dt>ホームページ制作</dt>
						<dd>サイト戦略の策定から、リリース後の改善運⽤まで<br class="pcOnly">お任せください。</dd>
					</dl>
				</li>
				<li>
					<figure class="pic">
						<a href="<?php echo esc_url( home_url( '/service' ) ); ?>/graphic_design/" class="link-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/pickup03.jpg" width="533" height="366">
						</a>
					</figure>
					<dl>
						<dt>グラフィックデザイン</dt>
						<dd>ロゴ、名刺、チラシ、パッケージなど、<br class="pcOnly">紙媒体からノベルティまで何でも制作します。</dd>
					</dl>
				</li>
			</ul>
		</section>
		<section class="content page-width">
			<h3 class="headline-03">Webマーケティング（Webサイト運⽤・運営）</h3>
			<ul class="l-column col-3 col-2-tab service-list">
				<li>
					<figure class="pic">
						<a href="<?php echo esc_url( home_url( '/service' ) ); ?>/web_design/" class="link-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/marketing01.jpg" width="370" height="280">
						</a>
					</figure>
					<dl>
						<dt>ホームページ<br class="spOnly">制作</dt>
						<dd>サイト戦略の策定から、<br class="pcOnly">リリース後の改善運⽤までお任せください。</dd>
					</dl>
				</li>
				<!-- <li>
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/marketing02.jpg" width="370" height="280">
					</figure>
					<dl>
						<dt>Web広告</dt>
						<dd>リスティングやディスプレイ広告など<br class="pcOnly">幅広く対応します。</dd>
					</dl>
				</li>
				<li>
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/marketing03.jpg" width="370" height="280">
					</figure>
					<dl>
						<dt>SNS<br class="spOnly">マーケティング</dt>
						<dd>Facebook、Instagram、Twitter、LINEなどの<br class="pcOnly">SNSを活用して、売上を拡⼤します。</dd>
					</dl>
				</li>
				<li>
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/marketing04.jpg" width="370" height="280">
					</figure>
					<dl>
						<dt>SEO/MEO対策</dt>
						<dd>内部・外部施策や、キーワード分析、<br class="pcOnly">競合調査によるコンテンツSEOをご提案します。</dd>
					</dl>
				</li>
				<li>
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/marketing05.jpg" width="370" height="280">
					</figure>
					<dl>
						<dt>マーケティング<br class="spOnly">オートメーション</dt>
						<dd>マーケティング活動を自動化・効率化し、<br class="pcOnly">匿名顧客の実名化を実現します。</dd>
					</dl>
				</li>
				<li>
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/marketing06.jpg" width="370" height="280">
					</figure>
					<dl>
						<dt>Googleアナリティクス解析</dt>
						<dd>数値データによるWebサイトの理論的な改善案を<br class="pcOnly">ご提⽰します。</dd>
					</dl>
				</li> -->
			</ul>
		</section>
		<section class="content page-width">
			<h3 class="headline-03">セールスプロモーション（イベント・紙媒体・印刷）</h3>
			<ul class="l-column col-3 col-2-tab service-list">
				<li>
					<figure class="pic">
						<a href="<?php echo esc_url( home_url( '/service' ) ); ?>/exhibition_support/" class="link-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/promotion01.jpg" width="370" height="280">
						</a>
					</figure>
					<dl>
						<dt>展⽰会まるごと<br class="spOnly">サポート</dt>
						<dd>ブース企画・事前準備から当日運営・顧客獲得まで<br class="pcOnly">ワンストップでサポートします。</dd>
					</dl>
				</li>
				<li>
					<figure class="pic">
						<a href="<?php echo esc_url( home_url( '/service' ) ); ?>/graphic_design/" class="link-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/promotion02.jpg" width="370" height="280">
						</a>
					</figure>
					<dl>
						<dt>グラフィックデザイン/DTP</dt>
						<dd>ロゴ、名刺、チラシ、パッケージなど、<br class="pcOnly">紙媒体からノベルティまで何でも制作します。</dd>
					</dl>
				</li>
				<li>
					<figure class="pic">
						<a href="<?php echo esc_url( home_url( '/service' ) ); ?>/dm_design/" class="link-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/promotion03.jpg" width="370" height="280">
						</a>
					</figure>
					<dl>
						<dt>DM（ダイレクトメール）</dt>
						<dd>DM制作やその後の効果計測・アフターフォロー<br class="pcOnly">（テレアポ）までおまかせください。</dd>
					</dl>
				</li>
				<li>
					<figure class="pic">
						<a href="<?php echo esc_url( home_url( '/service' ) ); ?>/manual/" class="link-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/promotion04.jpg" width="370" height="280">
						</a>
					</figure>
					<dl>
						<dt>取扱説明書∕マニュアル</dt>
						<dd>製品の使い⽅をわかりやすく説明する説明書を<br class="pcOnly">制作します。<br class="pcOnly">紙媒体／Web媒体／電⼦媒体いずれも対応。</dd>
					</dl>
				</li>
			</ul>
		</section>

		<!-- <section class="content page-width">
			<div class="cv-area01">
				<figure class="pic">
					<img src="<?php echo get_template_directory_uri() ?>/images/service/cv_img.jpg" width="525" height="375" alt="">
				</figure>
				<div class="txt">
					<h3 class="headline-02 h-pdf">⼀向社のサービス事例集</h3>
					<p>⼀向社のくわしいサービス内容や、さまざまな業界・企業規模のお客さまの事例をひとつにまとめました。サービスのご利⽤を具体的にイメージできる参考資料としてお役⽴ていただけます。</p>
					<a href="<?php echo esc_url( home_url( '/download' ) ); ?>" class="btn btn-01 btn-download">資料ダウンロードはこちら</a>
				</div>
			</div>
		</section> -->
	</article>

	<article class="section-block">
		<section class="content page-width">
			<div class="l-column type01 service-point">
				<div class="txt">
					<h3 class="headline-03">⼀向社のサービスの強み</h3>
					<p>⼀向社では広告の枠にとらわれず、お困りごとにはさまざまな視点から解決策をご提案します。「他にはできない」を「お客さまだけに」⼀向社ならではの「アイデアとひらめき」で、お客さまの課題を解決します。</p>
				</div>
				<figure class="pic">
					<img src="<?php echo get_template_directory_uri() ?>/images/service/point01.jpg" width="510" height="358" alt="⼀向社のサービスの強み">
				</figure>
			</div>
		</section>
		<section class="content page-width service-support">
			<h3 class="headline-04">ワンストップでのトータルサポート</h3>
			<p class="mg-b_md">企画から制作、運⽤までブレない⼀気通貫したご⽀援をいたします。</p>
			<figure class="pic txt-center">
				<img src="<?php echo get_template_directory_uri() ?>/images/service/support.jpg" width="727" height="481" alt="ワンストップでのトータルサポート">
			</figure>
		</section>
		<section class="content page-width service-performance">
			<h3 class="headline-04">100年間の豊富な実績</h3>
			<p class="mg-b_md">⻑年にわたり培ってきた経験と実績で、成果を実現します。</p>
			<ul class="l-column col-3 col-2-tab service-list">
				<li>
					<figure class="pic">
						<a href="<?php echo esc_url( home_url( '/work_type' ) ); ?>/promotion/" class="link-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/performance01.jpg" width="370" height="280">
						</a>
					</figure>
					<dl>
						<dt>プロモーション実績</dt>
					</dl>
				</li>
				<li>
					<figure class="pic">
						<a href="<?php echo esc_url( home_url( '/work_type' ) ); ?>/web-design/" class="link-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/performance02.jpg" width="370" height="280">
						</a>
					</figure>
					<dl>
						<dt>ホームページ制作実績</dt>
					</dl>
				</li>
				<li>
					<figure class="pic">
						<a href="<?php echo esc_url( home_url( '/work_type' ) ); ?>/graphic/" class="link-img">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/performance03.jpg" width="370" height="280">
						</a>
					</figure>
					<dl>
						<dt>グラフィックデザイン制作実績</dt>
					</dl>
				</li>
			</ul>
			<a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="btn btn-01 btn-arw btn-center">制作実績一覧を見る</a>
		</section>
	</article>

<?php
get_footer();
?>

<script>
$('.service-list > li dt').matchHeight();
</script>