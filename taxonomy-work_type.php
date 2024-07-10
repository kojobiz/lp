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
				<span class="main">WORKS</span>
				<span class="sub">制作実績</span>
			</h1>
			<figure class="icon">
				<img src="<?php echo get_template_directory_uri() ?>/images/common/kaeru03a.png" width="250" height="152">
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
			<li><a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="btn btn-01 btn-arw btn-border" data-color="red">すべて</a></li>
			<?php
			$current_term_id = get_queried_object_id();	// 現在のタームID
			$ancestor_id = '';
			$ancestors = get_ancestors($current_term_id, 'work_type'); // タクソノミースラッグを指定してタームの配列を取得
			$ancestors = array_reverse($ancestors); // 子親の順番で表示されるので、親子の順番に変更
			foreach( $ancestors as $ancestor ) { // 配列から個々の値を取り出す
				$ancestor_id = $ancestor; // タームID
			}

			$terms = get_terms('work_type',['parent' => 0, 'hide_empty' => 0]);
			foreach ( $terms as $term ){
				if($term->term_id == $current_term_id || $term->term_id == $ancestor_id) {
					echo '<li><a href="'.get_term_link($term->slug, 'work_type').'" class="btn btn-01 btn-arw btn-border is-active" data-color="red">'.$term->name.'</a></li>';
				} else {
					echo '<li><a href="'.get_term_link($term->slug, 'work_type').'" class="btn btn-01 btn-arw btn-border" data-color="red">'.$term->name.'</a></li>';
				}
			}
			?>
		</ul>
	</nav>

	<article class="section-block pd-t_md">
		<section class="content page-width">
			
			<?php if ( have_posts() ) : ?>
			
				<ul class="l-column col-3 col-1-tab work-list">
					<?php while ( have_posts() ) : the_post(); ?>
						<li class="work-item">
							<a href="<?php the_permalink(); ?>" class="variableBox">
								<figure class="inner">
									<?php if(has_post_thumbnail()): ?>
										<?php the_post_thumbnail( 'large', array('class' => 'pic') ); ?>
									<?php else : ?>
										<img src="<?php echo get_template_directory_uri() ?>/images/common/placehold744x744.png" width="372" height="372" class="pic">
									<?php endif; ?>
									<figcaption class="work-name<?php if(get_field('exhib-name',$post->ID)){?> work-exhib-name<?php }?>">
										<?php
										if(get_field('exhib-name',$post->ID)){
										    $strInfo = get_field('exhib-name',$post->ID).'<br>';
										    $strInfo = $strInfo . get_field('exhib-boots',$post->ID) . '小間';
										    $strInfo = $strInfo . get_field('exhib-surface',$post->ID) . '面開放(';
										    $strInfo = $strInfo . get_field('exhib-width',$post->ID) . 'mx';
										    $strInfo = $strInfo . get_field('exhib-height',$post->ID) . 'm)';
										    echo '<span class="cat_exhib">'.$strInfo.'</span>';
										} else {
    										$termsParent = get_the_terms($post->ID,'work_type');
    										foreach ( $termsParent as $term ){
    											if($term->parent == 0) {
    												echo '<span class="cat">'.$term->name.'</span>';
    											}
    										}
    										foreach ( $termsParent as $term ){
    											if($term->parent != 0) {
    												echo '<span class="name">'.$term->name.'</span>';
    											}
    										}
										}
										?>
									</figcaption>
								</figure>
							</a>
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
