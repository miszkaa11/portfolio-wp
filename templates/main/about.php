<!-- About -->
<?php
$about_fields = [
	"image" => get_field("about_image"),
	"header" => get_field("about_header_1"),
	"texts" => [
		get_field("about_text_1"),
		get_field("about_text_2"),
		get_field("about_text_3"),
		get_field("about_text_4"),
		get_field("about_text_5")
	],
];
?>

<section id="about" class="about info">
    <div class="container-m p-2">
		<?php echo display_title(".aboutMe", "Some informations about me", "gallery"); ?>
        <div class="info__content">
            <div class="info__inner" data-aos="zoom-in">
                <img src="<?php echo $about_fields['image']; ?>" class="info__image lazyload-image" alt="Picture Of Me">
                <p class="info__additional-text text">I also like playing games and cold beer.</p>
            </div>
            <div class="info__inner" data-aos="zoom-in">
                <h3 class="info__header header-m"><?php echo $about_fields['header']; ?></h3>
				<?php foreach ($about_fields['texts'] as $text) : ?>
                    <p class="info__text text" data-aos="zoom-in"><?php echo $text; ?></p>
				<?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
