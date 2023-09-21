<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RDP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
	<nav id="main-nav" class="fixed-top">
		<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-nav" aria-controls="offcanvas-nav">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas-nav" aria-labelledby="offcanvas-nav-label">
			<div class="offcanvas-body">
				<ul class="main-menu">
					<li>
						<a href="#">Metodologia</a>
					</li>
					<li>
						<a href="#">Tamanho da área</a>
					</li>
					<li>
						<a href="#">Resultados</a>
						<ul>
							<li>
								<a href="#">Econômicos</a>
							</li>
							<li>
								<a href="#">Sociais</a>
							</li>
							<li>
								<a href="#">Ambientais</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Mapas interativos</a>
					</li>
					<li>
						<a href="#">Equipe técnica</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>

<main>