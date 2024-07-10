<!-- Intro -->
<?php
$intro_fields = [
	'headers' => [
		get_field('intro_header_1'),
		get_field('intro_header_2'),
		get_field('intro_header_3'),
	],
];
?>

<section id="intro" class="intro info">
    <div class="container-m p-2">
        <div class="info__content">
            <div class="info__inner" data-aos="zoom-in">
				<?php foreach ($intro_fields['headers'] as $header) : ?>
                    <h1 class="info__header header-xl"><?php echo $header; ?></h1>
				<?php endforeach; ?>
				<?php echo display_arrow('about'); ?>
            </div>
        </div>
    </div>
</section>