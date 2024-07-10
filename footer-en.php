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

	<article class="section-block common-block pd-y_none" data-color="white">
		<section class="content contact-area">
			<div class="inner">
				<h2 class="headline-02 txt-center">If you have any questions or concerns, please feel free to contact us.</h2>
				<div class="btn-column">
					<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn01">
						<img src="<?php echo get_template_directory_uri() ?>/images/common/icon_mail02.png" width="25" height="20" alt="MAIL" class="icon">
						Contact us by email
					</a>
					<a href="tel:0120150585" class="btn btn02">
						<dl>
							<dt class="txt-serif"><span>0120-150-<span class="lastnum-tel">585</span></span></dt>
							<dd class="label">Reception hours/weekdays 9:00～18:00</dd>
						</dl>
					</a>
				</div>
			</div>
		</section>
	</article>

	<a href="#" id="pageTop" class="page-top"></a>

	<footer class="site-footer">
		<section class="content">			
			<div class="copyright txt-center">
				<p>&copy; ikkosha Co., Ltd. All Rights Reserved.</p>
			</div>
		</section>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
