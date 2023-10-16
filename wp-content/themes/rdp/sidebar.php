<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RDP
 */
?>

<aside id="secondary" class="widget-area text-center">
    <a href="#" class="maps-link">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/maps-link-image.png" class="d-none d-lg-block animate__animated" data-animation="fadeInLeft">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/maps-link-image-vert.png" class="d-block d-lg-none animate__animated" data-animation="fadeInUp">
        <div class="slow-move animate__animated animate__delay-2s" data-animation="fadeInLeft">
            <span class="arrow"></span>
        </div>
    </a>
</aside>
