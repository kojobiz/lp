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

	<article class="section-block">
		<section class="content page-width">

			<div class="page-column">
				
				<!-- メインエリア -->
				<div class="main-area">

					<div class="blog-header">
						<div class="headline">
							<h2 class="ttl"><?php the_title(); ?></h2>
						</div>
						<div class="blog-info">
							<dl class="timestamp">
								<dt>作成日</dt>
								<dd><time datetime="<?php the_time('Y-m-d'); ?>" class="date"><?php the_time('Y.m.d'); ?></time></dd>
								<?php if(get_the_time('U') !== get_the_modified_time('U')) : ?>
									<dt>更新日</dt>
									<dd><time datetime="<?php the_modified_date('Y-m-d') ?>" class="date"><?php the_modified_date('Y.m.d') ?></time></dd>
								<?php endif; ?>
							</dl>
							<?php
							$category = get_the_category();
							$cat = $category[0];
							$cat_name = $cat->name;
							$cat_id = $cat->cat_ID;
							$cat_slug = $cat->slug;
							$cat_link = get_category_link($cat_id);
							?>
							<a href="<?php echo $cat_link; ?>" class="cat"><?php echo $cat_name; ?></a>
							<?php
							// 現在のページURLを取得してURLエンコード
							$url_encode = urlencode( get_permalink() );
							// 現在のページのタイトルを取得してURLエンコード
							$title_encode = urlencode( get_the_title() );
							?>
							<ul class="share-link">
								<li>
									<a href="<?php echo esc_url( 'https://twitter.com/share?url=' . $url_encode . '&text=' . $title_encode ); ?>" target="_blank" rel="nofollow noopener">
										<img src="<?php echo get_template_directory_uri() ?>/images/common/icon_twitter.svg" width="25" height="25" alt="Twitter">
									</a>
								</li>
								<li>
									<a href="<?php echo esc_url( 'https://www.facebook.com/share.php?u=' . $url_encode ); ?>" target="_blank" rel="nofollow noopener">
										<img src="<?php echo get_template_directory_uri() ?>/images/common/icon_facebook.svg" width="25" height="25" alt="Facebook">
									</a>
								</li>
								<li>
									<button id="copyBtn">
										<img src="<?php echo get_template_directory_uri() ?>/images/common/icon_copy.svg" width="25" height="25" alt="コピー">
										<span class="msg">URLをコピー<br>しました</span>
									</button>
								</li>
							</ul>
						</div>
					</div>

					<?php if(has_post_thumbnail()): ?>
						<figure class="blog-eyecatch">
							<?php the_post_thumbnail('large'); ?>
						</figure>
					<?php endif; ?>
					
					<!-- <div class="blog-lead">
						<p>
							弊社では、リニューアルの目的に合わせた、企業様ごとに異なるWEBサイトの企画や制作を行っています。<br>
							<br>
							初めてWEBサイトの担当者になった方の多くは、業界が全く違うWEB制作という分野に触れるのが初めてかと思います。<br>
							何から手をつければ良いのか分からないという方がほとんどでは無いでしょうか。<br>
							<br>
							今回は、WEBサイトのリニューアルにおいて最初に決めなければならない「リニューアルの目的」について説明をしていきます。
						</p>
					</div> -->

					<?php while ( have_posts() ) : the_post(); ?>
						<div class="blog-body post-contents">
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>

					<?php if(get_field('form_script')): ?>
						<div class="cv-area">
							<?php the_field('form_script'); ?>
						</div>
					<?php endif; ?>

					<div class="writer-info">
						<figure class="pic">
							<span class="inner">
								<?php echo get_avatar( get_the_author_id(), 300 ); ?>
							</span>
						</figure>
						<dl class="profile">
							<?php
							$author_id = get_the_author_meta('ID');
							$user_position = get_field('position', 'user_'. $author_id);
							$user_comment = get_field('comment', 'user_'. $author_id);
							?>
							<dt class="name"><?php the_author_meta('nickname'); ?></dt>
							<?php if( !empty($user_position) ): ?>
								<dd class="type"><?php echo $user_position; ?></dd>
							<?php endif; ?>
							<?php if( !empty($user_comment) ): ?>
							<?php
							$user_comment = strip_tags($user_comment);
							$user_comment = htmlspecialchars($user_comment);
							?> 
								<dd class="comment"><?php echo $user_comment; ?></dd>
							<?php endif; ?>
						</dl>
					</div>

					<!-- 関連記事 -->
					<?php
					$categ = get_the_category($post->ID);
					$catID = array();
					foreach($categ as $cat){
						array_push($catID, $cat -> cat_ID);
					}
					$args = array(
						'post_type' => 'post',
						'post__not_in' => array($post->ID),
						'category__in' => $catID,
						'posts_per_page' => 6,
						'orderby' => 'rand',
						'post_status' => 'publish'
					);
					$the_query = new WP_Query($args);
					if ( $the_query->have_posts() ) :
					?>
					<div class="related-post">
						<h3 class="headline-03">関連記事</h3>
						<ul class="blog-list">
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
					</div>
					<?php endif; ?>

				</div>

				<!-- サイドエリア -->
				<?php get_sidebar(); ?>

			</div>
		</section>
	</article>

<?php
get_footer();
?>

<script>
const button = $('#copyBtn');
button.find('.msg').hide();
button.on('click', function() {
	navigator.clipboard.writeText('<?php echo get_permalink(); ?>');
	$(this).find('.msg').fadeIn();
	setTimeout(function(){
		button.find('.msg').fadeOut();
	}, 1000 );
});
</script>