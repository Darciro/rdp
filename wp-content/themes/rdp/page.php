<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RDP
 */

get_header( null, array( 'hidden-banner' => true ) ); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="topo-pagina-comum">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
					<div class="titulo-pagina">
						<h1>
							Fale conosco
						</h1>
					</div>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/">Início</a></li>
							<li class="breadcrumb-item active" aria-current="page">Fale conosco</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="conteudo-pagina-comum">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>

<?php
get_footer();
