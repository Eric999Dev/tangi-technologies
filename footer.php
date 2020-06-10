<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemebyNens
 */

?>

<footer>
	<div class="content-footer">
		<img class="logo-footer" src="<?php echo get_template_directory_uri(); ?>/images/logo/tangi_technologies_blanc.png" alt="Logo blanc Tangi Technologies">
		<div class="wrap-footer">
			<div class="top-footer">

				<div>
					<address>
						<p>1370 Avenue Saint-Christophe</p>
						<p>Funa, Limete, Kinshasa</p>
						<p>RD Congo</p>
					</address>
				</div>
			</div>

			<div class="middle-footer">

				<p><a href="">Mentions légales</a></p>
				<p><a href="">Conditions générales de vente</a></p>
				<p><a href="">Politique de confidentialité et cookies</a></p>

			</div>
			<div class="bottom-footer">
				<div class="titre-rs">Suivez-nous sur : </div>
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/icones/social_facebook_circle.svg" alt="">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icones/social_twitter_circle.svg" alt="">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icones/instagram_icon.svg" alt="">
				</div>
			</div>
			</>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
