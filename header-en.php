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
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<style>
	body {
	   word-break: normal !important;
	}
	.header-navi {
        padding-right: 0px !important;
        margin-right: 2.4rem !important;
    }
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
	/*.svc-flow .flow-detail ul.circle li {
      width: calc(100% - 1.2rem) !important;
    }*/
	.form-box .required {
	   width: auto !important;
	}
	.form-box .required::before {
      content: "Required" !important;
    }
     @media screen and (max-width: 833px) {
        .header-navi .navi-menu {
            display: flex !important;
        }
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
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<figure class="logo">
						<img src="<?php echo get_template_directory_uri() ?>/images/common/logo.svg" width="216" height="46" alt="株式会社一向社" class="logo01">
						<img src="<?php echo get_template_directory_uri() ?>/images/common/logo_100th.svg" width="90" height="62" alt="100th ANNIVERSARY" class="logo02">
					</figure>
				</a>
			</h1>
			<nav class="header-navi">				
				<ul class="navi-menu txt-serif">					
					<li><a href="<?php echo esc_url( str_replace('/en-', '/', get_permalink( get_the_ID() ) ) );?>">日本語</a></li>					
				</ul>
			</nav>			
		</div>
	</header>	

	<main class="site-container">
