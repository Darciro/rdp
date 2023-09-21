<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RDP
 */

get_header( null, array( 'hidden-banner' => true ) ); ?>

<?php if ( have_posts() ) : ?>
	<div class="topo-noticias-lista">
		<div class="container">
			<?php echo get_template_part( 'template-parts/news-block' ); ?>
		</div>
	</div>
	<div class="conteudo-noticias-lista">
		<div class="container">

			<?php
			$args = array(
				'posts_per_page' => -1,
				'offset '        => 3,
				'post__not_in'   => get_option( 'sticky_posts' )
			);
			$news = new WP_Query( $args );

			if ( $news->have_posts() ):
				while ( $news->have_posts() ): $news->the_post(); ?>

					<div class="bloco-noticia">
						<a href="<?php the_permalink(); ?>">
							<div class="row">
								<div class="col-12 col-sm-12 <?php echo has_post_thumbnail() ? 'col-md-4 col-lg-4 col-xl-4 col-xxl-4' : ''; ?>">
									<?php if ( has_post_thumbnail() ) :
										the_post_thumbnail( array( 225, 150 ) ); ?>
									<?php endif; ?>
								</div>
								<div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
									<span>noticia</span><label class=""><?php echo get_the_date( 'd.m.Y' ); ?></label>
									<h2><?php the_title(); ?></h2>
								</div>
							</div>
						</a>
					</div>

				<?php endwhile;
			endif; ?>


		</div>
	</div>

<?php endif; ?>

<?php
get_footer();
