<?php
/*
    Footer.php
-------------------------------------
*/
$icons = [
	[
		'field'  => 'email',
		'icon'   => 'google',
		'prefix' => 'mailto:'
	],
	[
		'field'  => 'linkedinLink',
		'icon'   => 'linkedin-in',
		'prefix' => ''
	],
	[
		'field'  => 'githubLink',
		'icon'   => 'github',
		'prefix' => ''
	],
];
?>

<footer id="footer" class="footer">
	<div class="container-m p-2">
		<div class="icons">
			<?php foreach ($icons as $icon): ?>
				<div class="icon">
					<a href="<?= $icon['prefix'] . get_personal_info(fieldName: $icon['field']) ?>">
						<?= get_icon(iconName: $icon['icon']) ?>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
		<div id="footer__content" class="footer__content">
			<div class="privacy-policy-cta">
				<a href="/template/privacy-policy/" class="link">.privacyPolicy</a>
			</div>
			<div class="copyrights">
				<p class="text">Copyright &copy; <?= date( 'Y' ) ?> <?php echo get_personal_info(fieldName: 'name')?></p>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>