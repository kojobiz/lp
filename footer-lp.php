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
	<a href="#" id="pageTop" class="page-top"></a>

	<footer class="site-footer">
		<section class="content">
			<div class="footer-column page-width">
				<div class="area01">
                    <h1 style="font-size: 2rem;">株式会社一向社</h1>
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
                    <br>
					<div class="footer-title">
                        <a href="<?php echo esc_url( home_url( '/service' ) ); ?>/exhibition_support_lp1">
                            <figure class="logo">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/logo.svg" width="216" height="46" alt="株式会社一向社">
                            </figure>
                        </a>
					</div>
				</div>
				<div class="area02">
					<nav class="footer-navi">
                        <p><a href="https://ikkosha.co.jp/privacy-policy/" target="_blank" rel="noopener noreferrer" class="underline">プライバシーポリシー</a></p>
						<!-- <dl>
							<dt><a href="<?php echo esc_url( home_url( '/service' ) ); ?>">サービス</a></dt>
							<dd>
								<ul>
									<li><a href="<?php echo esc_url( home_url( '/service' ) ); ?>/exhibition_support">展⽰会まるごとサポート</a></li>
									<li><a href="<?php echo esc_url( home_url( '/service' ) ); ?>/web_design">ホームページ制作</a></li>
									<li><a href="<?php echo esc_url( home_url( '/service' ) ); ?>/graphic_design">グラフィックデザイン</a></li>
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
						</dl> -->
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
