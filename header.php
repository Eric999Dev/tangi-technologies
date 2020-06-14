<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemebyNens
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon.ico" type="image/x-icon">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/favicon/manifest.json">

	<?php require_once('fonts/fonts.php'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="masque">

		<div class="modal">
			<div class="close">
				<img src="<?php echo get_template_directory_uri(); ?>/images/formulaire/cancel.svg" alt="">
			</div>
			<div class="wrap-form">
				<div>
					<h2>Des exeperiences clients sur mesure</h2>
				</div>
				<?php echo do_shortcode('[hubspot type=form portal=7888949 id=26bec327-1ba9-448e-b485-f3d6be025f92]');?>
				<!-- <form action="" method="post">
					<div class="entete-form">Remplissez le formulaire ci-dessous,<br> nous vous recontacterons au plus vite</div>

					<input type="text" id="firstname" name="firstname" placeholder="Prenom">
					<input type="text" id="lastname" name="lastname" placeholder="Nom">
					<input type="text" id="fonction" name="fonction" placeholder="Fonction">
					<input type="email" id="email" name="email" placeholder="E-mail">
					<input type="tel" id="phone" name="phone" placeholder="Téléphone">
					<input type="text" id="firm" name="firm" placeholder="Société">
					<input type="text" id="employe" name="employe" placeholder="Nombre d'employés">
					<input type="text" id="country" name="country" placeholder="Pays">
					<input type="submit" name="validForm" id="validForm" value="ENVOYER" class="btn">

				</form> -->
			</div>


		</div>

	</div>

	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<div class="top-header">
			<div class="logo">

			</div>

			<button class="btn" data-form="modal"><span class="show400">Je veux un </span>devis</button>


			<div class="wrap-nav">
				<nav>
					<button class="accueil" data-scroll="accueil"><a href="#accueil">Accueil</a></button>
					<button data-scroll="agence" class="agence"><a href="#agence">Agence digitale</a></button>
					<button data-scroll="tarif" class="tarif"><a href="#tarif">Nos tarifs</a></button>
				</nav>
			</div>


			<div id="btnMenu" class="burger">
				<div></div>
				<div></div>
				<div></div>
			</div>

		</div>
		<header>
			<div class="content-header">
				<h1>Nous créons l'Afrique digital de demain</h1>
			</div>

		</header>
