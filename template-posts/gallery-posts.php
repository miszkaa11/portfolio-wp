<?php
// Gallery Post
function work_gallery_render_post($post) {
	?>
	<div class="gallery__inner">
		<div class="description" data-aos="fade-left">
			<h3 class="header-m" data-aos="zoom-in"><?php the_field('gallery_title'); ?></h3>
			<p class="text" data-aos="zoom-in"><?php the_field('gallery_description'); ?></p>
			<a href="<?php echo get_permalink($post)?>" class="link--desktop link gallery__btn btn" data-aos="zoom-in">SEE MORE
				<i class="fa-regular fa-folder-open"></i>
			</a>
		</div>
		<div class="thumbnail" data-aos="fade-right">
			<img src="<?php the_field('gallery_thumbnail'); ?>" alt="Work Image" class="image lazyload-image" data-aos="zoom-in">
			<a href="<?php echo get_permalink($post)?>" class="link--mobile link gallery__btn btn" data-aos="zoom-in">See more <i class="fa-regular fa-folder-open"></i></a>
		</div>
	</div>
	<?php
}