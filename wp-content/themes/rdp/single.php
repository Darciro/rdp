<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package RDP
 */

get_header( null, array( 'hidden-banner' => true ) ); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="topo-noticia">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 order-last order-md-first">
					<div class="titulo-pagina">
						<h2>NOTÍCIAS</h2>
						<h1><?php the_title(); ?></h1>
					</div>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo home_url('/'); ?>">Início</a></li>
							<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo home_url('/noticias'); ?>">Notícias</a></li>
						</ol>
					</nav>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 order-first order-md-last">
					<?php if ( has_post_thumbnail() ) :
						the_post_thumbnail( array( 550, 365 ) ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="conteudo-noticia">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
					<label class="data">Publicado em <?php echo get_the_date('d.m.Y'); ?></label>
					<hr>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
<?php endwhile;; ?>

<?php
get_footer();
