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
<footer <?php generate_do_element_classes( 'site-info', 'bg-gray-100 relative pt-20' ); ?>>
	<div class="inside-site-info<?php echo $inside_site_info_class; // phpcs:ignore ?>">

		<?php generate_do_site_logo(); ?>

		<div class="flex flex-col text-sm w-full md:flex-row">

			<div class="copyright opacity-50">©<?php echo date("Y"); ?> paulgarcia.co</div>

			<div class="flex flex-auto justify-center md:justify-end">

				<a href="/privacy-policy" class="pr-3 border border-solid border-gray-200 border-b-0 border-t-0 border-l-0">Privacy</a>
				<a href="/terms-of-service" class="px-3 border border-solid border-gray-200 border-b-0 border-t-0 border-l-0">Terms</a>
				<a href="/accessibility-statement" class="pl-3">Accessibility</a>

			</div>
		</div>

	</div>
</footer>
<?php
