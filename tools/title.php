<?php
// Title
function display_title($title, $subtitle, $sectionId) {
	$link = generate_section_link($sectionId);
	?>
    <div class="title">
        <div class="title__content">
            <h2 class="title__header header-l" data-aos="zoom-in"><?php echo $title;?></h2>
            <h3 class="subtitle__header header-m" data-aos="zoom-in"><?php echo $subtitle;?></h3>
        </div>
        <div class="arrow" data-aos="zoom-in">
            <a href="<?php echo $link;?>" class="arrow__btn btn">
                <i class="fa-solid fa-arrow-down"></i>
            </a>
        </div>
    </div>
	<?php
}

// Post Title
function display_post_title($postTitle, $postSubtitle) {
?>
    <div class="title">
        <div class="title__content">
            <h2 class="title__header header-l" data-aos="zoom-in"><?php echo $postTitle; ?></h2>
            <h3 class="subtitle__header header-m" data-aos="zoom-in"><?php echo $postSubtitle; ?></h3>
        </div>
        <div class="arrow" data-aos="zoom-in">
            <a href="javascript:void(0)" class="arrow__btn btn" onclick="history.back()">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
        </div>
    </div>
	<?php
}