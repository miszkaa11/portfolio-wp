<?php
/*
    Content.php
-------------------------------------
*/
get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php michallukas_post_thumbnail(); ?>

	<div class="entry-content">
	  <?php
	  $template_name = get_field( 'template_name' );
	  if ( !empty($template_name) ) {
		  if ( $template_name === 'projects' ) {
			  require_once 'custom-template/detail-view.php';
		  }  else {
			  echo 'NIE WYBRANO SZABLONU';
		  }
	  } else {
		  the_content(
			  sprintf(
				  wp_kses(
				  /* translators: %s: Name of current post. Only visible to screen readers */
					  __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'michallukas' ),
					  array(
						  'span' => array(
							  'class' => array(),
						  ),
					  )
				  ),
				  wp_kses_post( get_the_title() )
			  )
		  );
	  }
	  ?>
  </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
