<?php
/*
    Single.php
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
			<?php echo display_post_title(postTitle: get_the_title(), postSubtitle: ""); ?>
			<?php while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );

				if ( in_category('news') ) {
					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle next btn" data-aos="zoom-in">' . esc_html__( 'PREV', 'michallukas' ) . '</span>',
							'next_text' => '<span class="nav-subtitle prev btn" data-aos="zoom-in">' . esc_html__( 'NEXT', 'michallukas' ) . '</span>',
							'in_same_term' => true,
							'taxonomy' => 'category',
							'term' => 'news'
						)
					);
				}
			endwhile; ?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
