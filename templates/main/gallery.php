<!-- Gallery -->
<section id="gallery" class="gallery">
	<div class="container-m p-2">
		<?php echo display_title(".work&Projects", "Commercial work", "skills"); ?>
		<div class="gallery__content">
			<?php
			$work_gallery_posts = get_posts(array(
				'category_name' => 'Projects',
				'posts_per_page'    => -1
			));
			foreach($work_gallery_posts as $post):
				setup_postdata($post);
				work_gallery_render_post($post);
			endforeach;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>