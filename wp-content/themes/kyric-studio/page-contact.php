<?php

/**
 * Template Name: Contact 聯絡我們
 * 
 * 
 * 
 */
get_header('contact');

?>

<section class="contact">
    <h2 class="page-title">CONTACT</h2>
    <div class="studio-img d-flex flex-wrap">
        <img src="<?php echo get_theme_file_uri('assets/images/photos/_KYO0852.jpg'); ?>" alt="">
        <img src="<?php echo get_theme_file_uri('assets/images/photos/_KYO0855.jpg'); ?>" alt="">
        <img src="<?php echo get_theme_file_uri('assets/images/photos/_KYO0858.jpg'); ?>" alt="">
        <img src="<?php echo get_theme_file_uri('assets/images/photos/_KYO0873.jpg'); ?>" alt="">
    </div>
    <div class="studio-info d-flex flex-wrap">
        <div class="col1">
            <div class="contact-info">
                <h3 class="info-title">Contact info.</h3>
                <ul class="contact-list">
                    <li>
                        <span><i class="icon-kyric-k"></i>奇力克影像工作室 | KYRIC STUDIO</span>
                    </li>
                    <li>
                        <span><i class="icon-phone"></i>0989-026-785</span>
                    </li>
                    <li>
                        <span><i class="icon-letter"></i>kyricstudio@gmail.com</span>
                    </li>
                    <li>
                        <span><i class="icon-pin"></i>臺中市北區梅豐街87號</span>
                    </li>
                </ul>
            </div>
            <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.4329144324524!2d120.69329701539903!3d24.156545684390796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3469162208089193%3A0x5b590b6007fa2a9e!2zS1lSSUMgU1RVRElPIOWlh-WKm-WFi-W9seWDj-W3peS9nOWupCDlsIjmpa3mlJ3lvbEg5ZWG5qWt5pSd5b2xIOaUneW9seajmuenn-WAnw!5e0!3m2!1szh-TW!2stw!4v1655268082243!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col2">
            <h3 class="info-title form">Form</h3>
            <div class="contact-form">
                <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
