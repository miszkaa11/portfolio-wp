<!-- Template -->
<?php
// Additional data
$portfolio_url = 'www.michallukaszewicz.dev';
$image = get_field("image");

get_header();
?>

<section id="cv" class="cv info">
	<div class="container-s p-2">
		<?php echo display_post_title(postTitle: ".webCV", postSubtitle: "A little bit about me")?>
		<div class="info__content">
			<div class="personal">
				<div class="personal__image">
					<img src="<?php echo $image; ?>" alt="Picture Of Me" class="lazyload-image" data-aos="zoom-in">
				</div>
				<div class="personal__info">
					<div class="personal__item">
						<h3 class="personal__header name header-m" data-aos="zoom-in">
							#<?php echo get_personal_info( fieldName: 'name'); ?>
						</h3>
					</div>
					<div class="personal__item">
						<label class="header-m">date of birth:</label>
						<h3 class="personal__header header-m" data-aos="zoom-in">
							<?php echo get_personal_info(fieldName: 'birthDate')?>
						</h3>
					</div>
					<div class="personal__item">
						<label class="header-m">e-mail:</label>
						<a href="mailto:<?php echo get_personal_info(fieldName: 'email')?>" class="header-m" data-aos="zoom-in">
							<?php echo get_personal_info(fieldName: 'email')?>
						</a>
					</div>
					<div class="personal__item">
						<label class="header-m">phone:</label>
						<a href="tel:<?php echo get_personal_info(fieldName: 'phone')?>" class="header-m" data-aos="zoom-in">
							<?php echo get_personal_info(fieldName: 'phone')?>
						</a>
					</div>
				</div>
			</div>
			<div class="info">
				<p class="info__text text" data-aos="zoom-in"><?php the_field('about_text_1') ?></p>
				<p class="info__text text" data-aos="zoom-in"><?php the_field('about_text_2') ?></p>
				<p class="info__text text" data-aos="zoom-in"><?php the_field('about_text_3') ?></p>
				<p class="info__text text" data-aos="zoom-in"><?php the_field('about_text_4') ?></p>
				<p class="info__text text" data-aos="zoom-in"><?php the_field('about_text_5') ?></p>
			</div>
			<div class="experience">
				<div class="section-title">
					<h3 class="section-title__header header-m" data-aos="zoom-in">
						<?php the_field('experience_header') ?>
					</h3>
				</div>
				<p class="experience__text text" data-aos="zoom-in"><?php the_field('experience_text_1') ?></p>
				<p class="experience__text text" data-aos="zoom-in"><?php the_field('experience_text_2') ?></p>
				<p class="experience__text text" data-aos="zoom-in"><?php the_field('experience_text_3') ?></p>
				<p class="experience__text text" data-aos="zoom-in"><?php the_field('experience_text_4') ?></p>
				<p class="experience__text text" data-aos="zoom-in"><?php the_field('experience_text_5') ?></p>
				<p class="experience__text text" data-aos="zoom-in"><?php the_field('experience_text_6') ?></p>
				<p class="experience__text text" data-aos="zoom-in"><?php the_field('experience_text_7') ?></p>
				<p class="experience__text text" data-aos="zoom-in"><?php the_field('experience_text_8') ?></p>
				<p class="cta__text text" data-aos="zoom-in"><?php the_field('experience_text_9') ?></p>
				<p class="text" data-aos="zoom-in"><?php the_field('experience_text_10') ?></p>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="cta__link" data-aos="zoom-in">
					<?= $portfolio_url ?>
				</a>
			</div>
			<div class="technologies">
				<div class="section-title" data-aos="zoom-in">
					<h3 class="section-title__header header-m"><?php the_field('skills_header') ?></h3>
				</div>
				<div class="icons">
					<?php echo render_icons(); ?>
				</div>
			</div>
			<div class="stack">
				<div class="wp-stack">
					<div class="section-title">
						<h3 class="section-title__header header-m" data-aos="zoom-in">
							<?php the_field('stack_header_1') ?>
						</h3>
					</div>
					<p class="stack__text text" data-aos="zoom-in"><?php the_field('stack_text_1') ?></p>
					<p class="stack__text text" data-aos="zoom-in"><?php the_field('stack_text_2') ?></p>
					<p class="stack__text text" data-aos="zoom-in"><?php the_field('stack_text_3') ?></p>
					<p class="stack__text text" data-aos="zoom-in"><?php the_field('stack_text_4') ?></p>
					<p class="stack__text text" data-aos="zoom-in"><?php the_field('stack_text_5') ?></p>
					<p class="stack__text text" data-aos="zoom-in"><?php the_field('stack_text_6') ?></p>
					<p class="stack__text text" data-aos="zoom-in"><?php the_field('stack_text_7') ?></p>
				</div>
				<div class="front-stack">
					<div class="section-title">
						<h3 class="section-title__header header-m" data-aos="zoom-in">
							<?php the_field('stack_header_2') ?>
						</h3>
					</div>
					<p class="stack__text text" data-aos="zoom-in"><?php the_field('stack_text_8') ?></p>
					<p class="stack__text text" data-aos="zoom-in"><?php the_field('stack_text_9') ?></p>
					<p class="stack__text text" data-aos="zoom-in"><?php the_field('stack_text_10') ?></p>
					<p class="stack__text text" data-aos="zoom-in"><?php the_field('stack_text_11') ?></p>
					<p class="stack__text text" data-aos="zoom-in"><?php the_field('stack_text_12') ?></p>
					<p class="stack__text text" data-aos="zoom-in"><?php the_field('stack_text_13') ?></p>
					<p class="stack__text text" data-aos="zoom-in"><?php the_field('stack_text_14') ?></p>
				</div>
			</div>
			<div class="agreement">
				<p class="agreement__text text" data-aos="zoom-in"><?php the_field('rodo_text') ?></p>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>