<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KYRIC_STUDIO_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Header -->
	<div class="header-container kyric-home pad-40">
		<nav class="nav d-flex flex-wrap">
			<div class="nav-brand width-40">
				<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_theme_file_uri('assets/images/kyric_logo.svg'); ?>" alt=""></a>
			</div>
			<div class="navmenu width-60 d-flex ai-center jc-end">
				<ul class="d-flex fz-16">
					<li><a href="#commercial">Commercial</a></li>
					<li><a href="<?php echo get_page_link(10); ?>">Commercial Film</a></li>
					<li><a href="#cosmetic">Cosmetic</a></li>
					<li><a href="#food">Food</a></li>
					<li><a href="#interior">Interior</a></li>
				</ul>
			</div>
			<ul class="social-media d-flex flex-column">
				<li>
					<a href="https://www.facebook.com/KyricStudio" class="social-btn" target=”_blank”>
						<span><i class="icon-fb"></i></span>
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/kyricstudio/" class="social-btn" target=”_blank”>
						<span><i class="icon-ig"></i></span>
					</a>
				</li>
			</ul>
		</nav>
		<!--sidebar menu for tablet & mobile device-->
		<div class="popup-menu d-flex right-0">
			<a href="#" class="menu-btn">
				<span></span>
				<span></span>
				<span></span>
			</a>
			<div class="popup-panel">
				<ul class="fz-48">
					<li class="navmenu-item"><a href="<?php echo get_page_link(5); ?>" class="nav-link section-scroll">Commercial</a></li>
					<li class="navmenu-item"><a href="<?php echo get_page_link(10); ?>" class="nav-link section-scroll">Commercial Film</a></li>
					<li class="navmenu-item"><a href="<?php echo get_page_link(12); ?>" class="nav-link section-scroll">Cosmetic</a></li>
					<li class="navmenu-item"><a href="<?php echo get_page_link(16); ?>" class="nav-link section-scroll">Food</a></li>
					<li class="navmenu-item"><a href="<?php echo get_page_link(18); ?>" class="nav-link section-scroll">Interior</a></li>
					<li class="navmenu-item"><a href="<?php echo get_page_link(20); ?>" class="nav-link section-scroll bottom-0">Contact<i class="icon-letter"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="popup-overlay"></div>
		<!-- END of the sidebar menu -->

		<div class="hero-header">
			<div class="hero-bg ripple"></div>
		</div>
		<a href="#" class="scrollTop-btn fade fadeOut" id="toTop-btn">
			<span><i class="icon-up-arrow"></i></span>
		</a>
	</div>
	<div class="contact-btn d-flex jc-center ai-end">
		<a href="<?php echo get_page_link(20); ?>">
			<span>contact<i class="icon-letter"></i></span>
		</a>
	</div>