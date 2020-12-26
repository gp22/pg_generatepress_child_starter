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

				<?php $hero = get_field('hero');
				if( $hero ): ?>

					<div class="md:max-w-xl">
						<h1 class=""><?php echo $hero['heading']; ?></h1>
						<p><?php echo $hero['subhead_emoji']; ?>
							<span class="opacity-75"><?php echo $hero['subhead']; ?></span>
						</p>
						<a href="<?php echo $hero['button_link']; ?>" class="font-bold tracking-wider py-3 px-7 text-white uppercase bg-blue-500 inline-block">
							<?php echo $hero['button_text']; ?>
						</a>
					</div>

				<?php endif; ?>

			</header>

			<article class="inside-article">

				<section class="flex flex-wrap md:items-center">

					<?php $about_section = get_field('about_section');
					if( $about_section ):	?>

						<div class="md:w-8/12">
							<h2 class="text-4xl"><?php echo $about_section['heading']; ?></h2>
							<p><?php echo $about_section['copy']; ?></p>
						</div>

						<div class="flex justify-end md:w-4/12">
							<img class="headshot transform -rotate-6 border-solid border-8 border-white shadow" src="<?php echo esc_url($about_section['headshot']['url']); ?>" alt="<?php echo esc_attr($about_section['headshot']['alt']); ?>"/>
						</div>

					<?php endif; ?>

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
