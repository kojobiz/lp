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

	<?php 
  if(isset($_GET['pid'])) {
    $postID = $_GET['pid'];
  } else {
		$postID = '';
	}
	$postName = get_the_title( $postID );
  ?>

	<div class="lower-headline lh-small">
		<div class="inner page-width">
			<h1 class="headline-01 txt-center">
				<span class="main sm"><?php echo $postName; ?></span>
			</h1>
		</div>
	</div>

	<article class="section-block pd-t_md contact-complete">
		<section class="content page-width">
			<h3 class="headline-02 txt-center" data-color="red">資料ダウンロード<br class="spOnly">ありがとうございました。</h3>
			<div class="txt-center">
				<p>
					ご登録いただいたメールアドレス宛に資料のダウンロードURLを記載したメールが送信されます。<br>
					メールが届かない場合は、正しく送信されていない、迷惑メールフォルダに振り分けられている可能性もございますので、<br class="pcOnly">お⼿数ですが、ご確認をお願いいたします。<br>
					<br>
					⼀向社は集客に関するあらゆるお困りごとに寄り添って解決します。<br>
					興味のある⽅は、サービス内容・制作実績をご覧ください。
				</p>
			</div>
			
			<ul class="thanks-navi">
				<li>
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/common/kaeru_service.png" width="265" height="174">
					</figure>
					<a href="<?php echo esc_url( home_url( '/service' ) ); ?>" class="btn btn-01 btn-arw btn-center">サービス一覧を見る</a>
				</li>
				<li>
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/common/kaeru03a.png" width="288" height="175">
					</figure>
					<a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="btn btn-01 btn-arw btn-center">制作実績を見る</a>
				</li>
			</ul>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-01 btn-arw btn-center">トップページへ</a>
			
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