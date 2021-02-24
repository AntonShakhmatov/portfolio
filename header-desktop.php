<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo( $show = 'name' ); ?></title>
	<meta name="description" content="Описание страницы">
	<meta name="robots" content="index,follow" />
	<meta name="keywords" content="ключ 1, ключ 2, ключ 3…" />
	<meta name="viewport" content="width=device-width, initial-scale=1">	

	<?php wp_head(); ?>
</head>

<body>
<header>

<!--header-part-->
<div id="header-services">
<div class="header-box">
<!--menu-->	

<nav>
<!-- <ul class="menu">
	<li><a>Home</a></li>
	<li><a>Services</a></li>
	<li><a>Portfolio</a></li>
	<li><a>Contact</a></li>
	<li class="button"><button>GET STARTED</button></li>
</ul> -->

<?php wp_nav_menu('menu');?>

</nav>
<!--/menu-->
<!--inside-the-header-content-->
<!-- <div class="header-block"> -->
<!-- 	<div class="mobile-header-image"></div> -->
<div class="header-images-services">
<div class="services-header-right-image"></div>

<div class="services-header-text-into-images">
	<div class="services-header-text">Graphic Design Services</div>
	<div class="services-header-description">A Rich Palette of Options</div>
	<div id="services-header-text-button"><button>GET STARTED</button></div>
	</div>

</div>

<div class="services-header-text-under-images">
	<div class="services-header-text">Graphic Design Services</div>
	<div class="services-header-description">A Rich Palette of Options</div>
	<div id="services-header-text-button"><button>GET STARTED</button></div>
	</div>

<!--/inside-the-header-content-->

<!-- </div> -->
</div>
</div>

<!--/header-part-->


</header>

