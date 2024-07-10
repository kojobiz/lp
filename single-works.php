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

	<?php if(!get_field('exhib-name',$post->ID)) {?>
	<article class="section-block">
		<section class="content page-width work-content">

			<div class="work-header">
				<div class="headline">
					<h2 class="ttl"><?php the_title(); ?></h2>
					<div class="work-name">
						<?php
						$termsParent = get_the_terms($post->ID,'work_type');
						foreach ( $termsParent as $term ){
							if($term->parent == 0) {
								echo '<span class="cat"><a href="'.get_term_link($term->slug, 'work_type').'">'.$term->name.'</a></span>';
							}
						}
						foreach ( $termsParent as $term ){
							if($term->parent != 0) {
								echo '<span class="name"><a href="'.get_term_link($term->slug, 'work_type').'">'.$term->name.'</a></span>';
							}
						}
						?>
					</div>
				</div>
				<?php if(get_field('url')): ?>
					<dl class="site-url">
						<dt>URL</dt>
						<dd><a href="<?php the_field('url'); ?>" target="_blank"><?php the_field('url'); ?></a></dd>
					</dl>
				<?php endif; ?>
				<?php if(get_field('summary')): ?>
					<div class="comment">
						<p><?php the_field('summary'); ?></p>
					</div>
				<?php endif; ?>
			</div>

			<?php
			$workImage = get_field('main_visual');
			if( !empty( $workImage ) ): 
			?>
			<figure class="work-visual">
				<img src="<?php echo esc_url($workImage['url']); ?>" alt="<?php echo esc_attr($workImage['alt']); ?>" />
			</figure>
			<?php endif; ?>

			<div class="work-body">
				
				<?php if(get_field('content01')): ?>
					<div class="inner">
						<h3 class="headline-03">概要・課題</h3>
						<?php the_field('content01'); ?>
					</div>
				<?php endif; ?>

				<?php if(get_field('content02')): ?>
					<div class="inner">
						<h3 class="headline-03">デザインコンセプト</h3>
						<?php the_field('content02'); ?>
					</div>
				<?php endif; ?>

				<?php if(get_field('content03')): ?>
					<div class="inner">
						<h3 class="headline-03">ターゲット</h3>
						<?php the_field('content03'); ?>
					</div>
				<?php endif; ?>

				<?php if(get_field('content04')): ?>
					<div class="inner">
						<h3 class="headline-03">こだわったポイント</h3>
						<?php the_field('content04'); ?>
					</div>
				<?php endif; ?>

			</div>

			<div class="work-capture">
				<?php
				$capture01 = get_field('capture01');
				if( !empty( $capture01 ) ): 
				?>
				<figure class="capture_pc">
					<img src="<?php echo esc_url($capture01['url']); ?>" alt="<?php echo esc_attr($capture01['alt']); ?>" />
				</figure>
				<?php endif; ?>

				<?php
				$capture02 = get_field('capture02');
				if( !empty( $capture02 ) ): 
				?>
				<figure class="capture_sp">
					<img src="<?php echo esc_url($capture02['url']); ?>" alt="<?php echo esc_attr($capture02['alt']); ?>" />
				</figure>
				<?php endif; ?>

				<?php
				$capture03 = get_field('capture03');
				if( !empty( $capture03 ) ): 
				?>
				<figure class="capture_sp">
					<img src="<?php echo esc_url($capture03['url']); ?>" alt="<?php echo esc_attr($capture03['alt']); ?>" />
				</figure>
				<?php endif; ?>
			</div>

			<a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="btn btn-01 btn-arw btn-center">制作実績一覧へ</a>

		</section>
	</article>
	<?php } else {?>
	<article class="section-block">
		<section class="content page-width work-content">

			<div class="work-header">
				<div class="headline">
					<h2 class="ttl"><?php the_title(); ?></h2>
					<div class="work-name">
						<?php
						$termsParent = get_the_terms($post->ID,'work_type');
						foreach ( $termsParent as $term ){
							if($term->parent == 0) {
								echo '<span class="cat"><a href="'.get_term_link($term->slug, 'work_type').'">'.$term->name.'</a></span>';
							}
						}
						foreach ( $termsParent as $term ){
							if($term->parent != 0) {
								echo '<span class="name"><a href="'.get_term_link($term->slug, 'work_type').'">'.$term->name.'</a></span>';
							}
						}
						?>
					</div>
				</div>
			</div>

			<?php
			$workImage = get_field('main_visual');
			if( !empty( $workImage ) ): 
			?>
			<div class="exhib-infos"">
    			<figure class="work-visual exhib-visual">
    				<img src="<?php echo esc_url($workImage['url']); ?>" alt="<?php echo esc_attr($workImage['alt']); ?>" />
    			</figure>
			<?php endif; ?>
				<table class="exhib-tbl">
					<?php if(get_field('exhib-client')){?>
					<tr>
						<td>クライアント名:</td>
						<td><?php echo get_field('exhib-client');?></td>
					</tr>
					<?php }?>
					<?php if(get_field('exhib-name')){?>
					<tr>
						<td>展示会名:</td>
						<td><?php echo get_field('exhib-name');?></td>
					</tr>
					<?php }?>
					<?php if(get_field('exhib-addr')){?>
					<tr>
						<td>開催場所:</td>
						<td><?php echo get_field('exhib-addr');?></td>
					</tr>
					<?php }?>
					<?php if(get_field('exhib-boots')){?>
					<tr>
						<td>小間数:</td>
						<td><?php echo get_field('exhib-boots');?></td>
					</tr>
					<?php }?>
					<?php if(get_field('exhib-surface')){?>
					<tr>
						<td>開放面:</td>
						<td><?php echo get_field('exhib-surface');?></td>
					</tr>
					<?php }?>
					<?php if(get_field('exhib-width')){?>
					<tr>
						<td>サイズ:</td>
						<td><?php echo get_field('exhib-width');?>m X <?php echo get_field('exhib-height'); ?>m</td>
					</tr>
					<?php }?>
					<?php if(get_field('exhib-width')){?>
					<tr>
						<td>面積:</td>
						<td><?php echo floatval(get_field('exhib-width')) * floatval(get_field('exhib-height'));?>m<sup>2</sup></sup></td>
					</tr>
					<?php }?>
				</table>				
			</div>

			<div class="work-body">
				
				<?php if(get_field('content01')): ?>
					<div class="inner">
						<h3 class="headline-03">概要・課題</h3>
						<?php the_field('content01'); ?>
					</div>
				<?php endif; ?>
				
				<?php if(get_field('content02')): ?>
					<div class="inner">
						<h3 class="headline-03">デザインコンセプト</h3>
						<?php the_field('content02'); ?>
					</div>
				<?php endif; ?>

				<?php if(get_field('content03')): ?>
					<div class="inner">
						<h3 class="headline-03">ターゲット</h3>
						<?php the_field('content03'); ?>
					</div>
				<?php endif; ?>

				<?php if(get_field('content04')): ?>
					<div class="inner">
						<h3 class="headline-03">こだわったポイント</h3>
						<?php the_field('content04'); ?>
					</div>
				<?php endif; ?>		

			</div>			
			
			<?php $visuals = CFS()->get( 'visual_set' );
			if($visuals) {?>
			<div class="exhib-visual-set">
    			<ul class="l-column col-3 col-1-tab work-list  work-exhib-list">
    				<?php foreach ($visuals as $visual) { ?>
    					<li class="work-item">
    						<a class="variableBox">
    							<figure class="inner">								
    								<img src="<?php echo $visual['img_item'];?>" width="640" height="449" class="pic wp-post-image"/>
    						</figure>
    						</a>
    					</li>
    				<?php }; ?>
    			</ul>
			</div>
			<?php }?>

			<a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="btn btn-01 btn-arw btn-center">制作実績一覧へ</a>

		</section>
	</article>
	<?php } ?>

	<!-- 関連記事 -->
	<?php
	foreach ( $termsParent as $term ){
		if($term->parent == 0) {
			$tearmSlug = $term->slug;
		}
	}
	$args = array(
		'post_type' => 'works',
		'post__not_in' => array($post->ID),
		'posts_per_page' => 6,
		'orderby' => 'rand',
		'post_status' => 'publish',
		'tax_query' => array(
			array(
				'taxonomy' => 'work_type',
				'field' => 'slug',
				'terms' => $tearmSlug
      )
    )
	);
	$the_query = new WP_Query($args);
	if ( $the_query->have_posts() ) :
	?>
	<article class="section-block">
		<section class="content page-width">
			<h2 class="headline-03">同じカテゴリの実績</h2>
			<ul class="l-column col-3 col-1-tab work-list">
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
		</section>
	</article>
	<?php endif; ?>

<?php
get_footer();
