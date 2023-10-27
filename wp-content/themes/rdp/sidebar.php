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
    <a href="<?php the_field('interactive_map_url'); ?>" class="maps-link" target="_blank">
        <img alt="Mapas interativos" src="<?php echo get_template_directory_uri() ?>/assets/images/maps-link-image.png" class="d-none d-lg-block animate__animated" data-animation="fadeInLeft">
        <img alt="Mapas interativos" src="<?php echo get_template_directory_uri() ?>/assets/images/maps-link-image-vert.svg" class="d-block d-lg-none maps-vertical">
        <div class="slow-move animate__animated animate__delay-2s" data-animation="fadeInLeft">
            <span class="arrow"></span>
        </div>
    </a>
</aside>
