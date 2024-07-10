<!-- Sticky -->
<?php
$sticky_fields = [
	[
		'href' => 'tel:+48 505 160 622',
		'class' => 'sticky__link phone phone-1',
		'iconClass' => 'fa-solid fa-square-phone',
	],
	[
		'href' => 'mailto:atesenergygroup@gmail.com',
		'class' => 'sticky__link mail',
		'iconClass' => 'fa-solid fa-envelope',
	],
];
?>
?>
<div class="sticky" id="stickyButton">
	<div class="sticky__title">
		<h2 class="sticky__header text">CONTACT</h2>
	</div>
	<div class="sticky__items" id="stickyOptions">
		<?php foreach ($sticky_fields as $item): ?>
			<div class="sticky__item">
				<a href="<?php echo $item['href']; ?>" class="<?php echo $item['class']; ?>">
					<i class="fa-solid <?php echo $item['iconClass']; ?>"></i>
				</a>
			</div>
		<?php endforeach; ?>
	</div>
</div>