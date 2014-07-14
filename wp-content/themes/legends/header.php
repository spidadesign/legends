<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
    <!--FavIcon-->
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="icon" type="image/x-icon" />
    <!--Style-->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/skdslider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/elastislide/css/elastislide.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">  
	    <div class="rg-image-wrapper">
	        {{if itemsCount > 1}}
	            <div class="rg-image-nav">
	            </div>
	        {{/if}}
	        <div class="rg-image"></div>
	        <div class="rg-loading"></div>
	        <div class="rg-caption-wrapper">
	            <div class="rg-caption" style="display:none;">
	                <p></p>
	            </div>
	        </div>
	    </div>
</script>
	<?php wp_head(); ?>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js"></script>
</head>
<body <?php body_class(); ?>>
<div id="wrap">
    <header id="header" class="clearfix">
        <div class="container clearfix">
            <div id="topnav" class="clearfix">
             <div class="social">
                    <?php if ( is_active_sidebar( 'social-icons' ) ) : ?>
                            <?php dynamic_sidebar( 'social-icons' ); ?>
                    <?php endif; ?>
                </div>
            	<?php wp_nav_menu( array('menu' => 'TopNav', 'container' => 'false', 'menu_class' => 'navi')); ?>
               
            </div>
            <div id="logo-section">
            	<div id="logo">
            		<a href="<?php bloginfo( 'url' ); ?>">
            			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-new.png" alt="" class="img-responsive">
            		</a>
            	</div>



                    <?php if ( is_active_sidebar( 'top-phone' ) ) : ?>
							<?php dynamic_sidebar( 'top-phone' ); ?>
                    <?php endif; ?>
                    <?php /*?><span class="slogan"><small>call us</small></span>
                    <span>1.888.legends</span>
                    <span><small>(1.888.534.3637)</small></span><?php */?>

            </div>
        </div>
    </header>
    <section id="slider" class="clearfix">
        <div id="mainmenu" class="menu">
          <div class="navbar container">
            <span class="brand hidden-desktop">
                Menu:
            </span>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse">
            	<?php wp_nav_menu( array('menu' => 'MainMenu', 'container' => 'false', 'menu_class' => 'nav')); ?>
            </div>
          </div>
        </div>
       <script type="text/javascript">

			//$('#menu-mainmenu ul.sub-menu').before('<div class="sub-menu"></div>')
			//$('#menu-mainmenu ul.sub-menu').('</div>');

	</script>