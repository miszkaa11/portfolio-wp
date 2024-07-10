<?php
/*
    Index.php
-------------------------------------
*/
get_header();
?>

<?php
// Sticky
require_once get_template_directory() . '/templates/parts/sticky.php';
?>

    <main id="primary" class="site-main">
        <div class="container-s p-2">
			<?php echo display_post_title(postTitle: ".news", postSubtitle: "Stay updated")?>
			<?php
			$args = array(
				'category_name' => 'news',

			);
			$news_query = new WP_Query($args);

			if ( $news_query->have_posts() ) :
				if ( is_home() && ! is_front_page() ) :
					?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>
				<?php
				endif;

				/* Start the Loop */
				while ( $news_query->have_posts() ) :
					$news_query->the_post();
					get_template_part( 'template-parts/content', 'news' );

				endwhile;

			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;

			wp_reset_postdata();
			?>
        </div>
    </main><!-- #main -->
<?php
get_footer();


