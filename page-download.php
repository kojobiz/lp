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

	<div class="lower-headline lh-download">
		<div class="inner page-width">
			<h1 class="headline-01 txt-center">
				<span class="main">DOWNLOAD</span>
				<span class="sub">お役立ち資料</span>
			</h1>
			<figure class="icon">
				<img src="<?php echo get_template_directory_uri() ?>/images/common/kaeru_download.png" width="182" height="190">
			</figure>
		</div>
	</div>

	<div class="breadcrumbs page-width" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php if(function_exists('bcn_display')) {
			bcn_display();
		}?>
	</div>

	<article class="section-block">
		<section class="content page-width">
			<?php echo do_shortcode('[mwform_formkey key="65"]'); ?>
		</section>
	</article>

<?php
get_footer();
