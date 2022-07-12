<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KYRIC_STUDIO_theme
 */

?>

<footer class="footer">
	<div class="footer-container d-flex ai-center jc-sb">
		<div class="studio-contact d-flex fz-16">
			<p><a href="tel:0989-026-785" class="phone">+886-989-026-785</a></p>
			<p><a href="mailto:kyricstudio@gmail.com" class="e-mail">kyricstudio@gmail.com.tw</a></p>
		</div>
		<p class="studio-copyright fz-16">KYRIC STUDIO © All Rights Reserved</p>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	if ($(window).width() > 1025) {
		$("#commercialGallery").justifiedGallery({
			rowHeight: 450,
			// maxRowHeight: 450,
			lastRow: 'left',
			margins: 20,
			heightAdj: 60
		});
		$("#filmGallery").justifiedGallery({
			rowHeight: 450,
			// maxRowHeight: 400,
			lastRow: 'left',
			margins: 20,
			heightAdj: 60
		});
		$("#cosmeticGallery").justifiedGallery({
			rowHeight: 450,
			// maxRowHeight: 400,
			lastRow: 'left',
			margins: 20,
			heightAdj: 60
		});
		$("#foodGallery").justifiedGallery({
			rowHeight: 450,
			// maxRowHeight: 400,
			lastRow: 'left',
			margins: 20,
			heightAdj: 60
		});
		$("#interiorGallery").justifiedGallery({
			rowHeight: 450,
			// maxRowHeight: 400,
			lastRow: 'left',
			margins: 20,
			heightAdj: 60
		});

		$("#singleGallery").justifiedGallery({
			rowHeight: 550,
			// maxRowHeight: 600,
			lastRow: 'left',
			margins: 20,
			heightAdj: 0
		});
	} else if (768 < $(window).width() < 1025) {
		$("#commercialGallery").justifiedGallery({
			rowHeight: 350,
			// maxRowHeight: 400,
			lastRow: 'left',
			margins: 20,
			heightAdj: 60
		});
		$("#filmGallery").justifiedGallery({
			rowHeight: 350,
			// maxRowHeight: 400,
			lastRow: 'left',
			margins: 20,
			heightAdj: 60
		});
		$("#cosmeticGallery").justifiedGallery({
			rowHeight: 350,
			// maxRowHeight: 400,
			lastRow: 'left',
			margins: 20,
			heightAdj: 60
		});
		$("#foodGallery").justifiedGallery({
			rowHeight: 350,
			// maxRowHeight: 400,
			lastRow: 'left',
			margins: 20,
			heightAdj: 60
		});
		$("#interiorGallery").justifiedGallery({
			rowHeight: 350,
			// maxRowHeight: 400,
			lastRow: 'left',
			margins: 20,
			heightAdj: 60
		});

		$("#singleGallery").justifiedGallery({
			rowHeight: 350,
			// maxRowHeight: 600,
			lastRow: 'left',
			margins: 20,
			heightAdj: 0
		});
	} else {
		$("#singleGallery").justifiedGallery({
			rowHeight: 350,
			// maxRowHeight: 600,
			lastRow: 'center',
			margins: 20,
			heightAdj: 0
		});
	}

	// $("#singleGallery").justifiedGallery({
	// 	rowHeight: 400,
	// 	// maxRowHeight: 400,
	// 	lastRow: 'left',
	// 	margins: 20,
	// 	heightAdj: 60
	// });
</script>

<!-- 只讓 MAGNIFIC POPUP VIDEO  JS 在商業動態頁面啟動 -->
<?php if (is_single(commercial - film)) { ?>
	<script>
		var videoYoutubeLink = "<?php the_field('portfolio_link'); ?>"

		/*--------------------
 MAGNIFIC POPUP VIDEO  JS
 ----------------------*/
		$(".video-modal").magnificPopup({
			type: "iframe",

			iframe: {
				patterns: {
					youtube: {
						index: "youtube.com",
						src: videoYoutubeLink,
					},
				},
			},
		});
	</script>
<?php } ?>

<!-- <script>
	var ripple = new RippleEffect({
		parent: document.querySelector('.test'),
		texture: '<?php echo get_template_directory_uri(); ?>/assets/images/photos/20211204_SJS-050.jpg',
		intensity: 1,
		strength: 2,
		area: 4,
		waveSpeed: 0.008,
		speedIn: 1.5,
		speedOut: 2,
		easing: 'Expo.easeInOut',
		hover: true,
	});
</script> -->

<script src="<?php echo get_theme_file_uri('assets/js/ripple-effect.js'); ?>"></script>
<script>
	
	var ripple = new RippleEffect({
		parent: document.querySelector('.hero-bg'),
		texture: '<?php echo get_template_directory_uri(); ?>/assets/images/photos/_KYO0858.jpg',
		intensity: 2,
		strength: 3,
		area: 6,
		waveSpeed: 0.0015,
		speedIn: 1.5,
		speedOut: 2,
		easing: 'Expo.easeInOut',
		hover: true,
	});

	
</script>

<script>
	new WOW().init();
</script>

</body>

</html>