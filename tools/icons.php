<?php
// Icons
function get_icon(string $iconName, string $type = 'fab' ): string {
	return "<i class='$type fa-$iconName'></i>";
}

// Render Icons
function render_icons() {
	$iconsArr = ['js-square', 'react', 'html5', 'sass', 'wordpress', 'square-git'];
	foreach ($iconsArr as $iconName) {
		?>
		<div class="icon" data-aos="zoom-in">
			<?php echo get_icon($iconName); ?>
		</div>
		<?php
	}
}