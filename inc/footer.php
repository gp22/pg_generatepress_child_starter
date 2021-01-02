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

		<div class="text-sm mt-10">
			<strong class="opacity-75">Paul Garcia</strong>
			<p class="mb-0 opacity-75">
				519 W 22nd St. Ste 100<br>
				#93183<br>
				Sioux Falls, SD 57105<br>
			</p>
			<a href="mailto:hello@paulgarcia.co">hello@paulgarcia.co</a>
		</div>

		<div class="flex flex-col mt-10 pt-6 text-sm w-full border border-b-0 border-gray-200 border-l-0 border-r-0 border-solid md:flex-row">

			<div class="copyright text-center opacity-50">©<?php echo date("Y"); ?> paulgarcia.co</div>

			<div class="flex flex-auto justify-center mt-4 md:mt-0 md:justify-end">

				<span class="pr-3 border border-solid border-gray-200 border-b-0 border-t-0 border-l-0">
					<a href="/privacy-policy">Privacy</a>
				</span>
				<span class="px-3 border border-solid border-gray-200 border-b-0 border-t-0 border-l-0">
					<a href="/terms-of-service">Terms</a>
				</span>
				<span class="pl-3">
					<a href="/accessibility-statement">Accessibility</a>
				</span>

			</div>
		</div>

	</div>
</footer>
<?php
