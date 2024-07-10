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

	<article class="section-block pd-t_none">
		<section class="content page-width">

			<nav class="page-navi mg-b_lg">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn btn-01 btn-arw btn-border" data-color="red">すべて</a></li>
					<?php
					// 現在のカテゴリIDを取得
					$current_cat_id = get_queried_object_id();

					$catArgs = array (
						'parent' => 0,
						'hide_empty' => 0,
						'exclude' => '1',
					);
					$categories = get_categories($catArgs);
					foreach($categories as $category) {
						if($category->term_id == $current_cat_id) {
							echo '<li><a href="'.get_category_link($category->term_id).'" class="btn btn-01 btn-arw btn-border is-active" data-color="red">'.$category->name.'</a></li>';
						} else {
							echo '<li><a href="'.get_category_link($category->term_id).'" class="btn btn-01 btn-arw btn-border" data-color="red">'.$category->name.'</a></li>';
						}
					}
					?>
				</ul>
			</nav>

			<div class="page-column">
				
				<!-- メインエリア -->
				<div class="main-area">

					<?php if ( have_posts() ) : ?>

						<ul class="blog-list blog-archive">
							<?php while ( have_posts() ) : the_post(); ?>
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
					
					<?php if (paginate_links()): ?>
						<!-- ページャー -->
						<div class="pager-number">
							<?php the_paginate(); ?>
						</div>
					<?php endif ?>

				</div>

				<!-- サイドエリア -->
				<?php get_sidebar(); ?>

			</div>
		</section>
	</article>

<?php
get_footer();
