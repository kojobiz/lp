<?php
/**
 * The template for displaying archive pages
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
		<section class="content page-width">

			<?php if ( have_posts() ) : ?>
			<ul class="news-list">
				<?php while ( have_posts() ) : the_post(); ?>
					<li>
						<time datetime="<?php the_time('Y-m-d'); ?>" class="date"><?php the_time('Y.m.d'); ?></time>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li>
				<?php endwhile; ?>
			</ul>

			<?php else : ?>

				<div class="no-post">
					<p>記事がありません</p>
				</div>
				
			<?php endif; ?>

			<?php if (paginate_links()): ?>
				<!-- ページャー -->
				<div class="pager-number">
					<?php the_paginate(); ?>
				</div>
			<?php endif ?>
			
		</section>
	</article>

<?php
get_footer();
