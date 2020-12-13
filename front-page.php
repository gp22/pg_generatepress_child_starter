<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
		<main id="main" <?php generate_do_element_classes( 'main' ); ?>>
			<?php
			/**
			 * generate_before_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_before_main_content' );

			// if ( generate_has_default_loop() ) {
			// 	while ( have_posts() ) :

			// 		the_post();

			// 		generate_do_template_part( 'page' );

			// 	endwhile;
			// }

			?>

			<article class="inside-article">

				<header>

					<div>
						<h1>Does your website create solutions and peace of mind — or pain and frustration?</h1>
						<p>👋
							<span class="text-opacity-75">
								Hi, I'm Paul. I can help you build trust, and achieve your business goals with exceptional website design and strategy.
							</span>
						</p>
						<button class="btn btn-primary">Get In Touch!</button>
					</div>

				</header>

				<section>

					<div>

						<h2>Lorem Ipsum</h2>

						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

					</div>

				</section>

				<section>

				<div>

						<h2>Lorem Ipsum</h2>

						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

					</div>

				</section>

			</article>

			<?php

			/**
			 * generate_after_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_after_main_content' );
			?>
		</main>
	</div>

	<?php
	/**
	 * generate_after_primary_content_area hook.
	 *
	 * @since 2.0
	 */
	do_action( 'generate_after_primary_content_area' );

	generate_construct_sidebars();

	get_footer();
