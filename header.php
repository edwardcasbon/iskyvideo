<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/Article">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '-', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/global.css?v=1">
<script src="<?php echo get_template_directory_uri()?>/js/vendor/modernizr.js"></script>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
<link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196">
<link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<!-- /Favicons -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="skip-link" href="#content"><?php _e('Skip to content'); ?></a>

<header>
    <div class="inner-container">
        <a href="/" class="logo"><img src="<?php echo get_template_directory_uri()?>/img/layout/logo.png" class="" alt="iSky Video logo"></a>
        <nav class="primary">
            <?php wp_nav_menu(); ?>
        </nav>
    </div>
</header>