<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package michallukas
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="news__content">
		<?php if ( 'post' === get_post_type() ) : ?>
        <div class="news__inner" data-aos="fade-right">
            <div class="entry-meta" data-aos="zoom-in">
                <?php michallukas_posted_on(); ?>
            </div>
            <header class="entry-header" data-aos="zoom-in">
                <?php endif;
                    if ( is_singular() ) :
                        the_title( '<h1 class="entry-title">', '</h1>' );
                    else :
                        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    endif;
                ?>
            </header><!-- .entry-header -->
            <div class="entry-content" data-aos="zoom-in">
                <?php the_content(); ?>
            </div><!-- .entry-content -->
            <div class="entry-cta" data-aos="zoom-in">
                <a href="<?php the_permalink(); ?>" class="btn news__btn">READ MORE
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="news__inner" data-aos="fade-left">
            <div class="entry-photo" data-aos="zoom-in">
                <?php michallukas_post_thumbnail(); ?>
            </div>
            <div class="entry-cta--mobile" data-aos="zoom-in">
                <a href="<?php the_permalink(); ?>" class="btn news__btn">READ MORE
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
