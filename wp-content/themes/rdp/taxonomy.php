<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RDP
 */

get_header( null, array( 'hidden-banner' => true ) ); ?>

	<?php $term = get_queried_object(); ?>
	<div class="topo-cursos">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
					<div class="titulo-pagina">
						<h1>
							<?php echo $term->name; ?>
						</h1>
						<hr class="executivo">
					</div>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/">Início</a></li>
							<li class="breadcrumb-item">Capacitações</li>
							<li class="breadcrumb-item active" aria-current="page">Executivas</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="conteudo-cursos">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
					<p class="texto-introdutorio"><?php echo $term->description; ?></p>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
					<?php if ( have_posts() ) : ?>

						<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;
						the_posts_navigation(); ?>

						<div class="bloco-cursos">
							<h3>curso executivo</h3>
							<hr class="executivo">
							<a href="/capacitacoes/executivas/lgpd-setor-de-transporte" class="info">
								<h2>LGPD para o Setor de Transporte</h2>
								<p>
									Voltado a profissionais que atuam em empresas de transporte e logística e que estejam
									realizando a adequação dos procedimentos internos de suas empresas à Lei Geral de Proteção
									de Dados Pessoais (LGPD), lei n.º 13.709/18.
								</p>
								<svg width="39" viewBox="0 0 39 28" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0.925781 14.5H34.9999" stroke="#333333" stroke-width="5"/>
									<path d="M23.5 3C24.1815 3.34074 31.4506 10.8086 35 14.5L23.5 26" stroke="#333333"
									      stroke-width="5"/>
								</svg>
							</a>
						</div>
						<div class="bloco-cursos">
							<h3>curso executivo</h3>
							<hr class="executivo">
							<a href="/capacitacoes/executivas/formacao-governanca-no-transporte" class="info">
								<h2>Governança, Compliance e Gestão de Riscos com Ênfase no Transporte e Infraestrutura</h2>
								<p>
									Voltado a profissionais que desejam adquirir conhecimentos para a criação de um ambiente
									corporativo confiável, com identificação de ameaças e boas práticas de governança que
									colaborem com processos de compliance.
								</p>
								<svg width="39" viewBox="0 0 39 28" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0.925781 14.5H34.9999" stroke="#333333" stroke-width="5"/>
									<path d="M23.5 3C24.1815 3.34074 31.4506 10.8086 35 14.5L23.5 26" stroke="#333333"
									      stroke-width="5"/>
								</svg>
							</a>
						</div>

					<?php else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>

				</div>
			</div>

		</div>
	</div>

<?php
get_sidebar();
get_footer();
