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

						<div class="md:w-7/12">
							<h2 class="text-4xl"><?php echo $about_section['heading']; ?></h2>
							<?php echo $about_section['copy']; ?>
						</div>

						<div class="flex justify-end mt-6 transform -rotate-6 md:mt-0 md:w-5/12">
							<img class="headshot border-solid border-8 border-white shadow" src="<?php echo esc_url($about_section['headshot']['url']); ?>" alt="<?php echo esc_attr($about_section['headshot']['alt']); ?>"/>
						</div>

					<?php endif; ?>

				</section>

				<section class="mt-24 lg:mt-36">

					<?php $feature_section = get_field('feature_section');
					if( $feature_section ):	?>

						<div class="flex flex-wrap items-center">

							<div class="pr-12 hidden invisible md:block md:visible md:w-1/2">
								<img src="<?php echo esc_url($feature_section['feature_image']['url']); ?>" alt="<?php echo esc_attr($feature_section['feature_image']['alt']); ?>">
							</div>

							<div class="md:w-1/2">

								<div>
									<h3 class="mb-2 text-base">
										Strategy & Collaboration
									</h3>
									<p class="mb-10 text-sm opacity-75">Your project will be broken into distinct phases with plenty of positive collaboration along the way. You’ll be an active participant in the process!</p>
								</div>
								<div>
									<h3 class="mb-2 text-base">
										Training & Documentation
									</h3>
									<p class="mb-10 text-sm opacity-75">Before your website is finished you’ll get a personal training session to learn how to use it. You’ll get comfortable navigating it, adding content, and maintaining it.</p>
								</div>
								<div>
									<h3 class="mb-2 text-base">
										Design & Development
									</h3>
									<p class="mb-10 text-sm opacity-75">Your website will look modern and make an impression. And, as a developer, I put my years of experience into writing clean code that's easy to maintain, no matter who works on it in the future.</p>
								</div>
								<div>
									<h3 class="mb-2 text-base">
										Mobile Friendly
									</h3>
									<p class="mb-0 text-sm opacity-75">Your website will work and look great on every device. Your visitors will get what they expect whether they’re visiting on a phone, laptop or a large desktop monitor.</p>
								</div>

							</div>

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
