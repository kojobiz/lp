<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ikkosha_theme
 */

get_header();
?>

	<div class="lower-headline lh-service">
		<div class="inner page-width">
			<h1 class="headline-01 txt-center">
				<span class="main">NEWS</span>
				<span class="sub">お知らせ</span>
			</h1>
			<figure class="icon">
				<img src="<?php echo get_template_directory_uri() ?>/images/common/kaeru_news.png" width="231" height="158">
			</figure>
		</div>
	</div>

	<div class="breadcrumbs page-width" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php if(function_exists('bcn_display')) {
			bcn_display();
		}?>
	</div>

	<article class="section-block">
		<section class="content page-width post-content">
			
			<div class="post-header">
				<time datetime="<?php the_time('Y-m-d'); ?>" class="date"><?php the_time('Y.m.d'); ?></time>
				<h2 class="ttl"><?php the_title(); ?></h2>
			</div>

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="post-body">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
			
		</section>
	</article>

<?php
get_footer();
