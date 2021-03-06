<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0" style="display: block;">
                <div class="row" style="padding:0; margin: 0;">
                    <div class="navbar-brand col-4" style="margin: 0 0 15px 0;padding:0;">
                        <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                            <a href="<?php echo esc_url( home_url( '/' )); ?>">
                                <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                            </a>
                        <?php else : ?>
                            <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                        <?php endif; ?>
    
                    </div>
                    
                    <?php if ( is_active_sidebar( 'header-1' ) ) : ?>
                        <div class="widget-area col-8" role="complementary" style="margin-bottom: 15px;padding:0;">
                        	<?php dynamic_sidebar( 'header-1' ); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-start bg-green',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>                

            </nav>
            
            <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
                <?php if(has_header_image()): ?>
                    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
                      <div class="carousel-inner">
                        <?php $firstSlide=true; ?>
                        <?php foreach (get_uploaded_header_images() as $header_image):?>
                            <div class="carousel-item <?php echo $firstSlide ? "active" : "";  ?>">
                              <img class="d-block w-100" src="<?php echo $header_image['url']; ?>" alt="Slide">
                            </div>
                        <?php 
                         $firstSlide=false;
                         endforeach;
                        ?>
                      </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        
	</header><!-- #masthead -->
    
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
                <?php endif; ?>