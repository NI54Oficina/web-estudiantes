<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package sensible-wp
 */

get_header(); ?>

	<header class="entry-header">
    		<div class="grid grid-pad">
        		<div class="col-1-1">
					<h1 style="color:white;"class="page-title"><?php _e( 'Página no encontrada.', 'sensible-wp' ); ?></h1>
        		</div><!-- .col-1-1 -->
        	</div><!-- .grid -->
	</header><!-- .entry-header -->

	<div class="grid grid-pad">

	<div class="grid grid-pad">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<div class="page-content">

					<img style="margin:5em auto" src="http://clubestudiantesbb.com/img/error.svg" alt=""><br>
					<button class="btn-enviar-contacto" type="button" onclick="window.location.assign('http://clubestudiantesbb.com')">Volver al inicio</button>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
    </div><!-- grid -->

<?php get_footer(); ?>
