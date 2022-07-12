<?php

/**
 * Template Name: Home 首頁
 * 
 * 
 * 
 */
get_header();

?>

<section id="commercial" class="gallery">
    <a class="cate-link" href="<?php echo get_page_link(5); ?>">
        <h2 class="cate-title">COMMERCIAL</h2>
    </a>
    <div id="commercialGallery" class="gallery-content">
        <?php
        $commercial_loop = new WP_Query(array(
            'post_type' => 'commercial',
            'order' => 'ASC',
            'cat' => 3, //category: 商業攝影 -> ID:3
            'post_per_page' => '10'
        ));
        while ($commercial_loop->have_posts()) : $commercial_loop->the_post(); ?>

            <div class="gallery-thumbnail wow fadeInUp" data-wow-duration="2.5s" data-wow-delay=".25s" data-wow-offset="0" data-wow-iteration="1">
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

        <!-- <div class="gallery-thumbnail">
            <div class="thumb-content">
                <a href="#">
                    <img src="https://freight.cargo.site/w/900/q/75/i/225bfef950c91ab29f82f01447e791592a12683751ec00a6ef73f70e22cf7f38/-2022-04-18-9.06.11.png" />
                    <p class="thumbnail-title">Lorem, ipsum dolor.</p>
                </a>
            </div>
        </div>
        <div class="gallery-thumbnail">
            <div class="thumb-content">
                <a href="#">
                    <img src="https://freight.cargo.site/w/2000/q/75/i/4a788f417f10da2be68bb8dc55b866810ec3fe7679911b78503cc852a537ee02/-2022-04-18-9.37.01.png" />
                    <p class="thumbnail-title">Lorem, ipsum dolor.</p>
                </a>
            </div>
        </div>
        <div class="gallery-thumbnail">
            <div class="thumb-content">
                <a href="#">
                    <img src="https://freight.cargo.site/w/800/q/75/i/a13a9c7e1918f1f522a1b5382e2c6cf53d73e36cb9574cf5d9ebfb6384ebdef4/-2022-04-18-9.02.01.png" />
                    <p class="thumbnail-title">Lorem, ipsum dolor.</p>
                </a>
            </div>
        </div>
        <div class="gallery-thumbnail">
            <div class="thumb-content">
                <a href="#">
                    <img src="https://freight.cargo.site/w/800/q/75/i/6f875a6c9e7297b83d0e7d665dc8fae5600c8d68efda492251a5d651aa6ad6d3/2109_2273.jpg" />
                    <p class="thumbnail-title">Lorem, ipsum dolor.</p>
                </a>
            </div>
        </div>
        <div class="gallery-thumbnail">
            <div class="thumb-content">
                <a href="#">
                    <img src="https://freight.cargo.site/w/800/q/75/i/81502d4a9a06351db95643969194f143b2e0d226130d4ba3448d7af8b102bb36/2108_Porter_Tux12089.jpg" />
                    <p class="thumbnail-title">Lorem, ipsum dolor.</p>
                </a>
            </div>
        </div>
        <div class="gallery-thumbnail">
            <div class="thumb-content">
                <a href="#">
                    <img src="https://freight.cargo.site/w/700/q/75/i/df34e945ec49ca699f7d928c4b154326bc2a64f828425af714afc50bbdc0d897/2103_CHI_8382_02.jpg" />
                    <p class="thumbnail-title">Lorem, ipsum dolor.</p>
                </a>
            </div>
        </div>
        <div class="gallery-thumbnail">
            <div class="thumb-content">
                <a href="#">
                    <img src="https://freight.cargo.site/w/1000/q/75/i/ad2e6a249f9f4f1808a19a8c042d053cb92b29310726e9510637ae8d8250b7b8/-2022-04-18-9.16.17.png" />
                    <p class="thumbnail-title">Lorem, ipsum dolor.</p>
                </a>
            </div>
        </div>
        <div class="gallery-thumbnail">
            <div class="thumb-content">
                <a href="#">
                    <img src="https://freight.cargo.site/w/2000/q/75/i/c3da767ec46cd52e9ecc3a8c1dbb18d3ef705527678192bf7071eb9041be5d27/2109_Pinkoi1071.jpg" />
                    <p class="thumbnail-title">Lorem, ipsum dolor.</p>
                </a>
            </div>
        </div>
        <div class="gallery-thumbnail">
            <div class="thumb-content">
                <a href="#">
                    <img src="https://freight.cargo.site/w/1500/q/75/i/de20834ab8e5ea83d669771a448c6f49535eb6b7e873debffa2ef150316de7e3/2104_Orenzi111451_03_.jpg" />
                    <p class="thumbnail-title">Lorem, ipsum dolor.</p>
                </a>
            </div>
        </div> -->
    </div>

    <div class="works-btn d-flex">
        <a href="<?php echo get_page_link(5); ?>" class="view-more">
            <span>view more...</span>
        </a>
    </div>
</section>

<section id="cosmetic" class="gallery">
    <a class="cate-link" href="<?php echo get_page_link(12); ?>">
        <h2 class="cate-title">COSMETIC</h2>
    </a>
    <div id="cosmeticGallery" class="gallery-content">
        <?php
        $cosmetic_loop = new WP_Query(array(
            'post_type' => 'cosmetic',
            'order' => 'ASC',
            'cat' => 5, //category: 化妝品攝影 -> ID:5
            'post_per_page' => '10'
        ));
        while ($cosmetic_loop->have_posts()) : $cosmetic_loop->the_post(); ?>

            <div class="gallery-thumbnail wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="25" data-wow-iteration="1">
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

    <div class="works-btn d-flex">
        <a href="<?php echo get_page_link(12); ?>" class="view-more">
            <span>view more...</span>
        </a>
    </div>
</section>

<section id="food" class="gallery">
    <a class="cate-link" href="<?php echo get_page_link(16); ?>">
        <h2 class="cate-title">FOOD</h2>
    </a>
    <div id="foodGallery" class="gallery-content">
        <?php
        $food_loop = new WP_Query(array(
            'post_type' => 'food',
            'order' => 'ASC',
            'cat' => 6, //category: 美食攝影 -> ID:6
            'post_per_page' => '10'
        ));
        while ($food_loop->have_posts()) : $food_loop->the_post(); ?>

            <div class="gallery-thumbnail wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="25" data-wow-iteration="1">
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

    <div class="works-btn d-flex">
        <a href="<?php echo get_page_link(16); ?>" class="view-more">
            <span>view more...</span>
        </a>
    </div>
</section>

<section id="interior" class="gallery">
    <a class="cate-link" href="<?php echo get_page_link(18); ?>">
        <h2 class="cate-title">INTERIOR</h2>
    </a>
    <div id="interiorGallery" class="gallery-content">
        <?php
        $interior_loop = new WP_Query(array(
            'post_type' => 'interior',
            'order' => 'ASC',
            'cat' => 7, //category: 空間攝影 -> ID:7
            'post_per_page' => '10'
        ));
        while ($interior_loop->have_posts()) : $interior_loop->the_post(); ?>

            <div class="gallery-thumbnail wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="25" data-wow-iteration="1">
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

    <div class="works-btn d-flex">
        <a href="<?php echo get_page_link(18); ?>" class="view-more">
            <span>view more...</span>
        </a>
    </div>
</section>

<div class="demo-container">
  <div class='demo demo1'></div>
  <div class='demo demo2'></div>
  <div class='demo demo3'></div>
</div>


<?php
get_footer();
