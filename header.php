<?php
/*
    Header.php
-------------------------------------
*/
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'michallukas' ); ?></a>
    <header id="masthead" class="site-header">
        <div class="container-nav p-2">
            <div class="site-branding">
		        <?php the_custom_logo(); ?>

		        <?php if ( is_front_page() && is_home() ) : ?>
			        <?php if ( get_theme_mod( 'show_site_title', true ) ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			        <?php endif; ?>
		        <?php else : ?>
			        <?php if ( get_theme_mod( 'show_site_title', true ) ) : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			        <?php endif; ?>
		        <?php endif; ?>

		        <?php
		        $test_description = get_bloginfo( 'description', 'display' );
		        if ( $test_description || is_customize_preview() ) :
			        ?>
			        <?php if ( get_theme_mod( 'show_site_description', true ) ) : ?>
                    <p class="site-description"><?php echo $test_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		        <?php endif; ?>
		        <?php endif; ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
		        <?php
		        wp_nav_menu(
			        array(
				        'theme_location' => 'menu-1',
				        'menu_id'        => 'Primary',
			        )
		        );
		        ?>
            </nav><!-- #site-navigation -->
        </div>
    </header><!-- #masthead -->