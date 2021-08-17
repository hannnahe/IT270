<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header id="header" role="banner">
<div id="branding">
<a href="http://localhost/it270/company/" title="NationalCompany" rel="home" itemprop="url"><img id="logo" src="http://localhost/it270/company/wp-content/uploads/logo.jpeg" alt="logo"></a>

</div>
<!-- <div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div>
</div> -->
<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
<!-- <div id="search"><?php get_search_form(); ?></div> -->
</nav>
</header>
<div id="search"><?php get_search_form(); ?></div> 
<div id="wrapper" class="hfeed">
<div id="container">

