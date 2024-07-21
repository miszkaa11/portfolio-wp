<?php
// Gallery Post
function work_gallery_render_post($post) {
	?>
	<div class="gallery__inner">
		<div class="description">
            <?php
            $selected_icon = get_field('icon_choice');
            if ($selected_icon) {
                echo '<span class="gallery__icon">' . $selected_icon . '</span>';
            }
            ?>
			<h3 class="gallery__header header-m" data-aos="zoom-in"><?php the_field('gallery_title'); ?></h3>
            <p class="gallery__text text" data-aos="zoom-in">
                <?php
                $gallery_description = get_field('gallery_description');
                $max_length = 135;
                if (strlen($gallery_description) > $max_length) {
                    $trimmed_description = substr($gallery_description, 0, $max_length);
                    $last_space = strrpos($trimmed_description, ' ');
                    if ($last_space !== false) {
                        $trimmed_description = substr($trimmed_description, 0, $last_space);
                    }
                    $trimmed_description .= '...';

                    echo $trimmed_description;
                } else {
                    echo $gallery_description;
                }
                ?>
            </p>
			<a href="<?php echo get_permalink($post)?>" class="link--desktop link primary btn" data-aos="zoom-in">SEE MORE
				<i class="fa-regular fa-folder-open"></i>
			</a>
		</div>
		<div class="thumbnail">
            <a href="<?php echo get_permalink($post)?>">
			    <img src="<?php the_field('gallery_thumbnail'); ?>" alt="Work Image" class="image lazyload-image" data-aos="zoom-in">
            </a>
			<a href="<?php echo get_permalink($post)?>" class="link--mobile link primary btn" data-aos="zoom-in">SEE MORE <i class="fa-regular fa-folder-open"></i></a>
		</div>
	</div>
	<?php
}