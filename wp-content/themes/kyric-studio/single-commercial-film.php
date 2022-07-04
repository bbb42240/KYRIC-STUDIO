<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package KYRIC_STUDIO_theme
 */

$images = get_field('portfolio_gallery');
$video_img = get_field('portfolio_video');

get_header('single');
?>

<h1 class="portfolio-title"><?php the_field('portfolio_name'); ?></h1>
<div class="portfolio-img">
	<div class="video-feature wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="500" data-wow-iteration="1" style="background-image: url(<?php echo $video_img['url']; ?>);">
		<div class="ply-btn">
			<a href="<?php the_field('portfolio_link'); ?>" class="video-modal"><i class="icon-play"></i></a>
			<!-- <a href="<?php the_field('portfolio_link'); ?>" class="video-modal"> <img src="<?php echo get_theme_file_uri('assets/images/pin.svg'); ?>" alt=""></a> -->
		</div>
	</div>
</div>
<div class="portfolio-content">
	<div class="desc">
		<?php the_content(); ?>
	</div>
	<ul class="info">
		<li>PUBLISH DATE: <?php echo get_the_date(); ?></li>
		<?php
		foreach (get_the_category() as $category) {
			echo "<li>";
			echo "PHOTO CATEGORY: ";
			echo $category->name;
			echo "</li>";
		} ?>
	</ul>
</div>


<?php
get_footer();
