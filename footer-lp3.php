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
<style>
	.copyright {
		padding-bottom: 1em !important;
	}

	.page-top {
		bottom: 2.2rem !important;
	}
</style>

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
					<a href="<?php echo esc_url(home_url('/service')); ?>/exhibition_support/lp3">
						<figure class="logo">
							<img src="<?php echo get_template_directory_uri() ?>/images/common/logo.svg" width="216" height="46" alt="株式会社一向社">
						</figure>
					</a>
				</div>
			</div>
			<div class="area02">
				<nav class="footer-navi">
					<p><a href="https://ikkosha.co.jp/privacy-policy-lp3/" target="_blank" rel="noopener noreferrer" class="underline">プライバシーポリシー</a></p>
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