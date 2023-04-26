<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="wrapper" class="hfeed">

<header id="header" role="banner">

<<<<<<< HEAD
<div id="branding" class="site-logo">
=======
<div id="branding">
<div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
>>>>>>> parent of 06ec6cb (15 avril 23h59)
<?php
// Vérifier si le thème prend en charge le logo personnalisé
if ( function_exists( 'the_custom_logo' ) ) {
	// Afficher le logo personnalisé
	the_custom_logo();
}
?>

</div>

<<<<<<< HEAD
<nav class="Flexdirection" role="navigation" >
 <div class="Navmenu"> 
 <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
 </div>   
<div id="ordermenu"> 
        <button>Commander </button>
</div>
=======
<div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div>
</div>


<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
<div id="search"><?php get_search_form(); ?></div>
>>>>>>> parent of 06ec6cb (15 avril 23h59)
</nav>


</header>

<div id="container">
<main id="content" role="main">