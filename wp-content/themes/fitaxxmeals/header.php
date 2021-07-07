<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
	<meta name="google-site-verification" content="4STgdFdt47wAwbvwlo0z49Ht8PbtJ2pJcvrcSYmC5Y4" />
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MQXX7DJ');</script>
	<!-- End Google Tag Manager -->
	<meta name="keywords" content="Fitaxx,Fitaxx Meals,Fit Axx Meals,Fit Axx,Fitness,Fit Meals,Roundaxx,Round Axx,Meal Prep,Meal Prepping,Meals Prep,Meals Prepping,Fit Meals,Meals by Roundaxx, Meals by Fitaxx,Prepped Food,Fit Food,Fit Prepped Food,Fit Prepped Meals,BeFit,StayFit,GetFit,Toronto Meal Prep,Vaughan Meal Prep,Vaughan Meal Prepping,Toronto Meal Prepping,Toronto Food">
</head>

<body <?php wpforge_body_schema(); ?> <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQXX7DJ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'wp-forge'); ?></a>
    <?php if (get_theme_mod('wpforge_nav_select') == 'offcanvas' || get_theme_mod('wpforge_mobile_display') == 'yes') { ?>
        <?php get_template_part('content', 'off_canvas'); ?>
    <?php } // end if 
    ?>
    <?php if (get_theme_mod('wpforge_nav_select', 'topbar') == 'topbar') { ?>
        <?php if (get_theme_mod('wpforge_nav_position') == 'scroll' || get_theme_mod('wpforge_nav_position') == 'fixed') { ?>
            <?php get_template_part('content', 'nav'); ?>
        <?php } // end if 
        ?>
    <?php } // end if 
    ?>
    <div class="header_container" style="background-image: url('<?php the_field('background_image') ?>');">
        <header id="header" class="header_wrap grid-container" itemtype="http://schema.org/WPHeader" itemscope="itemscope">
            <div class="grid-x grid-padding-x">
                <div class="site-header small-12 cell">
                    <?php if (is_front_page()) : ?>
                        <div class="header-info-home">
                            <div class="home-container">
                                <h1 class="site-title">
                                    <?php if (have_rows('hero_banner')) : ?>
                                        <?php while (have_rows('hero_banner')) : the_row();
                                            // vars
                                            $hero1 = get_sub_field('hero_1');
                                            $hero2 = get_sub_field('hero_2');
                                            $orange = get_sub_field('hero_orange');
                                            $blue = get_sub_field('hero_blue');
                                            $btntext = get_sub_field('hmhero-btn');
                                            $link = get_sub_field('hmbtn-link');
                                            ?>
                                            <?php echo $hero1 ?><br>
                                            <?php echo $hero2 ?><br>
                                            <span class="hero-orange"><?php echo $orange ?></span> <span class="hero-blue"><?php echo $blue ?></span>
                                        </h1><!-- .site-title -->
                                        <a href="<?php echo $link ?>"><button class="blue-arrow"><?php echo $btntext ?></button></a>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php elseif (is_page('thank-you')) : ?>
                        <div class="overlay">
                            <div class="header-info">
                                <h1 class="site-title">
                                    <?php if ($_GET['submit'] == "failed") : ?>
                                        OOPS...
                                    <?php else : ?>
                                        <?php the_title(); ?>
                                    <?php endif; ?>
                                </h1><!-- .site-title -->
                                <?php if ($_GET['submit'] == "failed") : ?>
                                    <p class="subtitle text-bold">
                                        Well this is a little awkward.
                                    </p>
                                <?php endif; ?>
                            <?php else : ?>
                                <div class="overlay">
                                    <div class="header-info">
                                        <h1 class="site-title">
                                            <?php the_title(); ?>
                                        </h1><!-- .site-title -->
                                        <p class="subtitle">
                                            <?php the_field('subtitle') ?>
                                        </p>
                                    <?php endif;
                                    $description = get_bloginfo('description', 'display');
                                    if ($description || is_customize_preview()) : ?>
                                        <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                                    <?php
                                    endif; ?>
                                </div><!-- .header-info -->
                            </div><!-- .overlay -->
                        </div><!-- .site-header -->
                    </div><!-- .grid-x .grid-margin-x -->
        </header><!-- #header -->
    </div><!-- end .header_container -->
    <?php if (get_theme_mod('wpforge_nav_select', 'topbar') == 'topbar') { ?>
        <?php if (get_theme_mod('wpforge_nav_position', 'normal') == 'normal' || get_theme_mod('wpforge_nav_position') == 'sticky') { ?>
            <?php get_template_part('content', 'nav'); ?>
        <?php } // end if 
        ?>
    <?php } // end if 
    ?>
    <div class="content_container">
        <section class="content_wrap  grid-container" role="document">
            <div class="grid-x grid-padding-x">