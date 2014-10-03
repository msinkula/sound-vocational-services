<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php if ( is_home() || is_archive() || is_page('Home')) { ?><?php bloginfo('description'); echo ' | '; bloginfo('name'); echo ' | '; echo 'Seattle, WA.'; ?><?php } else { ?><?php if ( is_single() || is_page()) { ?><?php the_title(); ?> | <?php if ( is_page() && $post->post_parent ) { ?><?php $parent_title = get_the_title($post->post_parent); echo $parent_title; print ' | ' ?><?php } ?><?php bloginfo('name'); echo ' | '; echo 'Seattle, WA.'; ?><?php } } ?></title>

<!-- Begin Meta -->
<meta name="description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
<!-- End Meta -->

<!-- Begin Meta for Facebook -->
<meta property="og:title" content="<?php the_title(); ?>"/>
<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
<meta property="og:url" content="<?php the_permalink(); ?>"/>
<?php $fb_image = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'thumbnail'); ?>
<?php if ($fb_image) : ?>
<meta property="og:image" content="<?php echo $fb_image[0]; ?>" />
<?php endif; ?>
<meta property="og:type" content="<?php if (is_single() || is_page()) { echo "article"; } else { echo "website";} ?>"
/>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
<!-- End Meta for Facebook -->

<!-- Begin Links -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/ico-flame.ico" />
<!-- End Links -->

<!-- Begin Scripts -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/toggle.js"></script>
<!-- End Scripts -->

<!-- Begin WP Head Function -->
<?php wp_head(); ?>
<!-- End WP Head Function -->

</head>

<body <?php body_class(); ?>>


<!-- Begin Header -->
<div id="header">
<header id="header-elements">

	<!-- Begin Logo -->
    <div id="logo">
    <a href="<?php echo get_settings('home'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/img-logo.png" alt="<?php bloginfo('name'); ?>" /><span id="logo-text"><?php bloginfo('name'); ?></span></a>
  </div>
	<!-- End Logo -->
    
    <!-- Begin Tchotchkes -->
    <div id="tchotchkes">
    
        <!-- Begin Language Selector -->
        <div id="language-selector">
        <?php do_action('icl_language_selector'); ?>
        </div>
        <!-- End Language Selector -->
    
    </div>
    <!-- End Tchotchkes -->
    
</header>    
</div>
<!-- End Header -->

<!-- Begin Main Menu -->
<div id="menu-main">
<nav id="menu-main-elements">
<h4 id="menu-main-title"><a href="#"><span id="menu-main-title-glyph">&#8801;&nbsp;</span>Menu</a></h4>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
</div>
<!-- End Main Menu -->

<?php if (!( is_page() && $post->post_parent )) { // begin if page does not have a parent ?>
	
<!-- Begin Home Page Spotlight -->
<div id="spotlight" class="page-<?php the_ID(); ?>">
    <div id="spotlight-elements" class="page-<?php the_ID(); ?>">
    <p id="spotlight-tagline" class="page-<?php the_ID(); ?>"><?php $key="spotlight-tagline"; echo get_post_meta($post->ID, $key, true); ?></p>
    <?php if ( is_page('Home') ) { ?><a id="spotlight-button" class="page-<?php the_ID(); ?>" href="our-services">Learn More</a><?php } else { ?><a id="spotlight-button" class="page-<?php the_ID(); ?>" href="/send-a-referral/">Send a Referral</a><?php } ?>
    </div>
</div>
<!-- End Home Page Spotlight -->
    
<?php }  // end if page does not have a parent ?>

<!-- Begin Middle -->
<div id="middle">
<div id="middle-elements">

<?php if ( !is_page('Home') ) { if (function_exists('bcn_display')) { ?>
    
<!-- Begin Breadcrumbs -->
<div id="breadcrumbs"> 
<?php bcn_display(); ?>
</div>
<!-- End Breadcrumbs -->
    
<?php } } ?>