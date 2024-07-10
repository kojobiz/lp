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

	<div class="lower-headline lh-blog">
		<div class="inner page-width">
			<h1 class="headline-01 txt-center">
				<span class="main">BLOG</span>
				<span class="sub">ブログ</span>
			</h1>
			<figure class="icon">
				<img src="<?php echo get_template_directory_uri() ?>/images/common/kaeru_blog.png" width="128" height="198">
			</figure>
		</div>
	</div>

	<div class="breadcrumbs page-width" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php if(function_exists('bcn_display')) {
			bcn_display();
		}?>
	</div>

	<?php
	$paged = (int) get_query_var('paged');
	$args = array(
		'posts_per_page' => 1,
		'paged' => $paged,
		'orderby' => 'post_date',
		'order' => 'DESC',
		'post_type' => 'post',
		'post_status' => 'publish',
		'meta_key' => 'show_pickup',
		'meta_value' => 'show',
		'meta_compare' => 'LIKE'
	);
	$the_query = new WP_Query($args);
	if ( $the_query->have_posts() ) :
	?>
	<article class="section-block">
		<section class="content page-width">
			<h2 class="headline-01 txt-center">
				<span class="main">PICK UP</span>
				<span class="sub">ピックアップ記事</span>
			</h2>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="blog-card blog-pickup">
				<figure class="pic">
					<a href="<?php the_permalink(); ?>">
						<?php if(has_post_thumbnail()): ?>
							<?php the_post_thumbnail('large'); ?>
						<?php else : ?>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 422" fill="#cccccc"><rect x="0" y="0" width="600" height="422"></rect></svg>
						<?php endif; ?>
					</a>
				</figure>
				<div class="txt">
					<div class="blog-info">
						<time datetime="<?php the_time('Y-m-d'); ?>" class="date"><?php the_time('Y.m.d'); ?></time>
						<?php
						$category = get_the_category();
						$cat = $category[0];
						$cat_name = $cat->name;
						$cat_id = $cat->cat_ID;
						$cat_slug = $cat->slug;
						$cat_link = get_category_link($cat_id);
						?>
						<a href="<?php echo $cat_link; ?>" class="cat"><?php echo $cat_name; ?></a>
					</div>
					<h3 class="title"><?php the_title(); ?></h3>
					<p class="excerpt"><?php echo get_the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="btn btn-01 btn-arw">詳細はこちら</a>
				</div>
			</div>
			<?php endwhile; ?>
		</section>
	</article>
	<?php endif ?>
	<?php wp_reset_postdata(); ?>	

	<article class="section-block pd-t_none">
		<section class="content page-width">

			<nav class="page-navi mg-b_lg">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn btn-01 btn-arw btn-border is-active" data-color="red">すべて</a></li>
					<?php
					$catArgs = array (
						'parent' => 0,
						'hide_empty' => 0,
						'exclude' => '1',
					);
					$categories = get_categories($catArgs);
					foreach($categories as $category) {
					echo '<li><a href="'.get_category_link($category->term_id).'" class="btn btn-01 btn-arw btn-border" data-color="red">'.$category->name.'</a></li>';
					}
					?>
				</ul>
			</nav>

			<div class="page-column">
				
				<!-- メインエリア -->
				<div class="main-area">

					<?php
					$paged = (int) get_query_var('paged');
					$args = array(
						'posts_per_page' => 10,
						'paged' => $paged,
						'orderby' => 'post_date',
						'order' => 'DESC',
						'post_type' => 'post',
						'post_status' => 'publish'
					);
					$the_query = new WP_Query($args);
					if ( $the_query->have_posts() ) :
					?>
					<ul class="blog-list blog-archive">
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<li class="blog-card">
								<figure class="pic">
									<a href="<?php the_permalink(); ?>">
										<?php if(has_post_thumbnail()): ?>
											<?php the_post_thumbnail('large'); ?>
										<?php else : ?>
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 366 266" fill="#cccccc"><rect x="0" y="0" width="366" height="266"></rect></svg>
										<?php endif; ?>
									</a>
								</figure>
								<div class="txt">
									<div class="blog-info">
										<time datetime="<?php the_time('Y-m-d'); ?>" class="date"><?php the_time('Y.m.d'); ?></time>
										<?php
										$category = get_the_category();
										$cat = $category[0];
										$cat_name = $cat->name;
										$cat_id = $cat->cat_ID;
										$cat_slug = $cat->slug;
										$cat_link = get_category_link($cat_id);
										?>
										<a href="<?php echo $cat_link; ?>" class="cat"><?php echo $cat_name; ?></a>
									</div>
									<h3 class="title"><?php the_title(); ?></h3>
									<p class="excerpt"><?php echo get_the_excerpt(); ?></p>
								</div>
							</li>
						<?php endwhile; ?>
					</ul>

					<?php else : ?>

						<div class="no-post">
							<p>記事がありません</p>
						</div>
						
					<?php endif; ?>
					
					<?php if ($the_query->max_num_pages > 1): ?>
						<!-- ページャー -->
						<div class="pager-number">
							<?php
							echo paginate_links(array(
								'base' => get_pagenum_link(1) . '%_%',
								'format' => 'page/%#%/',
								'current' => max(1, $paged),
								'total' => $the_query->max_num_pages
							));
							?>
						</div>
					<?php endif ?>
					<?php wp_reset_postdata(); ?>	

				</div>

				<!-- サイドエリア -->
				<?php get_sidebar(); ?>

			</div>
		</section>
	</article>

<?php
get_footer();
