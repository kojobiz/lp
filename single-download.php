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

	<div class="lower-headline lh-small">
		<div class="inner page-width">
			<h1 class="headline-01 txt-center">
				<span class="main sm"><?php the_title(); ?></span>
			</h1>
		</div>
	</div>

	<article class="section-block pd-t_md">
		<section class="content page-width">
			
			<div class="download-contents">
				<div class="visual-area">
					<?php
					$downloadImg = get_field('download_img');
					if( !empty( $downloadImg ) ): 
					?>
					<figure class="pic">
						<img src="<?php echo esc_url($downloadImg['url']); ?>" alt="<?php echo esc_attr($downloadImg['alt']); ?>" />
					</figure>
					<?php endif; ?>
					<?php if(get_field('download_comment')): ?>
						<div class="text">
							<p><?php the_field('download_comment'); ?></p>
						</div>
					<?php endif; ?>
				</div>
				<div class="form-area download-form">
					<p class="mag-top">こちらのフォームにご記入ください<br>【所要時間：1分】</p>
					<?php echo do_shortcode('[mwform_formkey key="65"]'); ?>
				</div>
			</div>
			
		</section>
	</article>

<?php
get_footer();
?>

<script>
  $(function() {
    //規約チェックボックスの文言変更
    $('.accept-box .mwform-checkbox-field-text').html('<a href="<?php echo esc_url(home_url('privacy-policy/')); ?>" target="_blank" rel="noopener noreferrer" class="underline">プライバシーポリシー</a>に同意する');
  });
</script>