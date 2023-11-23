<?php
/**
 * The homepagee template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RDP
 */

get_header();
?>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 col-lg-10">

                <section id="intro" class="text-white ignore-gutters bg-rdp-main">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div class="d-flex flex-column justify-content-between intro-content">
                                <div class="intro-heading">
                                    <h1 class="text-center text-white font-satoshi-black fs-40 fs-sm-28 px-3 animate__animated animate__delay-1s" data-animation="fadeInUp"><?php the_field('intro_title'); ?></h1>
                                    <p class="fs-18 fs-sm-16 animate__animated animate__delay-2s" data-animation="fadeInUp"><?php the_field('intro_text'); ?></p>
                                </div>
                                <div class="d-block">
                                    <img src="<?php echo wp_get_attachment_image_url(get_field('background'), 'full'); ?>" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="video">
                    <div class="row ignore-gutters">
                        <div class="col-12 px-0">
                            <?php
                            $iframe = get_field('feature_video');
                            if ($iframe) :
                                preg_match('/src="(.+?)"/', $iframe, $matches);
                                $src = $matches[1];

                                $params = array(
                                    'autoplay' => 1,
                                    'hd' => 1,
                                    'autohide' => 1,
                                    'controls' => 0,
                                    'disablekb' => 1,
                                    'enablejsapi' => 1,
                                    'fs' => 0,
                                    'iv_load_policy' => 3,
                                    'loop' => 1,
                                    'modestbranding' => 1,
                                    'rel' => 0,
                                    'showinfo' => 0,
                                    'mute' => 1,
                                    'start' => 15,
                                );
                                $new_src = add_query_arg($params, $src);
                                $iframe = str_replace($src, $new_src, $iframe);

                                $attributes = 'frameborder="0"';
                                $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
                                ?>


                                <div class="ratio ratio-16x9">
                                    <?php echo $iframe; ?>
                                </div>

                            <?php endif; ?>
                        </div>
                    </div>
                </section>

                <section id="complete-results" class="ignore-gutters pt-5 bg-rdp-pink">
                    <h2 class="font-satoshi-black fs-28 fs-sm-24 text-uppercase text-center text-white mb-5 mb-md-3 mt-md-5 animate__animated" data-animation="fadeInUp"><?php the_field('report_title'); ?></h2>
                    <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
                        <div class="rounded-download-btn-wrapper mx-3 mx-xl-4">
                            <a href="<?php the_field('executive_summary'); ?>" target="_blank" download class="rounded-download-btn animate__animated" data-animation="fadeIn">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/download-pink.png" class="mx-auto img-fluid">
                                <span class="font-satoshi-black fs-18 fs-sm-16 text-uppercase">Sumário executivo</span>
                            </a>
                        </div>
                        <div class="rounded-download-btn-wrapper my-3 my-md-0 mx-3 mx-xl-4">
                            <a href="<?php the_field('executive_summary_english'); ?>" target="_blank" download class="rounded-download-btn animate__animated" data-animation="fadeIn">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/download-pink.png" class="mx-auto img-fluid">
                                <span class="font-satoshi-black fs-18 fs-sm-16 text-uppercase">Executive summary</span>
                            </a>
                        </div>
                        <div class="rounded-download-btn-wrapper my-3 my-md-0 mx-3 mx-xl-4">
                            <a href="<?php the_field('complete_report'); ?>" target="_blank" download class="rounded-download-btn animate__animated" data-animation="fadeIn">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/download-pink.png" class="mx-auto img-fluid">
                                <span class="font-satoshi-black fs-18 fs-sm-16 text-uppercase">Relatório completo</span>
                            </a>
                        </div>
                    </div>
                </section>

                <section id="impacts" class="py-5">
                    <div class="row justify-content-center">
                        <div class="col-10 rdp-container animate__animated" data-animation="fadeInUp">
                            <?php the_field('report_text'); ?>
                        </div>
                    </div>
                </section>

                <section id="one-pager-section" class="bg-rdp-main ignore-gutters py-5">
                    <div class="row justify-content-center text-white">
                        <div class="col-10 col-md-8 rdp-container text-center text-lg-start">
                            <div class="animate__animated" data-animation="fadeInUp">
                                <h2 class="font-satoshi-black text-white fs-39 fs-sm-28 mb-3"><?php the_field('impact_title'); ?></h2>
                                <?php the_field('impact_text'); ?>
                            </div>
                            <div class="rounded-download-btn-wrapper">
                                <a href="<?php the_field('one_page'); ?>" class="rounded-download-btn animate__animated" target="_blank" download data-animation="fadeIn">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/download.png" class="mx-auto img-fluid">
                                    <span>Baixe o one-page e saiba mais</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="degraded-area" class="py-5">
                    <div class="row justify-content-center mt-5">
                        <div class="col-10 rdp-container">
                            <div class="text-center animate__animated" data-animation="fadeInUp">
                                <h2 class="text-center font-satoshi-black fs-39 fs-sm-28 mb-3"><?php the_field('degradation_title'); ?></h2>
                                <?php the_field('degradation_text'); ?>
                            </div>
                            <div class="mt-5">
                                <h2 class="font-satoshi-black fs-17 text-uppercase mb-3 animate__animated" data-animation="fadeInUp">Área degradada por tamanho de propriedade rural e região</h2>
                                <?php the_field('degradation_embed'); ?>
                            </div>

                            <div class="mt-5">
                                <!--<h2 class="font-satoshi-black fs-17 text-uppercase mb-3 animate__animated" data-animation="fadeInUp">Comparação entre a área degradada e potencialmente recuperada</h2>-->

                                <div class="col-12 rdp-container">
                                    <div class="row justify-content-center mt-5">
                                        <?php $degraded_area = get_field('degraded_area'); ?>
                                        <div class="col-lg-6 mb-5 mb-lg-3 mb-lg-5">
                                            <div class="environmental-compare me-lg-3">
                                                <div class="environmental-compare-heading py-3">
                                                    <h3 class="mt-0 mb-2 text-center">
                                                        <span class="d-block font-satoshi-black fs-19 fs-sm-16">Comparação entre a área degradada e potencialmente recuperada</span>
                                                    </h3>
                                                </div>
                                                <div class="ba-slider base-line-1 mb-5">
                                                    <img src="<?php echo wp_get_attachment_image_url($degraded_area['degraded_area_comparison_2'], 'full'); ?>" class="img-fluid">
                                                    <div class="resize">
                                                        <img src="<?php echo wp_get_attachment_image_url($degraded_area['degraded_area_comparison_1'], 'full'); ?>" class="img-fluid">
                                                    </div>
                                                    <span class="handle"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 animate__animated" data-animation="fadeInUp">
                                <h2 class="font-satoshi-black fs-17 mb-3"><span class="text-uppercase font-satoshi-black">Distribuição das áreas a serem recuperadas com RPD e RPD</span>+iLP</h2>
                                <img src="<?php echo wp_get_attachment_image_url(get_field('degradation_map_image'), 'full'); ?>" class="mx-auto img-fluid">
                            </div>
                            <div class="mt-5 animate__animated" data-animation="fadeInUp">
                                <h2 class="font-satoshi-black fs-17 mb-3"><span class="text-uppercase font-satoshi-black">As regiões analisadas</h2>
                                <div class="fs-18 fs-sm-16">
                                    <?php the_field('analysed_regions'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="section-rpd" class="bg-rdp-light-green ignore-gutters py-5 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-8 rdp-container">
                            <div class="row align-items-start">
                                <div class="col-lg-4 animate__animated" data-animation="fadeInLeft">
                                    <h3 class="font-satoshi-black fs-17 text-uppercase text-rdp-green icon-title small-icon">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icone-rpd-x2.png">
                                        Cenário 1 <br>RPD</h3>
                                    <?php the_field('scenario_rdp_text'); ?>
                                </div>
                                <div class="col-lg-8 animate__animated" data-animation="fadeInRight">
                                    <div id="map-selector">
                                        <div class="map-heading">
                                            <h3 class="font-satoshi-black fs-17 text-uppercase m-0">Qualidade da pastagem</h3>
                                            <h4 class="font-satoshi-black fs-16 mb-3">Classes de degradação de pastagem (2020)</h4>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="severe" id="severe" checked>
                                                <label class="form-check-label font-satoshi-medium fs-14 text-uppercase text-white bg-rdp-red" for="severe">
                                                    Severa <span class="font-satoshi-regular">36,5 Mha</span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="intermediary" id="intermediary" checked>
                                                <label class="form-check-label font-satoshi-medium fs-14 text-uppercase bg-rdp-yellow" for="intermediary">
                                                    Intermediária <span class="font-satoshi-regular">66,3 Mha</span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="absent" id="absent" checked>
                                                <label class="form-check-label font-satoshi-medium fs-14 text-uppercase text-white bg-rdp-secondary" for="absent">
                                                    Ausente
                                                </label>
                                            </div>
                                        </div>
                                        <div class="maps ratio ratio-1x1">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/mapa-severo.png?v=2" class="map img-fluid active severe">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/mapa-intermediario.png?v=2" class="map img-fluid active intermediary">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/mapa-ausente.png?v=2" class="map img-fluid active absent">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/mapa-todos.png?v=2" class="map default-map img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-rdp-light-red ignore-gutters py-5 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-8 col-lg-10 rdp-container">
                            <div class="row">
                                <div class="col-lg-4 mb-3 mb-lg-0 animate__animated" data-animation="fadeInLeft">
                                    <h3 class="font-satoshi-black fs-17 text-rdp-red icon-title small-icon">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icone-ilp-x2.png">
                                        <span class="text-uppercase font-satoshi-black">Cenário 2</span> <br>RPD+iLP</h3>
                                    <?php the_field('scenario_rdp_ilp_text'); ?>
                                </div>
                                <div class="col-lg-4 mb-5 mb-lg-0 text-center animate__animated" data-animation="fadeInRight">
                                    <h3 class="font-satoshi-black fs-17 text-uppercase">Sistema Lavoura-pecuária</h3>
                                    <img src="<?php echo wp_get_attachment_image_url(get_field('scenario_rdp_ilp_image_1'), 'full'); ?>" class="img-fluid">
                                </div>
                                <div class="col-lg-4 text-center animate__animated animate__delay-300ms" data-animation="fadeInRight">
                                    <h3 class="font-satoshi-black fs-17 text-uppercase">Alocação Geográfica</h3>
                                    <img src="<?php echo wp_get_attachment_image_url(get_field('scenario_rdp_ilp_image_2'), 'full'); ?>" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="results" class="bg-light-purple ignore-gutters py-5">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="animate__animated" data-animation="fadeInUp">
                                <h2 class="font-satoshi-black fs-39 fs-sm-28">Quais os resultados?</h2>
                                <p class="font-satoshi-black fs-16 text-uppercase">Escolha um resultado para saber mais</p>
                            </div>

                            <?php get_template_part('template-parts/results-hive'); ?>
                        </div>
                    </div>
                </section>

                <section id="economic-results" class="bg-light-purple ignore-gutters py-5">
                    <div class="row justify-content-center">
                        <div class="col-10 rdp-container">
                            <div class="row">
                                <div class="col-10 mb-5 animate__animated" data-animation="fadeInLeft">
                                    <h2 class="font-satoshi-black fs-17 bg-purple text-white icon-title alt text-uppercase rounded-end-pill">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icone-economico-alt.png">Resultados econômicos
                                    </h2>
                                </div>

                                <div class="col-lg-5 animate__animated" data-animation="fadeInLeft">
                                    <div class="mb-4">
                                        <h3 class="fs-28 fs-sm-24 text-rdp-purple text-uppercase">O volume de investimento</h3>
                                        <h3 class="fs-40 fs-sm-28">de R$13 bilhões</h3>
                                        <p class="fs-16 m-0">e o custeio de R$131 bilhões (Plano ABC+) gerariam:</p>
                                    </div>

                                    <div class="d-flex justify-content-start mb-3">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icone-rpd-x2.png" class="pe-4 img-fluid" style="height: 80px; width: auto">
                                        <div>
                                            <h3 class="font-satoshi-black fs-40 fs-sm-28 text-rdp-green mb-0">R$165 bilhões</h3>
                                            <p class="font-satoshi-black fs-16 m-0 text-rdp-green">de aumento acumulado (com RPD)</p>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-start mb-3">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icone-ilp-x2.png" class="pe-4 img-fluid" style="height: 80px; width: auto">
                                        <div>
                                            <h3 class="font-satoshi-black fs-40 fs-sm-28 text-rdp-red mb-0">R$202 bilhões</h3>
                                            <p class="font-satoshi-black fs-16 m-0 text-rdp-red">de aumento acumulado (com RPD+<span class="text-normal">iLP</span>)</p>
                                        </div>
                                    </div>

                                    <p class="mb-5 mb-0 fs-12">*Todos os valores estão corrigidos para 2023</p>

                                    <?php the_field('economic_results_text'); ?>
                                </div>
                                <div class="col-lg-7 animate__animated" data-animation="fadeInRight">
                                    <?php the_field('economic_results_map'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="ignore-gutters py-5 bg-light-purple mb-5">
                    <div class="row justify-content-center">
                        <div class="col-10 rdp-container mb-5">
                            <div class="table-responsive animate__animated" data-animation="fadeInUp">
                                <table class="table table-rdp table-borderless table-hover mb-5">
                                    <thead>
                                    <tr>
                                        <th scope="col">Agregados<br> Macroeconômicos</th>
                                        <th scope="col" class="text-center">Percentual<br> acumulada RPD</th>
                                        <th scope="col" class="text-center">Percentual<br> acumulada RPD+<span class="text-normal">iLP</span></th>
                                    </tr>
                                    </thead>
                                    <?php if (have_rows('table_aggregates')): ?>
                                        <tbody>
                                        <?php while (have_rows('table_aggregates')): the_row(); ?>
                                            <tr>
                                                <th scope="row"><?php the_sub_field('table_aggregates_title'); ?>
                                                    <span data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="<?php the_sub_field('table_aggregates_desc'); ?>" class="info-tooltip rounded-circle">?</span></th>
                                                </th>
                                                <td class="text-center"><?php the_sub_field('table_aggregates_percent_rdp'); ?></td>
                                                <td class="text-center"><?php the_sub_field('table_aggregates_percent_rdp_ilp'); ?></td>
                                            </tr>
                                        <?php endwhile; ?>
                                        </tbody>
                                    <?php endif; ?>
                                </table>
                            </div>

                            <div class="table-responsive animate__animated" data-animation="fadeInUp">
                                <table class="table table-rdp table-borderless table-hover mb-5">
                                    <thead>
                                    <tr>
                                        <th scope="col">Mudança percentual nas exportações<br> Brasileiras acumuladas até o ano de 2030</th>
                                        <th scope="col" class="text-center text-rdp-green">Cenário 1<br> RPD</th>
                                        <th scope="col" class="text-center text-rdp-red">Cenário 2<br> RPD+<span class="text-normal">iLP</span></th>
                                    </tr>
                                    </thead>
                                    <?php if (have_rows('table_exports')): ?>
                                        <tbody>
                                        <?php while (have_rows('table_exports')): the_row(); ?>
                                            <tr>
                                                <th scope="row"><?php the_sub_field('table_exports_title'); ?>
                                                    <span data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="<?php the_sub_field('table_exports_desc'); ?>" class="info-tooltip rounded-circle">?</span></th>
                                                </th>
                                                <td class="text-center text-rdp-green"><?php the_sub_field('table_exports_percent_rdp'); ?></td>
                                                <td class="text-center text-rdp-red"><?php the_sub_field('table_exports_percent_rdp_ilp'); ?></td>
                                            </tr>
                                        <?php endwhile; ?>
                                        </tbody>
                                    <?php endif; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="social-results" class="bg-rdp-light-red ignore-gutters py-5 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-10 rdp-container mb-5 animate__animated" data-animation="fadeInUp">
                            <h2 class="font-satoshi-black fs-17 bg-rdp-pink text-white icon-title alt text-uppercase rounded-end-pill">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/icone-social.png">Resultados sociais-humanos
                            </h2>
                        </div>

                        <div class="col-10 rdp-container">
                            <div class="mb-5 animate__animated" data-animation="fadeInUp">
                                <h3 class="font-satoshi-black fs-28 fs-sm-24 text-rdp-pink text-uppercase"><?php the_field('social_title'); ?></h3>
                                <?php the_field('social_text'); ?>
                            </div>

                            <div class="mb-5 animate__animated" data-animation="fadeInUp">
                                <h3 class="font-satoshi-black mb-3 fs-19 fs-sm-16 text-rdp-pink text-uppercase">Consumo geral das famílias</h3>
                                <?php the_field('social_embed_1'); ?>
                            </div>

                            <div class="mb-5 animate__animated" data-animation="fadeInUp">
                                <h3 class="font-satoshi-black mb-3 fs-19 fs-sm-16 text-rdp-pink text-uppercase">Preços</h3>
                                <?php the_field('social_embed_2'); ?>
                            </div>

                            <div class="mb-5 animate__animated" data-animation="fadeInUp">
                                <h3 class="font-satoshi-black mb-3 fs-19 fs-sm-16 text-rdp-pink text-uppercase">Consumo de alimentos das famílias</h3>
                                <?php the_field('social_embed_3'); ?>
                            </div>

                            <div class="mb-5 animate__animated" data-animation="fadeInUp">
                                <h3 class="font-satoshi-black mb-3 fs-19 fs-sm-16 text-rdp-pink text-uppercase">Variação dos salários</h3>
                                <?php the_field('social_embed_4'); ?>
                            </div>
                        </div>

                    </div>
                </section>

                <section id="environmental-results" class="bg-rdp-light-green-water ignore-gutters py-5">
                    <div class="row justify-content-center">
                        <div class="col-10 rdp-container mb-5">
                            <h2 class="font-satoshi-black fs-17 bg-rdp-green-water text-white icon-title alt text-uppercase rounded-end-pill animate__animated" data-animation="fadeInUp">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/icone-ambiental.png">Resultados ambientais
                            </h2>
                        </div>

                        <div class="col-10 rdp-container animate__animated" data-animation="fadeInUp">
                            <div class="mb-5">
                                <h3 class="font-satoshi-black fs-28 fs-sm-24 text-rdp-green-water text-uppercase"><?php the_field('environmental_title'); ?></h3>
                                <?php the_field('environmental_text'); ?>
                            </div>
                        </div>

                        <div class="col-10 rdp-container">
                            <div class="row">
                                <?php $before_after_map = get_field('before_after_map'); ?>
                                <div class="col-lg-6 mb-5 mb-lg-3 mb-lg-5">
                                    <div class="environmental-compare me-lg-3">
                                        <div class="environmental-compare-heading py-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icone-rpd-x2.png" class="icon">
                                            <h3 class="mt-0 mb-2 text-center">
                                                <span class="d-block font-satoshi-black fs-19 fs-sm-16">LINHA DE BASE x</span>
                                                <span class="d-block font-satoshi-black fs-19 fs-sm-16 text-rdp-green">CENÁRIO 1 - RPD</span>
                                            </h3>
                                        </div>
                                        <div class="ba-slider base-line-1 mb-5">
                                            <img src="<?php echo wp_get_attachment_image_url($before_after_map['map_after_1'], 'full'); ?>" class="img-fluid">
                                            <div class="resize">
                                                <img src="<?php echo wp_get_attachment_image_url($before_after_map['map_before_1'], 'full'); ?>" class="img-fluid">
                                            </div>
                                            <span class="handle"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-5 mb-lg-3 mb-lg-5">
                                    <div class="environmental-compare ms-lg-3">
                                        <div class="environmental-compare-heading py-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icone-ilp-x2.png" class="icon">
                                            <h3 class="font-satoshi-black fs-19 fs-sm-16 mt-0 mb-2 text-center">
                                                <span class="d-block font-satoshi-black fs-19 fs-sm-16">LINHA DE BASE x</span>
                                                <span class="d-block font-satoshi-black fs-19 fs-sm-16 text-rdp-red">CENÁRIO 2 - RPD+iLP</span>
                                            </h3>
                                        </div>
                                        <div class="ba-slider base-line-2 mb-5">
                                            <img src="<?php echo wp_get_attachment_image_url($before_after_map['map_after_2'], 'full'); ?>" class="img-fluid">
                                            <div class="resize">
                                                <img src="<?php echo wp_get_attachment_image_url($before_after_map['map_before_2'], 'full'); ?>" class="img-fluid">
                                            </div>
                                            <span class="handle"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-10 rdp-container">
                            <div class="row">
                                <?php $environmental_tables = get_field('environmental_tables'); ?>
                                <div class="col-lg-4 animate__animated" data-animation="fadeInRight">
                                    <h3 class="font-satoshi-black fs-19 fs-sm-16 text-uppercase mt-0 mb-2">Linha de base</h3>
                                    <div class="table-responsive">
                                        <table class="table table-rdp table-baseline table-borderless table-hover mb-5">
                                            <thead>
                                            <tr>
                                                <th scope="col">Uso</th>
                                                <th scope="col">Área <span class="text-capitalize">(Mha)</span></th>
                                            </tr>
                                            </thead>
                                            <?php if ($rows = $environmental_tables['table_1']): ?>
                                                <tbody>
                                                <?php foreach ($rows as $row) : ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $row['table_1_title']; ?></th>
                                                        <td><?php echo $row['table_1_area']; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                </tbody>
                                            <?php endif; ?>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-4 animate__animated animate__delay-150ms" data-animation="fadeInRight">
                                    <h3 class="font-satoshi-black fs-19 fs-sm-16 text-uppercase mt-0 mb-2 text-rdp-green">Cenário 1 - RPD</h3>
                                    <div class="table-responsive">
                                        <table class="table table-rdp table-baseline table-borderless table-hover mb-5">
                                            <thead>
                                            <tr>
                                                <th scope="col" class="text-rdp-green">Uso</th>
                                                <th scope="col" class="text-rdp-green">Área <span class="text-capitalize">(Mha)</span></th>
                                            </tr>
                                            </thead>
                                            <?php if ($rows = $environmental_tables['table_2']): ?>
                                                <tbody>
                                                <?php foreach ($rows as $row) : ?>
                                                    <tr>
                                                        <th scope="row" class="text-rdp-green"><?php echo $row['table_2_title']; ?></th>
                                                        <td class="text-rdp-green"><?php echo $row['table_2_area']; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                </tbody>
                                            <?php endif; ?>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-4 animate__animated animate__delay-300ms" data-animation="fadeInRight">
                                    <h3 class="font-satoshi-black fs-19 fs-sm-16 mt-0 mb-2 text-rdp-red">CENÁRIO 2 - RPD+iLP</h3>
                                    <div class="table-responsive">
                                        <table class="table table-rdp table-baseline table-borderless table-hover mb-5">
                                            <thead>
                                            <tr>
                                                <th scope="col" class="text-rdp-red">Uso</th>
                                                <th scope="col" class="text-rdp-red">Área <span class="text-capitalize">(Mha)</span></th>
                                            </tr>
                                            </thead>
                                            <?php if ($rows = $environmental_tables['table_3']): ?>
                                                <tbody>
                                                <?php foreach ($rows as $row) : ?>
                                                    <tr>
                                                        <th scope="row" class="text-rdp-red"><?php echo $row['table_3_title']; ?></th>
                                                        <td class="text-rdp-red"><?php echo $row['table_3_area']; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                </tbody>
                                            <?php endif; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-10 rdp-container animate__animated" data-animation="fadeInUp">
                            <div class="mb-5">
                                <h3 class="font-satoshi-black fs-19 fs-sm-16 text-rdp-green-water text-uppercase">Sequestro de carbono</h3>
                                <p class="fs-18 fs-sm-16 text-rdp-green-water mb-5">É importante destacar que a fixação de carbono no solo e em pastagens de boa qualidade seria é capaz de compensar o aumento das emissões provocado pelo crescimento da pecuária.</p>
                                <h3 class="font-satoshi-black fs-24 fs-sm-18 text-uppercase mt-0 mb-2 text-end">Percentual - CO2 equivalente</h3>
                                <div class="table-responsive">
                                    <?php // $table_co2_info = get_field('table_co2_info'); ?>
                                    <table class="table table-rdp table-alt table-borderless table-hover mb-5">
                                        <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col" class="border-top fs-24 col-title bg-rdp-light-orange text-center">Pecuária <br>de corte</th>
                                            <th scope="col" class="border-top fs-24 col-blank"></th>
                                            <th scope="col" class="border-top fs-24 col-title bg-rdp-light-orange text-center">Pecuária <br>de Leite</th>
                                            <th scope="col" class="border-top fs-24 col-blank"></th>
                                            <th scope="col" class="border-top fs-24 text-center">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody class="border-top">
                                        <?php
                                        $table_co2_info = get_field('table_co2_info');
                                        if ($rows = $table_co2_info['table_co2']):
                                            foreach ($rows as $row) : ?>
                                                <tr>
                                                    <th scope="row"><?php echo $row['table_co2_title']; ?></th>
                                                    <td class="bg-rdp-light-orange text-center"><?php echo $row['table_co2_val_1']; ?></td>
                                                    <td></td>
                                                    <td class="bg-rdp-light-orange text-center"><?php echo $row['table_co2_val_2']; ?></td>
                                                    <td></td>
                                                    <td class="text-center"><?php echo $row['table_co2_val_3']; ?></td>
                                                </tr>
                                            <?php endforeach;
                                        endif; ?>

                                        <tr>
                                            <td></td>
                                            <td class="res bg-rdp-light-orange text-center text-rdp-orange">
                                                <span class="d-block font-satoshi-black fs-24 text-uppercase">38,9</span>
                                                <span style="line-height: 1">Incremento <br>de produção</span>
                                            </td>
                                            <td></td>
                                            <td class="res bg-rdp-light-orange text-center text-rdp-orange">
                                                <span class="d-block font-satoshi-black fs-24 text-uppercase">15,2</span>
                                                <span style="line-height: 1">Incremento <br>de produção</span>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <?php if (have_rows('environmental_texts_alt')):
                                while (have_rows('environmental_texts_alt')): the_row(); ?>
                                    <?php if (get_row_index() % 2 == 0): ?>
                                        <div class="row align-items-center">
                                            <div class="col-lg-7 order-2 order-lg-1 animate__animated" data-animation="fadeInLeft">
                                                <h3 class="font-satoshi-black fs-19 fs-sm-16 text-rdp-green-water text-uppercase"><?php the_sub_field('title'); ?></h3>
                                                <?php the_sub_field('text'); ?>
                                            </div>

                                            <div class="col-lg-5 order-1 order-lg-2 animate__animated" data-animation="fadeInRight">
                                                <img src="<?php echo wp_get_attachment_image_url(get_sub_field('image'), 'full'); ?>" class="img-fluid mb-5 mb-lg-0">
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="row align-items-end mb-5">
                                            <div class="col-lg-5 animate__animated" data-animation="fadeInLeft">
                                                <img src="<?php echo wp_get_attachment_image_url(get_sub_field('image'), 'full'); ?>" class="img-fluid mb-5 mb-lg-0">
                                            </div>

                                            <div class="col-lg-7 animate__animated" data-animation="fadeInRight">
                                                <h3 class="font-satoshi-black fs-19 fs-sm-16 text-rdp-green-water text-uppercase"><?php the_sub_field('title'); ?></h3>
                                                <?php the_sub_field('text'); ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                </section>

                <section id="staff" class="py-5">
                    <div class="row justify-content-center">
                        <div class="col-10 rdp-container mb-5">
                            <h2 class="font-satoshi-black fs-28 fs-sm-24 text-uppercase">Equipe técnica GPP/ESALQ/USP</h2>
                            <div class="d-flex flex-column flex-md-row justify-content-start">
                                <?php
                                $team = get_field('team');
                                $team_col_1 = array_slice($team, 0, (int)count($team) / 2);
                                $team_col_2 = array_slice($team, (int)count($team) / 2);

                                if ($team_col_1) {
                                    echo '<ul class="list-group list-group-flush me-5">';
                                    foreach ($team_col_1 as $row) {
                                        echo '<li class="list-group-item fs-sm-16 ps-0 border-0">' . $row['name'] . '</li>';
                                    }
                                    echo '</ul>';
                                }

                                if ($team_col_2) {
                                    echo '<ul class="list-group list-group-flush me-5">';
                                    foreach ($team_col_2 as $row) {
                                        echo '<li class="list-group-item fs-sm-16 ps-0 border-0">' . $row['name'] . '</li>';
                                    }
                                    echo '</ul>';
                                } ?>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-rdp-light-green-water ignore-gutters py-5">
                    <div class="row justify-content-center">
                        <div class="col-10 rdp-container">
                            <?php if (have_rows('partners')): ?>
                                <div id="logos-carousel">
                                    <?php while (have_rows('partners')): the_row(); ?>
                                        <a href="<?php the_sub_field('url'); ?>" target="_blank" class="grayscale mx-sm-2" title="<?php the_sub_field('name'); ?>">
                                            <img src="<?php echo wp_get_attachment_image_url(get_sub_field('logomarca'), 'full'); ?>" class="img-fluid" alt="<?php the_sub_field('name'); ?>">
                                        </a>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
            </div>

            <div id="sidebar-container" class="d-block d-lg-flex col-2 align-items-stretch bg-rdp-secondary">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>

<?php get_footer();