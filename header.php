<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php the_title(); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/main.css' ?>">
	<?php wp_head(); ?>
</head>
<body>

	<div class="pg-container pg-page" >
		
		<header class="Header-container">
			<div class="Header-content">
			<h1 class="Header-title">
				<a class="Header-title-link" href="<?php bloginfo('url') ?>"><?php bloginfo('title') ?></a>
			</h1>
			<h2 class="Header-subheading">Just another WordPress site</h2>
			</div>
			<nav class="Nav-menu">
				<?php wp_nav_menu( array( 'container' => '' ) ); ?>
<!-- 				<ul class="Nav-list">
					<li class="Nav-listItem"><a class="Nav-listItem-link" href="#">Home</a></li>
					<li class="Nav-listItem"><a class="Nav-listItem-link" href="#">About</a></li>
					<li class="Nav-listItem"><a class="Nav-listItem-link" href="#">Recipes</a></li>
					<li class="Nav-listItem"><a class="Nav-listItem-link" href="#">Contact</a></li>
				</ul> -->
			</nav> <!-- navigation -->
		</header> <!-- header -->