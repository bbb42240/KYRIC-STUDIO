<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package KYRIC_STUDIO_theme
 */

$images = get_field('portfolio_gallery');

get_header('single');
?>

<h1 class="portfolio-title"><?php the_title(); ?></h1>
<div class="portfolio-img">
	<div id="singleGallery" class="gallery-content">
		<?php
		while (have_posts()) : the_post(); ?>

			<?php if ($images) : ?>
				<?php foreach ($images as $images) : ?>
					<div class="portfolio-gallery wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="500" data-wow-iteration="1">
						<img src="<?php echo $images['sizes']['2048x2048']; ?>" alt="">
					</div>
				<?php endforeach; ?>
			<?php endif; ?>

		<?php endwhile;
		wp_reset_query(); ?>
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
		<!-- <li><span><?php the_category(' , '); ?></span></li> 顯示類別的連結-->
	</ul>
</div>


<?php
get_footer();
