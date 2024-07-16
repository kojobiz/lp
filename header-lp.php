<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ikkosha_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<style>
	:root {
		--base-font-color: #333;
		--bg-color: #fff;
		--main-width: 120.0rem;
		--primary-color: #f0353c;
		/* Swiper Setting */
		--swiper-pagination-bullet-height: 1.2rem;
		--swiper-pagination-bullet-horizontal-gap: .6rem;
		--swiper-pagination-bullet-width: 1.2rem;
		--swiper-pagination-color: #f0353c;
		--swiper-theme-color: #f0353c;
	}

	[data-color="black"] {
		--txt-color: #000;
	}

	[data-color="red"] {
		--txt-color: #d6000f;
	}

	[data-color="white"] {
		--txt-color: #fff;
	}
	</style>

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;600&family=Playfair+Display&display=swap" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet'>

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico">

	<?php wp_head(); ?>
</head>

<?php
  if ( is_home() && is_front_page() ) {
    $custom_body_class = 'home';
  } else {
		$custom_body_class = 'lower';
  }
?>

<body <?php body_class($custom_body_class); ?>>

	<?php wp_body_open(); ?>

	<header id="header" class="site-header wh">
		<div class="header-inner">
			<h1 class="header-title">
				<a href="<?php echo esc_url( home_url( '/service' ) ); ?>/exhibition_support/lp1">
					<figure class="logo">
						<img src="<?php echo get_template_directory_uri() ?>/images/common/logo.svg" width="216" height="46" alt="株式会社一向社" class="logo01">
						<img src="<?php echo get_template_directory_uri() ?>/images/common/logo_100th.svg" width="90" height="62" alt="100th ANNIVERSARY" class="logo02">
					</figure>
				</a>
			</h1>

			<nav class="header-navi">
				<div class="navi-phone">
					<a href="tel:0120150585" class="txt-serif"><span>0120-150-<span class="lastnum-tel">585</span></span></a>
					<span class="label">受付時間 / 平日 9:00～18:00</span>
				</div>
				<ul class="navi-menu txt-serif">
					<!-- navi -->
					<li><a href="<?php echo esc_url( home_url( '/service' ) ); ?>/exhibition_support/lp1#last-achvm-intro">実績紹介</a></li>
					<li><a href="<?php echo esc_url( home_url( '/service' ) ); ?>/exhibition_support/lp1#service-flow">サービス詳細</a></li>
					<li><a href="<?php echo esc_url( home_url( '/service' ) ); ?>/exhibition_support/lp1#service-comparison">他社サービスとの比較</a></li>
					<li><a href="<?php echo esc_url( home_url( '/service' ) ); ?>/exhibition_support/lp1#service-faq">よくあるご質問</a></li>
					<li class="btn-contact" data-color="white">
						<a href="<?php echo esc_url( home_url( '/service' ) ); ?>/exhibition_support/lp1#service-faq">
							<figure class="icon">
								<img src="<?php echo get_template_directory_uri() ?>/images/common/icon_mail.png" width="31" height="24" alt="MAIL">
								<figcaption>お問い合わせ</figcaption>
							</figure>
						</a>
					</li>
				</ul>
			</nav>
  			<!-- sp menu -->
			<div id="hamburgerMenu" class="hamburger-menu">
				<div>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
	</header>

	<div id="spNavi" class="tabOnly">
		<ul class="navi-menu txt-serif">
			<li>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a>
			</li>
			<li>
				<a href="<?php echo esc_url( home_url( '/service' ) ); ?>/exhibition_support/lp1#last-achvm-intro">実績紹介</a>
			</li>
			<li>
				<a href="<?php echo esc_url( home_url( '/service' ) ); ?>/exhibition_support/lp1#service-flow">サービス詳細</a>
			</li>
			<li>
				<a href="<?php echo esc_url( home_url( '/service' ) ); ?>/exhibition_support/lp1#service-comparison">他社サービスとの比較</a>
			</li>
			<li>
				<a href="<?php echo esc_url( home_url( '/service' ) ); ?>/exhibition_support/lp1#service-faq">よくあるご質問</a>
			</li>
			<li>
				<a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">プライバシーポリシー</a>
			</li>
			<li class="navi-contact">
				<div class="navi-phone">
					<a href="tel:0120150585" class="txt-serif"><span>0120-150-<span class="lastnum-tel">585</span></span></a>
					<span class="label">受付時間 / 平日 9:00～18:00</span>
				</div>
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn">お問い合わせ</a>
			</li>
		</ul>
	</div>

	<?php if ( is_home() && is_front_page() ): ?>
		<div id="hero-visual" class="block-hero">
			<?php
			$paged = (int) get_query_var('paged');
			$args = array(
				'posts_per_page' => 6,
				'paged' => $paged,
				'orderby' => 'menu_order',
				'order' => 'ASC',
				'post_type' => 'main_visual',
				'post_status' => 'publish'
			);
			$the_query = new WP_Query($args);
			if ( $the_query->have_posts() ) :
			?>
			<div class="swiper hero-slider">
				<div class="swiper-wrapper">
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="swiper-slide">
							<?php 
							$mvPC = get_field('slider_pc');
							$mvSP = get_field('slider_sp');
							?>
							<picture class="slide-image">
								<source srcset="<?php echo esc_url($mvSP['url']); ?>" media="(max-width: 833px)"/>
								<img src="<?php echo esc_url($mvPC['url']); ?>" alt="<?php echo esc_attr($mvPC['alt']); ?>">
							</picture>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
			<!-- ページネーション -->
			<div id="hero-pagination" class="swiper-pagination"></div>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>	
		</div>
	<?php endif; ?>

	<main class="site-container">
