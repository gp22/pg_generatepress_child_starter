<?php
/**
 * The template for displaying the front page.
 * It is based on the generatepress page.php file.
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

			?>

			<header class="inside-page-header my-0 py-12 md:py-20 lg:py-28">

				<div class="md:max-w-xl">
					<h1 class="">Does your website create solutions and peace of mind — or pain and frustration?</h1>
					<p>👋
						<span class="text-opacity-75">
							Hi, I'm Paul. I can help you build trust, and achieve your business goals with exceptional website design and strategy.
						</span>
					</p>
					<a href="" class="font-bold tracking-wider py-3 px-7 text-white uppercase bg-blue-500 inline-block">Get In Touch!</a>
				</div>

			</header>

			<article class="inside-article">

				<section class="flex flex-wrap md:items-end">

					<div class="md:w-8/12">
						<h2>Lorem Ipsum</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>

					<div class="flex justify-end md:w-4/12">
						<img class="transform -rotate-6 border-solid border-8 border-white shadow" src="https://via.placeholder.com/150" alt="">
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
