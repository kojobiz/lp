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

	<nav class="page-navi page-width">
		<ul>
			<li><a href="" class="btn btn-01 btn-arw btn-border is-active" data-color="red">すべて</a></li>
			<li><a href="" class="btn btn-01 btn-arw btn-border" data-color="red">ホームページ制作</a></li>
			<li><a href="" class="btn btn-01 btn-arw btn-border" data-color="red">WEB<br class="spOnly">マーケティング</a></li>
			<li><a href="" class="btn btn-01 btn-arw btn-border" data-color="red">グラフィック<br class="spOnly">デザイン</a></li>
			<li><a href="" class="btn btn-01 btn-arw btn-border" data-color="red">展示会支援</a></li>
		</ul>
	</nav>

	<article class="section-block pd-t_md">
		<section class="content page-width">

			<?php if ( have_posts() ) : ?>

				<ul class="l-column col-3 col-1-tab download-list">
					<?php while ( have_posts() ) : the_post(); ?>
						<li class="download-item">
							<?php
							$downloadImg = get_field('download_img');
							if( !empty( $downloadImg ) ): 
							?>
							<figure class="pic">
								<img src="<?php echo esc_url($downloadImg['url']); ?>" alt="<?php echo esc_attr($downloadImg['alt']); ?>" />
							</figure>
							<?php endif; ?>
							<dl>
								<dt class="headline-02 h-pdf"><?php the_title(); ?></dt>
								<?php if(get_field('download_comment')): ?>
									<dd><?php the_field('download_comment'); ?></dd>
								<?php endif; ?>
							</dl>
							<a href="<?php the_permalink(); ?>" class="btn btn-01 btn-arw btn-center">ダウンロードページへ</a>
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
?>

<script>
	// 高さを合わせる
	$('.download-list dt').matchHeight();
	$('.download-list dd').matchHeight();
</script>