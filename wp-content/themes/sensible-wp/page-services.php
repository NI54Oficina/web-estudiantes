<?php
/**
Template Name: Page - Services
 *
 * @package sensible-wp
 */

get_header(); ?>

	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0]; ?>

    	<header class="featured-img-header" data-speed="8" data-type="background" style="background: url('<?php echo $image; ?>') 50% 0 no-repeat fixed;">
    		<div class="grid grid-pad">
        		<div class="col-1-1">
							<h1 class="entry-title">DISTINCIONES Y ACTIVIDADES</h1>
        		</div><!-- .col-1-1 -->
        	</div><!-- .grid -->
		</header><!-- .entry-header -->

		<?php else : ?>

        <header class="entry-header" style="background-image:url('/web-estudiantes/img/actividades.png')">
    		<div class="grid grid-pad">
        		<div class="col-1-1">
					<h1 class="entry-title">DISTINCIONES Y ACTIVIDADES</h1>
        		</div><!-- .col-1-1 -->
        	</div><!-- .grid -->
		</header><!-- .entry-header -->

	<?php endif; ?>

	<div id="primary" class="content-area service-page">
		<main id="main" class="site-main" role="main">

        <div class="grid grid-pad">

		<?php $services_page_columns_number = esc_html( get_theme_mod( 'sensiblewp_services_page_columns_number', '3' )); ?>


					<div class="col-1-<?php echo esc_html( $services_page_columns_number ); ?> tri-clear wow animated fadeIn" data-wow-delay="0.25s">
    					<div class="service sbox-page-1">

                        <?php if( get_theme_mod( 'active_page_service_1' ) == '') : ?>

                        	<?php if ( get_theme_mod( 'page_service_icon_1' ) ) : ?>
                				<!-- <i class="fa <?php echo esc_html( get_theme_mod( 'page_service_icon_1' )); ?>"></i> -->
												<img src="/web-estudiantes/img/basquet.svg" alt="">
                            <?php endif; ?>

                            <?php if ( get_theme_mod( 'page_service_title_1' ) ) : ?>
              					<h5><?php echo wp_kses_post( get_theme_mod( 'page_service_title_1' )); ?></h5>
                            <?php endif; ?>

                            <?php if ( get_theme_mod( 'page_service_text_1' ) ) : ?>
              					<p class="member-description"><?php echo wp_kses_post( get_theme_mod( 'page_service_text_1' )); ?></p>
                            <?php endif; ?>

                        <?php endif; ?>

  						</div><!-- service -->
					</div><!-- col-1-3 -->

                    <div class="col-1-<?php echo esc_html( $services_page_columns_number ); ?> tri-clear wow animated fadeIn" data-wow-delay="0.25s">
    					<div class="service sbox-page-2">

                        <?php if( get_theme_mod( 'active_page_service_2' ) == '') : ?>

                        	<?php if ( get_theme_mod( 'page_service_icon_2' ) ) : ?>
                				<!-- <i class="fa <?php echo esc_html( get_theme_mod( 'page_service_icon_2' )); ?>"></i> -->
													<img src="/web-estudiantes/img/handball.svg" alt="">
                            <?php endif; ?>

                            <?php if ( get_theme_mod( 'page_service_title_2' ) ) : ?>
              					<h5><?php echo wp_kses_post( get_theme_mod( 'page_service_title_2' )); ?></h5>
                            <?php endif; ?>

                            <?php if ( get_theme_mod( 'page_service_text_2' ) ) : ?>
              					<p class="member-description"><?php echo wp_kses_post( get_theme_mod( 'page_service_text_2' )); ?></p>
                            <?php endif; ?>

                        <?php endif; ?>

  						</div><!-- service -->
					</div><!-- col-1-3 -->

                    <div class="col-1-<?php echo esc_html( $services_page_columns_number ); ?> tri-clear wow animated fadeIn" data-wow-delay="0.25s">
    					<div class="service sbox-page-3">

                         <?php if( get_theme_mod( 'active_page_service_3' ) == '') : ?>

                        	<?php if ( get_theme_mod( 'page_service_icon_3' ) ) : ?>
                				<!-- <i class="fa <?php echo esc_html( get_theme_mod( 'page_service_icon_3' )); ?>"></i> -->
												<img src="/web-estudiantes/img/pelota_paleta.svg" alt="">
                            <?php endif; ?>

                            <?php if ( get_theme_mod( 'page_service_title_3' ) ) : ?>
              					<h5><?php echo wp_kses_post( get_theme_mod( 'page_service_title_3' )); ?></h5>
                            <?php endif; ?>

                            <?php if ( get_theme_mod( 'page_service_text_3' ) ) : ?>
              					<p class="member-description"><?php echo wp_kses_post( get_theme_mod( 'page_service_text_3' )); ?></p>
                            <?php endif; ?>

                        <?php endif; ?>

  						</div><!-- service -->
					</div><!-- col-1-3 -->

					<div class="col-1-<?php echo esc_html( $services_page_columns_number ); ?> tri-clear wow animated fadeIn" data-wow-delay="0.25s">
		<div class="service sbox-page-3">

							 <?php if( get_theme_mod( 'active_page_service_3' ) == '') : ?>

								<?php if ( get_theme_mod( 'page_service_icon_3' ) ) : ?>
							<!-- <i class="fa <?php echo esc_html( get_theme_mod( 'page_service_icon_3' )); ?>"></i> -->
							<img src="/web-estudiantes/img/voley.svg" alt="">
									<?php endif; ?>

									<?php if ( get_theme_mod( 'page_service_title_3' ) ) : ?>
							<h5>Voley</h5>
									<?php endif; ?>



							<?php endif; ?>

		</div><!-- service -->
</div><!-- col-1-3 -->

<div class="col-1-<?php echo esc_html( $services_page_columns_number ); ?> tri-clear wow animated fadeIn" data-wow-delay="0.25s">
<div class="service sbox-page-3">

		 <?php if( get_theme_mod( 'active_page_service_3' ) == '') : ?>

			<?php if ( get_theme_mod( 'page_service_icon_3' ) ) : ?>
		<!-- <i class="fa <?php echo esc_html( get_theme_mod( 'page_service_icon_3' )); ?>"></i> -->
		<img src="/web-estudiantes/img/pelota_paleta.svg" alt="">
				<?php endif; ?>

				<?php if ( get_theme_mod( 'page_service_title_3' ) ) : ?>
		<h5>Paddle</h5>
				<?php endif; ?>



		<?php endif; ?>

</div><!-- service -->
</div><!-- col-1-3 -->


<div class="col-1-<?php echo esc_html( $services_page_columns_number ); ?> tri-clear wow animated fadeIn" data-wow-delay="0.25s">
<div class="service sbox-page-3">

		 <?php if( get_theme_mod( 'active_page_service_3' ) == '') : ?>

			<?php if ( get_theme_mod( 'page_service_icon_3' ) ) : ?>
		<!-- <i class="fa <?php echo esc_html( get_theme_mod( 'page_service_icon_3' )); ?>"></i> -->
		<img src="/web-estudiantes/img/judo.svg" alt="">
				<?php endif; ?>

				<?php if ( get_theme_mod( 'page_service_title_3' ) ) : ?>
		<h5>Judo</h5>
				<?php endif; ?>


		<?php endif; ?>

</div><!-- service -->
</div><!-- col-1-3 -->


					<div class="col-1-1" style="text-align:center: width:100%; border-top:1px dashed #61666b; border-bottom:1px dashed #61666b;padding:1em; padding-top:2em; margin: 3em auto; ">
							<p style="color:#61666b; ">JOIN THE ULTIMATE AND IRREPLACEABLE EXPERIENCE NOW</p>
					</div>

					<div class="col-1-1" style="text-align:center; margin: 2em auto">

						<p style="color:#052561; font-weight:bold; font-size:20px;"> PALMARES</p>
						<p style="color:#052561; font-weight:bold;">Nacional</p>
						<p >Liga Nacional de Básquet, Subcampeón 1990/91</p>

						<p style="color:#052561; font-weight:bold;"> Asociación Bahiense de Básquetbol</p>
						<p >Primera División (16):<br>
								29 1930, 1931, 1932, 1933, 1934, 1954, 1955, 1957, 1960, 1965, 1970, 1974, 1975, 1982, 1983, 1990 <br>
								Torneo de Apertura (6):<br>
								1932, 1951, 1954, 1955, 1957, 1973 <br>
								Torneo de Clausura (2): <br>
								1930, 1935 <br>
								Torneo Ciudad de Bahía Blanca (14): <br>
								1959, 1960, 1962, 1963, 1966, 1967, 1970, 1971, 1972, 1974, 1975, 1980, 1983, 2013<br>
								Torneo Competencia (5): <br>
								1931, 1932, 1935, 1938, 1942<br>
								Copa Federal (3): <br>
								1952, 1959, 1983<br>
								Torneos extraordinarios (3): <br>
								1944, 1958, 1971<br>
								Segunda División de Ascenso (3): <br>
								1948, 1993, 2004<br>
						</p>



					</div>





        </div><!-- grid -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
