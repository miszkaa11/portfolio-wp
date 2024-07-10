<!-- CV Zone -->
<?php
$link = home_url('/cv/');
$cv_fields = [
	[
		'icon' => 'fa-file-arrow-down',
		'link' => get_field('cv_zone_download'),
		'text' => get_field('cv_zone_text_1'),
	],
	[
		'icon' => 'fa-file-code',
		'link' => $link,
		'text' => get_field('cv_zone_text_2'),
	],
];
?>

<section id="cv-zone" class="cv-zone info">
	<div class="container-m p-2">
		<?php echo display_title(".cvZone", "Commercial experience", "contact"); ?>
		<div class="info__content">
			<?php foreach ($cv_fields as $cv_zone): ?>
				<div class="info__inner" data-aos="zoom-in">
					<a href="<?php echo $cv_zone['link']; ?>" class="info__link">
						<i class="fa-solid <?php echo $cv_zone['icon']; ?> fa-5x"></i>
						<?php echo $cv_zone['text']; ?>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>