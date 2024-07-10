<!-- Detail view -->
<?php
// Acf fields for slider
$slider_images = [];
for ($i = 1; $i <= 10; $i++) {
    $slider_images[] = get_field("detail_view_image_" . $i);
}
?>

    <div class="detail-view__content">
        <div class="project" data-aos="zoom-in">
            <a href="<?php the_field('template_anchor');?>" class="project__link text" data-aos="zoom-in">See the project
                <i class="fa-solid fa-link"></i>
            </a>
        </div>
        <div class="info" data-aos="zoom-in">
            <div class="customer">
                <h3 class="customer__header header-m" data-aos="zoom-in">Customer:</h3>
                <p class="customer__text text"><?php the_field('template_customer'); ?></p>
            </div>
            <div class="date" data-aos="zoom-in">
                <h3 class="date__header header-m" data-aos="zoom-in">Date:</h3>
                <p class="date__text text"><?php the_field('template_date'); ?></p>
            </div>
            <div class="task" data-aos="zoom-in">
                <h3 class="task__header header-m" data-aos="zoom-in">Task:</h3>
                <p class="task__text text"><?php the_field('template_task'); ?></p>
            </div>
        </div>
        <div class="slider" data-aos="zoom-in">
            <div id="detail-view-splide" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php foreach ($slider_images as $image) : ?>
                            <?php if ($image) : ?>
                                <li class="splide__slide">
                                    <a href="<?php echo $image; ?>">
                                        <img src="<?php echo $image; ?>" alt="Web project photo" loading="lazy">
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
