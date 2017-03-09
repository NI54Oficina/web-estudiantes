<?php
/**
Template Name: Page - Contacto
 *
 * @package sensible-wp
 */
$response = "";
 
  //function to generate response
  function my_contact_form_generate_response($type, $message){
 
    global $response;
 
    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
 
  }
  //response messages
$not_human       = "Verificación humana erronea.";
$missing_content = "Favor de suplementar toda la información.";
$email_invalid   = "Email invalido.";
$message_unsent  = "El mensaje no pudo ser enviado. Vuelta a intentarlo más tarde.";
$message_sent    = "Gracias! Su mensaje ha sido enviado.";
 $sent="";
//user posted variables
if(isset($_POST['message_name'],$_POST['message_email'],$_POST['message_text'],$_POST['message_human'])){
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$message = $_POST['message_text'];
$human = $_POST['message_human'];
 
//php mailer variables
$to = get_option('admin_email');
$subject = "Contacto de: ".$name;
$headers = 'From: '. $email . "\r\n" .
  'Reply-To: ' . $email . "\r\n";

  if(!$human == 0){
  if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
  else {
 
  //validate email
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  my_contact_form_generate_response("error", $email_invalid);
else //email is valid
{
  //validate presence of name and message
	if(empty($name) || empty($message)){
	  my_contact_form_generate_response("error", $missing_content);
	}
	else //ready to go!
	{
		$sent = wp_mail($to, $subject, strip_tags($message), $headers);
		if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
		else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
		
	}
}
  }
}
else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);
}
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

        <header class="entry-header">
    		<div class="grid grid-pad">
        		<div class="col-1-1">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        		</div><!-- .col-1-1 -->
        	</div><!-- .grid -->
		</header><!-- .entry-header -->

	<?php endif; ?>

	<div class="grid grid-pad">
		<div id="primary" class="content-area col-9-12">
			<main id="main" class="site-main" role="main">

			
			<?php while ( have_posts() ) : the_post(); ?>

				<?php //get_template_part( 'content', 'page' ); ?>
				<script src="<?php echo site_url(); ?>/js/markerwithlabel_packed.js"></script>
				<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCf9vnrPZ-h3ABr9VC-P5ev21Sf0TSgEJg&libraries=places"></script>
				<div id="map_canvas" style="height: 500px; width: 100%;margin-bottom:30px;"></div>
				<div class="double-dashed"></div>
				<div class=""><!--<iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10472.34584621621!2d-62.271434748342266!3d-38.707544080170756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95edbcabdc1302bd%3A0x76d1d88d241e7a11!2sBah%C3%ADa+Blanca%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1487254124596" width="300" height="150" frameborder="0" allowfullscreen="allowfullscreen"></iframe>!--></div>
				<div class="" style="padding: 1em 0;">
				<h1 style="color: #052561; font-weight: bold; font-size: 28px;">Entradas</h1>
				<p style="color: #052561; font-weight: bold;margin:0;"><img src="http://clubestudiantesbb.com/img/icono-boleteria.png">Boleteria </p>
				Calle Angel Brunel<br><br>
				<p style="color: #052561; font-weight: bold;margin:0;"><img src="http://clubestudiantesbb.com/img/icono-acceso.png">Acceso Principal</p>
				Santa Fe 51.
<br>		
				<a href="https://www.google.com/maps/dir//Sta+Fe+51,+B8000BTA+Bahía+Blanca,+Buenos+Aires,+Argentina" target="_blank"><button class="wpcf7-form-control wpcf7-submit btn-llegar" style="float: right; margin-top: -5em;color:white;" type="button"  />Como llegar</button></a>

				</div>
				<div class="double-dashed"></div>
				<article id="post-1867" class="post-1867 page type-page status-publish hentry">
				<div class="entry-content" style="margin-top:50px;">
				<div id="wpcf7-f1866-p1867-o1" class="wpcf7" dir="ltr" lang="en-US">
				<div class="screen-reader-response"><?php if(isset($response)){echo $response;} ?></div>
				<?php if(!$sent){ ?>
				<form class="wpcf7-form" action="<?php the_permalink(); ?>" method="post" novalidate="novalidate">
				<div style="display: none;"><input name="_wpcf7" type="hidden" value="1866" />
				<input name="_wpcf7_version" type="hidden" value="4.6.1" />
				<input name="_wpcf7_locale" type="hidden" value="en_US" />
				<input name="_wpcf7_unit_tag" type="hidden" value="wpcf7-f1866-p1867-o1" />
				<input name="_wpnonce" type="hidden" value="f71a5eaae9" /></div>
				Nombre (requerido)<br>
				<span class="wpcf7-form-control-wrap your-name"><input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" name="message_name" size="40" type="text" value="<?php if(isset($_POST['message_name'])){echo esc_attr($_POST['message_name']);} ?>" /></span><br><br>

				Email (requerido)<br>
				<span class="wpcf7-form-control-wrap your-email"><input class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" name="message_email" size="40" type="email" value="<?php if(isset($_POST['message_email'])){ echo esc_attr($_POST['message_email']);} ?>" /></span><br><br>

				Mensaje<br>
				<span class="wpcf7-form-control-wrap your-message"><textarea class="wpcf7-form-control wpcf7-textarea" cols="40" name="message_text" rows="10"><?php if(isset($_POST['message_text'])){echo esc_textarea($_POST['message_text']);} ?></textarea></span><br><br>
				<p><label for="message_human">Human Verification: <span>*</span> <br><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label></p>
				<input type="hidden" name="submitted" value="1">
				<input class="btn-enviar-contacto" type="submit" value="Enviar" />
				<div class="wpcf7-response-output wpcf7-display-none"></div>
				</form>
				<?php } ?>
				</div>
				</div>
				<!-- .entry-content -->



				</article><!-- #post-## -->
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

	<?php get_sidebar(); ?>
	</div><!-- grid -->
	<?php get_footer(); ?>
