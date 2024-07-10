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
			<h1 class="headline-01 txt-center">
				<span class="main">COMPANY</span>
				<span class="sub">会社案内</span>
			</h1>
			<figure class="icon">
				<img src="<?php echo get_template_directory_uri() ?>/images/common/kaeru05a.png" width="220" height="164">
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
			<li><a href="<?php echo esc_url( home_url( '/company' ) ); ?>?id=message" class="btn btn-01 btn-arw btn-border" data-color="red">代表挨拶</a></li>
			<li><a href="<?php echo esc_url( home_url( '/company' ) ); ?>?id=outline" class="btn btn-01 btn-arw btn-border" data-color="red">会社概要</a></li>
			<li><a href="<?php echo esc_url( home_url( '/company' ) ); ?>?id=access" class="btn btn-01 btn-arw btn-border" data-color="red">アクセスマップ</a></li>
			<li><a href="<?php echo esc_url( home_url( '/company' ) ); ?>?id=history" class="btn btn-01 btn-arw btn-border" data-color="red">100年の歩み</a></li>
			<li><a href="<?php echo esc_url( home_url( '/staff' ) ); ?>" class="btn btn-01 btn-arw btn-border" data-color="red">スタッフ紹介</a></li>
		</ul>
	</nav>

	<article class="section-block">
			<section class="content page-width">
				<h2 class="headline-01 txt-center">
					<span class="main">STAFF</span>
					<span class="sub">スタッフ紹介</span>
				</h2>

				<?php 
				$url = $_SERVER['REQUEST_URI'];
				if(strstr($url,'?user=')): ?>
					
					<?php // ユーザー詳細（パラメーターありの場合） ?>
					<?php if(isset($_GET['user'])) { $userID = $_GET['user']; } ?>
					<div class="staff-detail">
						<figure class="pic">
							<?php echo get_avatar( $userID, 512 ); ?>
						</figure>
						<?php
						$user_position = get_field('position', 'user_'. $userID);
						$user_hometown = get_field('hometown', 'user_'. $userID);
						$user_hobby = get_field('hobby', 'user_'. $userID);
						$user_comment = get_field('comment', 'user_'. $userID);
						?>
						<div class="profile">
							<dl class="name">
								<?php if( !empty($user_position) ): ?>
									<dt><?php echo $user_position; ?></dt>
								<?php endif; ?>
								<dd><?php the_author_meta('nickname', $userID); ?></dd>
							</dl>
							<div class="dl-table">
								<?php if( !empty($user_hometown) ): ?>
									<dl>
										<dt>出身地</dt>
										<dd><?php echo $user_hometown; ?></dd>
									</dl>
								<?php endif; ?>
								<?php if( !empty($user_hobby) ): ?>
									<dl>
										<dt>趣味</dt>
										<dd><?php echo $user_hobby; ?></dd>
									</dl>
								<?php endif; ?>
							</div>
							<?php if( !empty($user_comment) ): ?>
							<div class="comment">
								<p><?php echo $user_comment; ?></p>
							</div>
							<?php endif; ?>
						</div>
					</div>

					<a href="<?php echo esc_url( home_url( '/staff' ) ); ?>" class="btn btn-01 btn-arw btn-center">スタッフ紹介一覧へ</a>
				
				<?php else: ?>

					<?php // ユーザー一覧（パラメーターなしの場合） ?>
					<?php
					$users = get_users(array(
						'orderby' => 'meta_value',
						'order' => 'ASC',
						'meta_key' => 'order',
					));
					?>
					<ul class="l-column col-4 col-2-sp staff-list">
						<?php foreach($users as $user) { $uid = $user->ID; ?>
						<li>
							<a href="<?php echo esc_url( home_url( '/staff' ) ) . '/?user=' . $uid ?>">
								<figure class="pic">
									<?php echo get_avatar( $uid, 300 ); ?>
								</figure>
								<?php
								$user_position = get_field('position', 'user_'. $uid);
								?>
								<dl class="name">
									<?php if( !empty($user_position) ): ?>
										<dt><?php echo $user_position; ?></dt>
									<?php endif; ?>
									<dd><?php echo $user->display_name ; ?></dd>
								</dl>
							</a>
						</li>
						<?php }; ?>
					</ul>

				<?php endif; ?>

			</section>
		</article>

<?php
get_footer();
