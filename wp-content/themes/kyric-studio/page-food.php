<?php

/**
 * Template Name: Food 食物攝影
 * 
 * 
 * 
 */
get_header('page');

?>

<section id="food" class="gallery">
    <h2 class="page-title">FOOD</h2>
    <div id="foodGallery" class="gallery-content">
        <?php
        $food_loop = new WP_Query(array(
            'post_type' => 'food',
            'order' => 'ASC',
            'cat' => 6, //category: 商業攝影 -> ID:3、商業動態 -> ID:4、化妝品攝影 -> ID:5、美食攝影 -> ID:6、空間攝影 -> ID:7
            'post_per_page' => '-1'
        ));
        while ($food_loop->have_posts()) : $food_loop->the_post(); ?>

            <div class="gallery-thumbnail wow fadeInUp" data-wow-duration="3s" data-wow-delay=".1s" data-wow-offset="25" data-wow-iteration="1">
                <div class="thumbnail-content">
                    <a href="<?php the_permalink(); ?>">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('full', ['class' => 'img-loop']);
                        }
                        ?>
                        <!-- <img class="img-loop" src="https://freight.cargo.site/w/900/q/75/i/af259bb7a5ebc8e55da82cb673e4757b6e155846c672580e0697f71ffb598921/-2022-04-18-9.17.03.png" /> -->
                        <p class="thumbnail-title"><?php the_title(); ?></p>
                    </a>
                </div>
            </div>

        <?php endwhile;
        wp_reset_query(); ?>
    </div>
</section>


<?php
get_footer();
