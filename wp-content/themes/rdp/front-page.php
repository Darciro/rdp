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

                <section id="intro" class="text-white ignore-gutters bg-rdp-main vh-100">
                    <div class="row justify-content-center">
                        <div class="col-9 pt-5 px-5 text-center">
                            <h1 class="text-center mt-5 font-satoshi-black fs-40 px-3 animate__animated animate__delay-1s" data-animation="fadeInUp">Qual o impacto da meta de recuperação de pastagens degradadas do Plano ABC+ no Brasil?</h1>
                            <p class="fs-18 animate__animated animate__delay-2s" data-animation="fadeInUp">Aumento do PIB brasileiro, ampliação da renda e do consumo, redução nas emissões de gases de efeito estufa e controle do desmatamento. Esses resultados positivos dão dimensão do impacto que a recuperação de pastagens degradadas (RPD), no âmbito do Plano ABC+, pode trazer para o Brasil até 2030.</p>
                        </div>
                    </div>
                </section>

                <section id="video">
                    <div class="row ignore-gutters">
                        <div class="col-12 px-0">
                            <?php
                            // $video_banner_url = get_option('itg-video-banner-url');
                            $video_banner_url = 'https://youtu.be/SMKPKGW083c';
                            if ($video_banner_url) :
                                if ($iframe = wp_oembed_get($video_banner_url, array('width' => 1100, 'height' => 410))) :

                                    // Use preg_match to find iframe src.
                                    preg_match('/src="(.+?)"/', $iframe, $matches);
                                    $src = $matches[1];
                                    preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $src, $matches);
                                    $vid = $matches[1];
                                    // Add extra parameters to src and replcae HTML.
                                    $params = array(
                                        'autoplay' => 1,
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
                                        'playlist' => $vid,
                                        'start'         => 15,
                                    );
                                    $new_src = add_query_arg($params, $src);
                                    $iframe = str_replace($src, $new_src, $iframe);

                                    // Add extra attributes to iframe HTML.
                                    $attributes = 'frameborder="0" allow="loop; accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"';
                                    $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                                else:
                                    $iframe = '<video autoplay muted loop preload class="intro-video d-block" height="410">';
                                    $iframe .= '<source src="' . $video_banner_url . '" type="video/webm">';
                                    $iframe .= '</video>';
                                endif; ?>


                                <div class="ratio ratio-16x9">
                                    <?php echo $iframe; ?>
                                </div>

                            <?php endif; ?>
                        </div>
                    </div>
                </section>

                <section id="complete-results" class="ignore-gutters pt-5 bg-rdp-pink">
                    <h2 class="font-satoshi-black fs-28 text-uppercase text-center text-white mb-3 mt-5 animate__animated" data-animation="fadeInUp">Acesse os resultados completos</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
                        <div class="rounded-download-btn-wrapper mx-5">
                            <a href="#" class="rounded-download-btn animate__animated" data-animation="fadeIn">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/download-pink.png" class="mx-auto img-fluid">
                                <span class="font-satoshi-black fs-18 text-uppercase">Sumário executivo</span>
                            </a>
                        </div>
                        <div class="rounded-download-btn-wrapper mx-5">
                            <a href="#" class="rounded-download-btn animate__animated" data-animation="fadeIn">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/download-pink.png" class="mx-auto img-fluid">
                                <span class="font-satoshi-black fs-18 text-uppercase">Relatório completo</span>
                            </a>
                        </div>
                    </div>
                </section>

                <section id="impacts" class="py-5">
                    <div class="row justify-content-center">
                        <div class="col-10 rdp-container animate__animated" data-animation="fadeInUp">
                            <p class="fs-18"><span class="text-uppercase fw-bold">30 milhões de hectares de pastagens degradadas.</span> Esse é o tamanho da área que o Plano ABC+ (Plano Setorial de Mitigação e de Adaptação às Mudanças Climáticas para a Consolidação de uma Economia de Baixa Emissão de Carbono na Agricultura 2020-2030) pretende recuperar até 2030 no Brasil. O TEEBAgriFood, por meio de uma parceria entre o Programa das Nações Unidas para o Meio Ambiente (PNUMA) e o Grupo de Políticas Públicas da Esalq/USP, buscou entender o impacto dessa política, considerando as interações entre sociedade, economia e natureza. Para isso, avaliou dois cenários até 2030: um com adoção de tecnologias convencionais para RPD e outro que, além da RPD convencional, adota em parte da área a integração lavoura-pecuária (iLP). Ambos os cenários foram comparados a uma linha de base - ou business as usual (BAU) - isto é, uma projeção que considera a não aplicação da política. Trazemos a
                                seguir os principais dados do estudo e convidamos você a se aprofundar nos conteúdos e navegar pelos mapas interativos, clicando ao lado.</p>
                            <div class="text-center">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/image-1.png" class="mx-auto img-fluid">
                            </div>
                        </div>
                    </div>
                </section>

                <section id="one-pager-section" class="bg-rdp-main ignore-gutters py-5">
                    <div class="row justify-content-center text-white">
                        <div class="col-10 col-md-8 rdp-container">
                            <div class="animate__animated" data-animation="fadeInUp">
                                <h2 class="font-satoshi-black fs-39 mb-3">Como medir o impacto?</h2>
                                <p class="fs-18"><span class="text-uppercase fw-bold">O desafio metodológico</span> desse projeto foi gerar informações que permitissem indicar como os capitais (natural, humano, social e produtivo) se transformam diante da recuperação de pastagens degradadas no Brasil e quais os impactos gerados por essas mudanças. A solução foi atuar em quatro frentes (Modelagem EGC, Modelagem Espacial, Modelagem Biofísica e Análise Multicriterial) a partir de uma análise espacial abrangente de diferentes cenários futuros para discutir os impactos econômicos, sociais e ambientais da recuperação de 30 milhões de hectares de pastagens degradadas, meta do Plano ABC+ até 2030.</p>
                            </div>
                            <div class="rounded-download-btn-wrapper">
                                <a href="#" class="rounded-download-btn animate__animated" data-animation="fadeIn">
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
                                <h2 class="text-center font-satoshi-black fs-39 mb-3">Qual o tamanho da área degradada?</h2>
                                <p class="fs-18"><span class="text-uppercase fw-bold">Ao todo, são 102,8 milhões de hectares</span> de pastagem degradadas no Brasil (incluindo pastagens com degradação intermediária ou severa, segundo classificação do LAPIG, de 2020). Para termos noção, a área corresponde a pouco mais de 8% do território nacional: é uma extensa área de pastos com poucos nutrientes ou erodidos, com tamanho superior ao Chile e Uruguai somados. Ou ainda: é quatro vezes o tamanho do estado de São Paulo. As pastagens degradadas estão concentradas principalmente (51,3%) nos estados de Mato Grosso, Mato Grosso do Sul, Minas Gerais e Bahia.</p>
                            </div>
                            <div class="text-center">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/mapa102milhões.png" class="mx-auto img-fluid">
                            </div>
                            <div class="mt-5">
                                <h2 class="font-satoshi-black fs-39 mb-3 animate__animated" data-animation="fadeInUp">Área degradada por tamanho de propriedade e região</h2>
                                <div class="flourish-embed flourish-hierarchy" data-src="visualisation/15056138">
                                    <script src="https://public.flourish.studio/resources/embed.js"></script>
                                </div>
                            </div>
                            <div class="mt-5 animate__animated" data-animation="fadeInUp">
                                <h2 class="font-satoshi-black fs-39 mb-3">Distribuição das áreas a serem recuperadas com RPD e RPD+iLP</h2>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/image-3.png" class="mx-auto img-fluid">
                            </div>
                        </div>
                    </div>
                </section>

                <section id="section-rpd" class="bg-rdp-light-green ignore-gutters py-5 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-8 rdp-container">
                            <div class="row">
                                <div class="col-lg-4 animate__animated" data-animation="fadeInLeft">
                                    <h3 class="font-satoshi-black fs-17 text-uppercase text-rdp-green icon-title">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icone-rpd.png">
                                        Cenário 1 <br>RPD</h3>
                                    <p class="fs-18 text-rdp-green">Recuperação de pastagens degradadas é um processo direto de recuperação de pastagens por meio da aplicação de diferentes práticas, como a melhoria da cobertura do solo e das plantas forrageiras existentes nas pastagens com técnicas de manejo e fertilização, ou o completo restabelecimento de uma área através de revolvimento do solo, correção química e semeadura.</p>
                                </div>
                                <div class="col-lg-8 text-center animate__animated" data-animation="fadeInRight">
                                    <img style="max-height: 400px;" src="<?php echo get_template_directory_uri() ?>/assets/images/image-4.png" class="mx-auto img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-rdp-light-red ignore-gutters py-5 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-10 rdp-container">
                            <div class="row">
                                <div class="col-lg-4 animate__animated" data-animation="fadeInLeft">
                                    <h3 class="font-satoshi-black fs-17 text-uppercase text-rdp-red icon-title">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icone-ilp.png">
                                        Cenário 2 <br>RPD+iLP</h3>
                                    <p class="fs-18 text-rdp-red">Integração lavoura-pecuária é uma forma indireta de recuperação de pastagens que alterna a própria pastagem com culturas temporárias, como milho ou soja. A distribuição da cultura agrícolas foi estimada conforme sua participação regional.</p>
                                </div>
                                <div class="col-lg-4 text-center animate__animated" data-animation="fadeInRight">
                                    <h3 class="font-satoshi-black fs-17 text-uppercase">Sistema Lavoura-pecuária</h3>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/sistema-lavoura-pecuaria.png" class="img-fluid">
                                </div>
                                <div class="col-lg-4 text-center animate__animated animate__delay-300ms" data-animation="fadeInRight">
                                    <h3 class="font-satoshi-black fs-17 text-uppercase">Alocação Geográfica</h3>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/alocacao-geo.png" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="results" class="bg-light-purple ignore-gutters py-5">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="animate__animated" data-animation="fadeInUp">
                                <h2 class="font-satoshi-black fs-39">Quais os resultados?</h2>
                                <p class="font-satoshi-black fs-16 text-uppercase">Escolha um resultado para saber mais</p>
                            </div>

                            <div class="d-flex justify-content-center animate__animated" data-animation="fadeInRight">
                                <?php get_template_part('template-parts/results-hive'); ?>
                            </div>
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
                                        <h3 class="font-satoshi-black fs-28 text-rdp-purple text-uppercase">Crescimento do PIB</h3>
                                        <h3 class="font-satoshi-black fs-40">R$13 bilhões</h3>
                                        <p class="font-satoshi-black fs-16 m-0">de investimento (Plano ABC+)</p>
                                        <p class="font-satoshi-black fs-28 m-0 text-uppercase">Gerariam:</p>
                                    </div>

                                    <div class="d-flex justify-content-start mb-3">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icone-rpd.png" class="pe-4 img-fluid" style="height: 80px; width: auto">
                                        <div>
                                            <h3 class="font-satoshi-black fs-40 text-rdp-green mb-0">R$165 bilhões</h3>
                                            <p class="font-satoshi-black fs-16 m-0 text-rdp-green">de aumento acumulado (com RPD)</p>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-start mb-3">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icone-ilp.png" class="pe-4 img-fluid" style="height: 80px; width: auto">
                                        <div>
                                            <h3 class="font-satoshi-black fs-40 text-rdp-red mb-0">R$202 bilhões</h3>
                                            <p class="font-satoshi-black fs-16 m-0 text-rdp-red">de aumento acumulado (com RPD+iLP)</p>
                                        </div>
                                    </div>

                                    <p class="mb-4 mb-0 fs-12">*Todos os valores estão corrigidos para 2023</p>

                                    <h3 class="font-satoshi-black fs-28 text-uppercase">PIB cresce em todas as regiões</h3>
                                    <p class="fs-18">Estados em que a pecuária tem maior participação se destacam. Economias menos desenvolvidas apresentariam maior crescimento no PIB real. Clique no mapa e veja o crescimento do PIB por estado em cada cenário.</p>
                                </div>
                                <div class="col-lg-7 animate__animated" data-animation="fadeInRight">
                                    <div class="flourish-embed flourish-map" data-src="visualisation/15056761">
                                        <script src="https://public.flourish.studio/resources/embed.js"></script>
                                    </div>
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
                                        <th scope="col" class="text-center">Percentual<br> acumulada RPD+iLP</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">PIB real
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="A ampliação da produtividade na pecuária bovina, por meio tanto da RPD como da RPD+iLP, proporcionaria um aumento no PIB real." class="info-tooltip rounded-circle">?</span></th>
                                        </th>
                                        <td class="text-center">1,30</td>
                                        <td class="text-center">1,62</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Salário real
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="O aumento da atividade econômica levaria a uma ampliação do salário real das famílias." class="info-tooltip rounded-circle">?</span></th>
                                        </th>
                                        <td class="text-center">2,20</td>
                                        <td class="text-center">2,77</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Índice de preço dos alimentos
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="A maior disponibilidade de produtos da pecuária bovina ocasionaria uma redução do preço dos produtos." class="info-tooltip rounded-circle">?</span></th>
                                        <td class="text-center">-2,35</td>
                                        <td class="text-center">-2,56</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Consumo das famílias
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title=" A combinação entre aumento do poder de compra e diminuição do preço dos alimentos ampliaria, em média, o consumo real das famílias." class="info-tooltip rounded-circle">?</span></th>
                                        <td class="text-center">-1,82</td>
                                        <td class="text-center">-2,21</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Investimento real
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Os investimentos referem-se a aquisição de máquinas, equipamentos, armazéns, depósitos, silos, galpões, estufas, tratores, colhedeiras e outros bens semelhantes." class="info-tooltip rounded-circle">?</span></th>
                                        <td class="text-center">3,78</td>
                                        <td class="text-center">4,61</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Exportações (volume)
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="A tendência de queda nas exportações - exceto para produtos da pecuária e alguns produtos agrícolas - resulta de um balanço da realocação dos fatores de produção e do consumo interno, que é ampliado pela adoção da RPD." class="info-tooltip rounded-circle">?</span>
                                        </th>
                                        <td class="text-center">-3,01</td>
                                        <td class="text-center">-2,87</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Importações (volume)
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="A elevação do consumo, determinada pelo crescimento da renda interna, levaria a uma redução das exportações agregadas do país, bem como a uma elevação das importações." class="info-tooltip rounded-circle">?</span>
                                        </th>
                                        <td class="text-center">3,76</td>
                                        <td class="text-center">5,12</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="table-responsive animate__animated" data-animation="fadeInUp">
                                <table class="table table-rdp table-borderless table-hover mb-5">
                                    <thead>
                                    <tr>
                                        <th scope="col">Mudança percentual nas exportações<br> Brasileiras acumuladas até o ano de 2030</th>
                                        <th scope="col" class="text-center text-rdp-green">Cenário 1<br> RPD</th>
                                        <th scope="col" class="text-center text-rdp-red">Cenário 2<br> RPD+iLP</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">Milho em grão
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Nas atividades agrícolas, as variações nas exportações são resultado de um balanço dos desvios de produção e do consumo interno. Com RPD+iLP, soja e milho são a exceção no setor agropecuário e apresentam alta nas exportações." class="info-tooltip rounded-circle">?</span></th>
                                        </th>
                                        <td class="text-center text-rdp-green">0,9</td>
                                        <td class="text-center text-rdp-red">1,6</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Soja em grão
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="A soja teria mais de 70% de sua produção exportada em 2030 e representa um importante produto na pauta de exportações no Brasil; o resultado deste setor sustenta a ampliação de exportações agregadas no cenário RPD+iLP." class="info-tooltip rounded-circle">?</span></th>
                                        </th>
                                        <td class="text-center text-rdp-green">1,3</td>
                                        <td class="text-center text-rdp-red">31,5</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Carnes
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Destaca-se o crescimento da competitividade da cadeia de carnes. Os ganhos na indústria de abate e processamento de carnes resultariam também em incremento em seu consumo intermediário (uso de matérias-primas), que em conjunto ao aumento do consumo interno resultaria em menor exportação de suínos e aves vivas." class="info-tooltip rounded-circle">?</span></th>
                                        <td class="text-center text-rdp-green">38,2</td>
                                        <td class="text-center text-rdp-red">35,3</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="social-results" class="bg-rdp-light-red ignore-gutters py-5 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-10 rdp-container mb-5 animate__animated" data-animation="fadeInUp">
                            <h2 class="font-satoshi-black fs-17 bg-rdp-pink text-white icon-title alt text-uppercase rounded-end-pill">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/icone-social.png">Resultados sociais
                            </h2>
                        </div>

                        <div class="col-10 rdp-container">
                            <div class="mb-5 animate__animated" data-animation="fadeInUp">
                                <h3 class="font-satoshi-black fs-28 text-rdp-pink text-uppercase">Preços menores, salários maiores, mais consumo</h3>
                                <p class="fs-18 text-rdp-pink"><span class="text-uppercase fw-bold">A maior disponibilidade</span> de produtos da pecuária bovina ocasionaria uma redução dos preços. Com o aumento da atividade econômica, haveria uma ampliação do salário real das famílias, especialmente para a mão de obra mais qualificada.
                                    Considerando somente o consumo de alimentos, ele aumentaria para todas as famílias. Entretanto, as famílias mais pobres teriam uma pequena redução no consumo geral. Na classe de trabalhadores mais pobres (POF1) haveria redução do consumo real nas regiões AM-AC-RR, PA-AP, PI-BA, MA-TO, Restante do Nordeste e MG. Para GO-DF isso ocorreria apenas no Cenário de RPD. Por isso, o estudo alerta para a necessidade de se implementar políticas públicas complementares para proporcionar ganhos a essas famílias.
                                </p>
                            </div>

                            <div class="mb-5 animate__animated" data-animation="fadeInUp">
                                <h3 class="font-satoshi-regular mb-3 fs-19 text-rdp-pink text-uppercase">Consumo geral das famílais</h3>
                                <div class="flourish-embed flourish-chart" data-src="visualisation/15057234">
                                    <script src="https://public.flourish.studio/resources/embed.js"></script>
                                </div>
                                <hr>
                                <div class="flourish-embed flourish-chart" data-src="visualisation/15061418">
                                    <script src="https://public.flourish.studio/resources/embed.js"></script>
                                </div>
                            </div>

                            <div class="mb-5 animate__animated" data-animation="fadeInUp">
                                <h3 class="font-satoshi-regular mb-3 fs-19 text-rdp-pink text-uppercase">Consumo de alimento das famílais</h3>
                                <div class="flourish-embed flourish-chart" data-src="visualisation/15061458">
                                    <script src="https://public.flourish.studio/resources/embed.js"></script>
                                </div>
                            </div>

                            <div class="mb-5 animate__animated" data-animation="fadeInUp">
                                <h3 class="font-satoshi-regular mb-3 fs-19 text-rdp-pink text-uppercase">Variação dos salários</h3>
                                <div class="flourish-embed flourish-chart" data-src="visualisation/15061498">
                                    <script src="https://public.flourish.studio/resources/embed.js"></script>
                                </div>
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
                                <h3 class="font-satoshi-black fs-28 text-rdp-green-water text-uppercase">Conversavação de vegetação nativa</h3>
                                <p class="fs-18 text-rdp-green-water"><span class="text-uppercase fw-bold">O crescimento da produtividade</span> da pecuária bovina ampliaria a produção, reduzindo o preço dos produtos e impactando a rentabilidade do setor. Isso levaria a uma redução da demanda por áreas de pastagem em relação à linha de base, evitando desmatamento da vegetação nativa que ocorreria sem a aplicação da política e ampliando a área agrícola e as florestas plantadas. A RDP mostrou que tem potencial de promover um efeito “poupa-terra” em torno de 6,2 milhões de hectares em nível nacional. Esse efeito é ampliado no caso da RPD+iLP, podendo chegar a 7,2 milhões de hectares. Em alguns estados, porém, poderia haver “efeito-rebote”, em que o aumento da produtividade da pecuária estimularia o desmatamento. Vale ressaltar que os efeitos aqui descritos são sempre em relação à linha de base. Portanto, em todos os cenários haverá desmatamento até 2030, mas nos cenários RPD e RPD + iLP
                                    esse desmatamento será menor do que na linha de base.</p>
                            </div>
                        </div>

                        <div class="col-10 rdp-container">
                            <div class="row">
                                <div class="col-lg-4 animate__animated" data-animation="fadeInRight">
                                    <h3 class="font-satoshi-black fs-19 text-uppercase mt-0 mb-2">Linha de base</h3>
                                    <div class="table-responsive">
                                        <table class="table table-rdp table-baseline table-borderless table-hover mb-5">
                                            <thead>
                                            <tr>
                                                <th scope="col">Uso</th>
                                                <th scope="col">Área <span class="text-capitalize">(Mha)</span></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">Vegetação nativa</th>
                                                <td>508,4</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Agricultura</th>
                                                <td>108,9</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Pastagem (total)</th>
                                                <td>176,9</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Total</th>
                                                <td>794,2</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-4 animate__animated animate__delay-150ms" data-animation="fadeInRight">
                                    <h3 class="font-satoshi-black fs-19 text-uppercase mt-0 mb-2 text-rdp-green">Cenário 1 - RPD</h3>
                                    <div class="table-responsive">
                                        <table class="table table-rdp table-baseline table-borderless table-hover mb-5">
                                            <thead>
                                            <tr>
                                                <th scope="col" class="text-rdp-green">Uso</th>
                                                <th scope="col" class="text-rdp-green">Área <span class="text-capitalize">(Mha)</span></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row" class="text-rdp-green">Vegetação nativa</th>
                                                <td class="text-rdp-green">514,6</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-rdp-green">Agricultura</th>
                                                <td class="text-rdp-green">107,8</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-rdp-green">Pastagem (total)</th>
                                                <td class="text-rdp-green">171,8</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-rdp-green">Total</th>
                                                <td class="text-rdp-green">794,2</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-4 animate__animated animate__delay-300ms" data-animation="fadeInRight">
                                    <h3 class="font-satoshi-black fs-19 mt-0 mb-2 text-rdp-red">CENÁRIO 2 - RPD+iLP</h3>
                                    <div class="table-responsive">
                                        <table class="table table-rdp table-baseline table-borderless table-hover mb-5">
                                            <thead>
                                            <tr>
                                                <th scope="col" class="text-rdp-red">Uso</th>
                                                <th scope="col" class="text-rdp-red">Área <span class="text-capitalize">(Mha)</span></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row" class="text-rdp-red">Vegetação nativa</th>
                                                <td class="text-rdp-red">515,6</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-rdp-red">Agricultura</th>
                                                <td class="text-rdp-red">107,9</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-rdp-red">Pastagem (total)</th>
                                                <td class="text-rdp-red">170,7</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-rdp-red">Total</th>
                                                <td class="text-rdp-red">794,2</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-10 rdp-container animate__animated" data-animation="fadeInUp">
                            <div class="mb-5">
                                <h3 class="font-satoshi-black fs-19 text-rdp-green-water text-uppercase">Sequestro de carbono</h3>
                                <p class="fs-18 text-rdp-green-water mb-5   ">É importante destacar que a fixação de carbono no solo e em pastagens de boa qualidade é capaz de compensar o aumento das emissões provocado pelo crescimento da pecuária.</p>
                                <h3 class="font-satoshi-black fs-24 text-uppercase mt-0 mb-2 text-end">Percentual - CO2 equivalente</h3>
                                <div class="table-responsive">
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
                                        <tr>
                                            <th scope="row">Emissões totais</th>
                                            <td class="bg-rdp-light-orange text-center">38,4</td>
                                            <td></td>
                                            <td class="bg-rdp-light-orange text-center">14,5</td>
                                            <td></td>
                                            <td class="text-center">9,9</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Emissões totais (com C no solo)</th>
                                            <td class="bg-rdp-light-orange text-center">-1,04</td>
                                            <td></td>
                                            <td class="bg-rdp-light-orange text-center">-1,59</td>
                                            <td></td>
                                            <td class="text-center">-1,3</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Intensidade de emissões</th>
                                            <td class="bg-rdp-light-orange text-center">-0,42</td>
                                            <td></td>
                                            <td class="bg-rdp-light-orange text-center">-0,68</td>
                                            <td></td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Intensidade de emissões (com C no solo)</th>
                                            <td class="bg-rdp-light-orange text-center">-28,78</td>
                                            <td></td>
                                            <td class="bg-rdp-light-orange text-center">-14,60</td>
                                            <td></td>
                                            <td class="text-center">-</td>
                                        </tr>
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

                            <div class="row align-items-end mb-5">
                                <div class="col-lg-5 animate__animated" data-animation="fadeInLeft">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/erosao.png" class="img-fluid">
                                </div>

                                <div class="col-lg-7 animate__animated animate__delay-300ms" data-animation="fadeInRight">
                                    <h3 class="font-satoshi-black fs-19 text-rdp-green-water text-uppercase">Erosão do solo</h3>
                                    <p class="fs-18 text-rdp-green-water"><span class="text-uppercase fw-bold">Ambos os cenários (RPD e RPD+iLP)</span> contribuiriam para a redução das taxas de erosão dos solos. De modo geral, as reduções médias de perda do solo para o território brasileiro seriam de 2,26% para o cenário de RPD e 1,94% para o cenário de RPD+iLP. Isso porque o arranjo temporal da integração lavoura-pecuária pode comprometer parcialmente a capacidade de proteção do solo quando a agricultura se torna presente no local.
                                    </p>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-lg-7 animate__animated animate__delay-300ms" data-animation="fadeInLeft">
                                    <h3 class="font-satoshi-black fs-19 text-rdp-green-water text-uppercase">Manutenção de Habitats</h3>
                                    <p class="fs-18 text-rdp-green-water"><span class="text-uppercase fw-bold">Habitats fornecem importantes serviços ecossistêmicos</span> e permitem a conservação da biodiversidade. Para mensurar a manutenção desses espaços, foram medidos, além da área de cobertura de vegetação nativa, parâmetros como o tamanho dos fragmentos com capacidade de conservação da biodiversidade, a área núcleo dos fragmentos e a conectividade funcional dos mesmos. No geral, nos dois cenários (RPD e RPD+iLP), haveria, em relação à linha de base, aumento da área de cobertura vegetal nativa, inclusive nos estados com os maiores rebanhos bovinos; no entanto, na maioria dos estados não haveria melhoria nos demais indicadores, resultando em evolução quantitativa, mas não qualitativa para a manutenção dos habitats. Por isso, políticas públicas complementares poderiam ser implementadas visando restaurar a vegetação e garantir a conectividade funcional dos remanescentes de vegetação
                                        nativa, através de corredores ecológicos, e a manutenção de áreas nucleares, a fim de diminuir os efeitos de borda nos fragmentos.</p>
                                </div>

                                <div class="col-lg-5 animate__animated" data-animation="fadeInRight">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/habitats.png" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="staff" class="py-5">
                    <div class="row justify-content-center">
                        <div class="col-10 rdp-container mb-5">
                            <h2 class="font-satoshi-black fs-28 text-uppercase">Equipe técnica</h2>
                            <div class="d-flex flex-column flex-md-row justify-content-start">
                                <ul class="list-group list-group-flush me-5">
                                    <li class="list-group-item ps-0 border-0">Joaquim Bento de Souza Ferreira F.</li>
                                    <li class="list-group-item ps-0 border-0">Alberto G. O. P. Barretto</li>
                                    <li class="list-group-item ps-0 border-0">Arthur Fendrich</li>
                                    <li class="list-group-item ps-0 border-0">Giovani W. Gianetti</li>
                                    <li class="list-group-item ps-0 border-0">João Gabriel Ribeiro Giovanelli</li>
                                </ul>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item ps-0 border-0" ">Marcela Almeida de Araujo</li>
                                    <li class="list-group-item ps-0 border-0">Marluce da Cruz Scarabello</li>
                                    <li class="list-group-item ps-0 border-0">Pietro Gragnolati Fernandes</li>
                                    <li class="list-group-item ps-0 border-0">Rodrigo de Almeida Nobre</li>
                                    <li class="list-group-item ps-0 border-0">Simone B. Lima Ranieri</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-rdp-light-green-water ignore-gutters py-5">
                    <div class="row justify-content-center">
                        <div class="col-10 rdp-container">
                            <div id="logos-carousel">
                                <a href="#" target="_blank" class="grayscale mx-sm-2">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/logos/1onu.png" class="img-fluid">
                                </a>
                                <a href="#" target="_blank" class="grayscale mx-sm-2">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/logos/2teeb.png" class="img-fluid">
                                </a>
                                <a href="#" target="_blank" class="grayscale mx-sm-2">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/logos/3esalq.png" class="img-fluid">
                                </a>
                                <a href="#" target="_blank" class="grayscale mx-sm-2">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/logos/4gpp.png" class="img-fluid">
                                </a>
                                <a href="#" target="_blank" class="grayscale mx-sm-2">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/logos/5fgv.png" class="img-fluid">
                                </a>
                                <a href="#" target="_blank" class="grayscale mx-sm-2">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/logos/6fealq.png" class="img-fluid">
                                </a>
                                <a href="#" target="_blank" class="grayscale mx-sm-2">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/logos/7ue.png" class="img-fluid">
                                </a>
                            </div>
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