<?php
// Arrow
function display_arrow($sectionId) {
	$link = generate_section_link($sectionId);
	?>
	<div class="arrow" data-aos="zoom-in">
		<a href="<?php echo esc_url($link); ?>" class="arrow__btn btn">
			<i class="fa-solid fa-arrow-down"></i>
		</a>
	</div>
	<?php
}
?>
