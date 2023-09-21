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
            <div class="col-10">

                <section class="text-white ignore-gutters bg-rdp-main">
                    <div class="row justify-content-center">
                        <div class="col-9 pt-5 px-5 text-center">
                            <h1 class="text-center mt-5 font-satoshi-black fs-53 px-3">Qual o impacto da meta de recuperação de pastagens degradadas do Plano ABC+ no Brasil?</h1>
                            <p class="fs-18">Aumento do PIB brasileiro, ampliação da renda e do consumo, redução nas emissões de gases de efeito estufa e controle do desmatamento. Esses resultados positivos dão dimensão do impacto que a recuperação de pastagens degradadas (RPD), no âmbito do Plano ABC+, pode trazer para o Brasil até 2030.</p>
                        </div>
                    </div>
                    <div class="ignore-gutters" style="height: 600px; background: url('<?php echo get_template_directory_uri() ?>/assets/images/cows.png') no-repeat center; background-size: cover"></div>
                </section>

                <section>
                    <div class="row ignore-gutters">
                        <div class="col-12 px-0">
                            <video autoplay muted loop preload playsinline class="home-video ratio ratio-16x9" poster="<?php echo get_template_directory_uri(); ?>/assets/img/video-posters/home.jpg">
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/rain.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </section>

                <section id="complete-results" class="ignore-gutters py-5 bg-rdp-pink">
                    <h2 class="font-satoshi-black fs-28 text-uppercase text-center text-white mb-3">Acesse os resultados completos</h2>
                    <div class="d-flex justify-content-center">
                        <div class="rounded-download-btn-wrapper mx-5">
                            <a href="#" class="rounded-download-btn">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/download-pink.png" class="mx-auto img-fluid">
                                <span class="font-satoshi-black fs-18 text-uppercase">Sumário executivo</span>
                            </a>
                        </div>
                        <div class="rounded-download-btn-wrapper mx-5">
                            <a href="#" class="rounded-download-btn">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/download-pink.png" class="mx-auto img-fluid">
                                <span class="font-satoshi-black fs-18 text-uppercase">Relatório completo</span>
                            </a>
                        </div>
                    </div>
                </section>

                <section class="py-5">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <p class="fs-18"><span class="text-uppercase fw-bold">30 milhões de hectares de pastagens degradadas.</span> Esse é o tamanho da área que o Plano ABC+ (Plano Setorial de Mitigação e de Adaptação às Mudanças Climáticas para a Consolidação de uma Economia de Baixa Emissão de Carbono na Agricultura 2020-2030) pretende recuperar até 2030 no Brasil. O TEEBAgriFood, por meio de uma parceria entre o Programa das Nações Unidas para o Meio Ambiente (PNUMA) e o Grupo de Políticas Públicas da Esalq/USP, buscou entender o impacto dessa política, considerando as interações entre sociedade, economia e natureza. Para isso, avaliou dois cenários até 2030: um com adoção de tecnologias convencionais para RPD e outro que, além da RPD convencional, adota em parte da área a integração lavoura-pecuária (iLP). Ambos os cenários foram comparados a uma linha de base - ou business as usual (BAU) - isto é, uma projeção que considera a não aplicação da política. Trazemos a seguir os principais dados do estudo e convidamos você a se aprofundar nos conteúdos e navegar pelos mapas interativos, clicando ao lado.</p>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/image-1.png" class="mx-auto img-fluid">
                        </div>
                    </div>
                </section>

                <section id="one-pager-section" class="bg-rdp-main ignore-gutters py-5">
                    <div class="row justify-content-center text-white my-5">
                        <div class="col-10">
                            <h2 class="font-satoshi-black fs-39 mb-3">Como medir o impacto?</h2>
                            <p class="fs-18"><span class="text-uppercase fw-bold">O desafio metodológico</span>  desse projeto foi gerar informações que permitissem indicar como os capitais (natural, humano, social e produtivo) se transformam diante da recuperação de pastagens degradadas no Brasil e quais os impactos gerados por essas mudanças. A solução foi atuar em quatro frentes (Modelagem EGC, Modelagem Espacial, Modelagem Biofísica e Análise Multicriterial) a partir de uma análise espacial abrangente de diferentes cenários futuros para discutir os impactos econômicos, sociais e ambientais da recuperação de 30 milhões de hectares de pastagens degradadas, meta do Plano ABC+ até 2030.</p>
                            <div class="rounded-download-btn-wrapper">
                                <a href="#" class="rounded-download-btn">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/download.png" class="mx-auto img-fluid">
                                    <span>Baixe o one-page e saiba mais</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="py-5">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <h2 class="text-center font-satoshi-black fs-39 mb-3">Qual o tamanho da área degradada?</h2>
                            <p class="fs-18"><span class="text-uppercase fw-bold">Ao todo, são 102,8 milhões de hectares</span> de pastagem degradadas no Brasil (incluindo pastagens com degradação intermediária ou severa, segundo classificação do LAPIG, de 2020). Para termos noção, a área corresponde a pouco mais de 8% do território nacional: é uma extensa área de pastos com poucos nutrientes ou erodidos, com tamanho superior ao Chile e Uruguai somados. Ou ainda: é quatro vezes o tamanho do estado de São Paulo. As pastagens degradadas estão concentradas principalmente (51,3%) nos estados de Mato Grosso, Mato Grosso do Sul, Minas Gerais e Bahia.</p>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/image-2.png" class="mx-auto img-fluid">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/image-3.png" class="mx-auto img-fluid">
                        </div>
                    </div>
                </section>

                <section class="ignore-gutters py-5" style="background-color: #e9f0ea; height: 540px">
                    <div class="col-10">
                    </div>
                </section>

                <section class="ignore-gutters py-5" style="background-color: #feebe7; height: 540px"></section>

                <section class="py-5">
                    <div class="row justify-content-center">
                        <div class="col-10 text-center">
                            <h2>Quais os resultados?</h2>
                            <p>Escolha um resultado para saber mais</p>
                            <div class="results-hive">
                                <div class="mb-3 d-flex justify-content-between">
                                    <div class="result">
                                        <div class="content">
                                            <div class="front">
                                                <div class="hexagon">
                                                    <span>Qualidade do pasto</span>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="hexagon">
                                                    <span>Uma resposta inteligente</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result">
                                        <div class="content">
                                            <div class="front">
                                                <div class="hexagon">
                                                    <span>Qualidade do pasto</span>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="hexagon">
                                                    <span>Uma resposta inteligente</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result">
                                        <div class="content">
                                            <div class="front">
                                                <div class="hexagon">
                                                    <span>Qualidade do pasto</span>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="hexagon">
                                                    <span>Uma resposta inteligente</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result">
                                        <div class="content">
                                            <div class="front">
                                                <div class="hexagon">
                                                    <span>Qualidade do pasto</span>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="hexagon">
                                                    <span>Uma resposta inteligente</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result">
                                        <div class="content">
                                            <div class="front">
                                                <div class="hexagon">
                                                    <span>Qualidade do pasto</span>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="hexagon">
                                                    <span>Uma resposta inteligente</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex justify-content-evenly">
                                    <div class="result">
                                        <div class="content">
                                            <div class="front">
                                                <div class="hexagon">
                                                    <span>Qualidade do pasto</span>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="hexagon">
                                                    <span>Uma resposta inteligente</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result">
                                        <div class="content">
                                            <div class="front">
                                                <div class="hexagon">
                                                    <span>Qualidade do pasto</span>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="hexagon">
                                                    <span>Uma resposta inteligente</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result">
                                        <div class="content">
                                            <div class="front">
                                                <div class="hexagon">
                                                    <span>Qualidade do pasto</span>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="hexagon">
                                                    <span>Uma resposta inteligente</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result">
                                        <div class="content">
                                            <div class="front">
                                                <div class="hexagon">
                                                    <span>Qualidade do pasto</span>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="hexagon">
                                                    <span>Uma resposta inteligente</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex justify-content-between">
                                    <div class="result">
                                        <div class="content">
                                            <div class="front">
                                                <div class="hexagon">
                                                    <span>Qualidade do pasto</span>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="hexagon">
                                                    <span>Uma resposta inteligente</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result">
                                        <div class="content">
                                            <div class="front">
                                                <div class="hexagon">
                                                    <span>Qualidade do pasto</span>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="hexagon">
                                                    <span>Uma resposta inteligente</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result">
                                        <div class="content">
                                            <div class="front">
                                                <div class="hexagon">
                                                    <span>Qualidade do pasto</span>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="hexagon">
                                                    <span>Uma resposta inteligente</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result">
                                        <div class="content">
                                            <div class="front">
                                                <div class="hexagon">
                                                    <span>Qualidade do pasto</span>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="hexagon">
                                                    <span>Uma resposta inteligente</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result">
                                        <div class="content">
                                            <div class="front">
                                                <div class="hexagon">
                                                    <span>Qualidade do pasto</span>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="hexagon">
                                                    <span>Uma resposta inteligente</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="ignore-gutters py-5" style="background-color: #f7f1fc; height: 540px"></section>

                <section class="ignore-gutters py-5" style="background-color: #fef1f5; height: 540px"></section>

                <section class="ignore-gutters py-5" style="background-color: #ecf5f6; height: 540px"></section>

                <section class="ignore-gutters py-5" style="height: 300px"></section>

                <section class="ignore-gutters py-5" style="background-color: #e8edea; height: 150px"></section>

            </div>
            <div class="col-2 align-items-stretch bg-rdp-secondary">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>

<?php get_footer();