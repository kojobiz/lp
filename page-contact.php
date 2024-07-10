<?php
/**
 * Template Name: お問い合わせ
 *
 * @package ikkosha_theme
 */

get_header();
?>

	<div class="lower-headline lh-service">
		<div class="inner page-width">
			<h1 class="headline-01 txt-center">
				<span class="main">CONTACT</span>
				<span class="sub">お問い合わせ</span>
			</h1>
			<figure class="icon">
				<img src="<?php echo get_template_directory_uri() ?>/images/common/kaeru_contact.png" width="210" height="168">
			</figure>
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
?>

<script>
  $(function() {
    //規約チェックボックスの文言変更
    $('.accept-box .mwform-checkbox-field-text').html('<a href="<?php echo esc_url(home_url('privacy-policy/')); ?>" target="_blank" rel="noopener noreferrer" class="underline">プライバシーポリシー</a>に同意する');
  });
</script>