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
				<form action="">
					<div class="entete-form">Remplissez le formulaire ci-dessous,<br> nous vous recontacterons au plus vite</div>

					<input type="text" id="firstname" name="firstname" placeholder="Prenom">
					<input type="text" id="lastname" name="lastname" placeholder="Nom">
					<input type="text" id="fonction" name="fonction" placeholder="Fonction">
					<input type="email" id="email" name="email" placeholder="E-mail">
					<input type="tel" id="phone" name="phone" placeholder="Téléphone">
					<input type="text" id="firm" name="firm" placeholder="Société">
					<input type="text" id="employe" name="employe" placeholder="Nombre d'employés">
					<input type="text" id="country" name="country" placeholder="Pays">
					<input type="submit" name="validForm" value="ENVOYER" class="btn">

				</form>
			</div>


		</div>
	</div>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<div class="top-header">
			<div class="logo">

			</div>


			<div class="wrap-nav">
				<nav>
					<button class="accueil" data-scroll="accueil">Accueil</button>
					<button data-scroll="agence" class="agence">Agence digitale</button>
					<button data-scroll="tarif" class="tarif">Nos tarifs</button>
					<button class="btn" data-form="modal">Je veux un devis</button>
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
