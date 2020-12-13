<?php
/**
 * Build our footer.
 * Based on original Generatepress footer file /inc/structure/footer.php
 *
 * @since 1.3.42
 */
$inside_site_info_class = '';

if ( 'full-width' !== generate_get_option( 'footer_inner_width' ) ) {
	$inside_site_info_class = ' grid-container grid-parent';

	if ( generate_is_using_flexbox() ) {
		$inside_site_info_class = ' grid-container';
	}
}
?>
<footer <?php generate_do_element_classes( 'site-info', 'site-info' ); ?>>
	<div class="inside-site-info<?php echo $inside_site_info_class; // phpcs:ignore ?>">

		<?php generate_do_site_logo(); ?>

		<div class="copyright-bar">

			<div class="copyright">©<?php echo date("Y"); ?> paulgarcia.co</div>

			<?php generate_construct_footer_widgets(); ?>

		</div>

	</div>
</footer>
<?php
