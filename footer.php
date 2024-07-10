<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ikkosha_theme
 */

?>

	</main>

	<!-- <article class="section-block common-block pd-y_none" data-color="white">
		<section class="content contact-area">
			<div class="inner">
				<h2 class="headline-02 txt-center">ご相談・ご質問等ございましたら、<br>お気軽にお問い合わせください</h2>
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
		</section>
		<section class="content document-area">
			<div class="inner">
				<h2 class="headline-02 txt-center">事例のご紹介、サービス詳細についての<br class="pcOnly">資料をご用意しています。</h2>
				<a href="<?php echo esc_url( home_url( '/download' ) ); ?>" class="btn btn01">
					<img src="<?php echo get_template_directory_uri() ?>/images/common/icon_document.png" width="22" height="24" alt="Document" class="icon">
					お役立ち資料ダウンロード
				</a>
			</div>
		</section>
	</article> -->

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

	<a href="#" id="pageTop" class="page-top"></a>

	<footer class="site-footer">
		<section class="content">
			<div class="footer-column page-width">
				<div class="area01">
					<h1 class="footer-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<figure class="logo">
								<img src="<?php echo get_template_directory_uri() ?>/images/common/logo.svg" width="216" height="46" alt="株式会社一向社">
								<figcaption class="label">株式会社一向社</figcaption>
							</figure>
						</a>
					</h1>
					<dl class="footer-info">
						<dt>本社</dt>
						<dd>
							〒553-0001 大阪市福島区海老江5-5-7<br>
							TEL.<a href="tel:0120150585">0120-150-<span class="lastnum-tel">585</span></a>
						</dd>
						<dt>東京オフィス</dt>
						<dd>
							〒108-0075 <br class="tabOnly">東京都港区港南2-3-1 大信秋山ビル3F #321<br>
							TEL.<a href="tel:0353243115">03-5324-3115</a>
						</dd>
					</dl>
				</div>
				<div class="area02">
					<nav class="footer-navi">
						<dl>
							<dt><a href="<?php echo esc_url( home_url( '/service' ) ); ?>">サービス</a></dt>
							<dd>
								<ul>
									<li><a href="<?php echo esc_url( home_url( '/service' ) ); ?>/exhibition_support">展⽰会まるごとサポート</a></li>
									<li><a href="<?php echo esc_url( home_url( '/service' ) ); ?>/web_design">ホームページ制作</a></li>
									<li><a href="<?php echo esc_url( home_url( '/service' ) ); ?>/graphic_design">グラフィックデザイン</a></li>
									<!-- <li><a href="<?php echo esc_url( home_url( '/service' ) ); ?>">Web広告</a></li>
									<li><a href="<?php echo esc_url( home_url( '/service' ) ); ?>">SNSマーケティング</a></li>
									<li><a href="<?php echo esc_url( home_url( '/service' ) ); ?>">SEO/MEO対策</a></li>
									<li><a href="<?php echo esc_url( home_url( '/service' ) ); ?>">マーケティングオートメーション</a></li>
									<li><a href="<?php echo esc_url( home_url( '/service' ) ); ?>">Googleアナリティクス解析</a></li> -->
									<li><a href="<?php echo esc_url( home_url( '/service' ) ); ?>/dm_design">DM（ダイレクトメール）</a></li>
									<li><a href="<?php echo esc_url( home_url( '/service' ) ); ?>/manual">取扱説明書／マニュアル</a></li>
								</ul>
							</dd>
						</dl>
						<dl>
							<dt><a href="<?php echo esc_url( home_url( '/strength' ) ); ?>">選ばれる理由</a></dt>
							<dt><a href="<?php echo esc_url( home_url( '/works' ) ); ?>">制作実績</a></dt>
							<dt><a href="<?php echo esc_url( home_url( '/company' ) ); ?>">会社案内</a></dt>
							<dd>
								<ul>
									<li><a href="<?php echo esc_url( home_url( '/company' ) ); ?>?id=message">代表挨拶</a></li>
									<li><a href="<?php echo esc_url( home_url( '/company' ) ); ?>?id=outline">会社概要</a></li>
									<li><a href="<?php echo esc_url( home_url( '/company' ) ); ?>?id=history">100年の歩み</a></li>
									<li><a href="<?php echo esc_url( home_url( '/company' ) ); ?>?id=access">アクセスマップ</a></li>
									<li><a href="<?php echo esc_url( home_url( '/staff' ) ); ?>">スタッフ紹介</a></li>
								</ul>
							</dd>
						</dl>
						<dl>
							<dt><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">ブログ</a></dt>
							<dt><a href="<?php echo esc_url( home_url( '/news' ) ); ?>">お知らせ</a></dt>
							<dt><a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">プライバシーポリシー</a></dt>
						</dl>
					</nav>
				</div>
			</div>
			<div class="copyright txt-center">
				<p>&copy; ikkosha Co., Ltd. All Rights Reserved.</p>
			</div>
		</section>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
