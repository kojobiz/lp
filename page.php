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

	<div class="lower-headline lh-service">
		<div class="inner page-width">
			<?php 
			$parent_id = $post->post_parent;
			if ( $parent_id ):	// 子ページの場合
			?>
				<h1 class="headline-01 txt-center">
					<span class="main">TITLE</span>
					<span class="sub"><?php echo $parent_title = get_post($parent_id)->post_title; ?></span>
				</h1>
				<figure class="icon">
					<img src="<?php echo get_template_directory_uri() ?>/images/common/kaeru01a.svg" width="220" height="142">
				</figure>
			<?php else:	// 親ページの場合 ?>
				<h1 class="headline-01 txt-center">
					<span class="main">TITLE</span>
					<span class="sub"><?php the_title(); ?></span>
				</h1>
				<figure class="icon">
					<img src="<?php echo get_template_directory_uri() ?>/images/common/kaeru01a.svg" width="220" height="142">
				</figure>
			<?php endif; ?>
		</div>
	</div>

	<div class="breadcrumbs page-width" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php if(function_exists('bcn_display')) {
			bcn_display();
		}?>
	</div>

	<?php
	while ( have_posts() ) : the_post();

		the_content();

	endwhile; // End of the loop.
	?>

<?php
get_footer();
