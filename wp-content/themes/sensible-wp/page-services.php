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
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        		</div><!-- .col-1-1 -->
        	</div><!-- .grid -->
		</header><!-- .entry-header -->

		<?php else : ?>

        <header class="entry-header" style="background-image:url('/web-estudiantes/img/actividades.png')">
    		<div class="grid grid-pad">
        		<div class="col-1-1">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
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
                				<i class="fa <?php echo esc_html( get_theme_mod( 'page_service_icon_1' )); ?>"></i>
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
                				<i class="fa <?php echo esc_html( get_theme_mod( 'page_service_icon_2' )); ?>"></i>
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
                				<i class="fa <?php echo esc_html( get_theme_mod( 'page_service_icon_3' )); ?>"></i>
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


					<div class="col-1-1" style="text-align:center: width:100%; border-top:1px dashed #61666b; border-bottom:1px dashed #61666b;padding:1em; ">
							<p style="color:#61666b; "> Saraza nose ni lo que va</p>
					</div>

					<div class="col-1-1" style="text-align:center">

						<p style="color:#052561; font-weight:bold;"> jkasndkansd</p>
						<p >asdasdasdasdasd</p>

						<p style="color:#052561; font-weight:bold;"> jkasndkansd</p>
						<p >asdasdasdasdasd</p>

						<p style="color:#052561; font-weight:bold;"> jkasndkansd</p>
						<p >asdasdasdasasddasd</p>
						<p >asdasdasdasdasd</p>
						<p >asdasdasdasdasdasdasdasdasdasd</p>
						<p >asdasdasdasdasdsda asd asd asd asd asd  asdasdasdasd</p>
						<p style="color:#052561; font-weight:bold;"> jkasndkansd</p>
						<p >asdasdasdasdasd</p>
						<p style="color:#052561; font-weight:bold;"> jkasndkansd</p>
						<p >asdasdasdasdasd</p>
						<p style="color:#052561; font-weight:bold;"> jkasndkansd</p>
						<p >asdasdasdasdasd</p>

					</div>





        </div><!-- grid -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
