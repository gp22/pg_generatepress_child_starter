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

/**
 * Add CSS classes to body element.
 */
add_filter( 'body_class', function( $classes ) {

	return array_merge( $classes, array( 'bg-gradient-to-b', 'from-gray-100', 'to-white' ) );

} );

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

			<?php $hero = get_field('hero');
			if( $hero ): ?>

				<header class="inside-page-header my-0 py-12 md:py-20 md:py-28">

					<div class="md:max-w-xl lg:max-w-2xl">
						<h1 class="lg:text-display-1"><?php echo $hero['heading']; ?></h1>
						<p><?php echo $hero['subhead_emoji']; ?>
							<span class="opacity-75"><?php echo $hero['subhead']; ?></span>
						</p>
						<a href="<?php echo $hero['button_link']; ?>" class="btn-primary">
							<?php echo $hero['button_text']; ?>
						</a>
					</div>

				</header>

			<?php endif; ?>

			<article class="inside-article">

				<?php $about_section = get_field('about_section');
				if( $about_section ):	?>

					<section class="flex flex-wrap md:items-center">

						<div class="md:w-7/12">
							<h2 class="text-2xl"><?php echo $about_section['heading']; ?></h2>
							<?php echo $about_section['copy']; ?>
						</div>

						<div class="flex justify-end mt-6 transform -rotate-6 md:mt-0 md:w-5/12">
							<img class="headshot border-solid border-8 border-white shadow-lg" src="<?php echo esc_url($about_section['headshot']['url']); ?>" alt="<?php echo esc_attr($about_section['headshot']['alt']); ?>"/>
						</div>

					</section>

				<?php endif; ?>

				<?php $feature_section = get_field('feature_section');
				if( $feature_section ):	?>

					<section class="mt-24 md:mt-36">

						<div class="flex flex-wrap items-center">

							<div class="pr-12 hidden invisible md:block md:visible md:w-1/2">
								<img src="<?php echo esc_url($feature_section['feature_image']['url']); ?>" alt="<?php echo esc_attr($feature_section['feature_image']['alt']); ?>">
							</div>

							<ul class="m-0 md:w-1/2">

								<li>
									<h3 class="mb-2 text-base">
										Strategy & Collaboration
									</h3>
									<p class="mb-10 text-sm opacity-75">Your project will be broken into distinct phases with plenty of positive collaboration along the way. You’ll be an active participant in the process!</p>
								</li>
								<li>
									<h3 class="mb-2 text-base">
										Training & Documentation
									</h3>
									<p class="mb-10 text-sm opacity-75">Before your website is finished you’ll get a personal training session to learn how to use it. You’ll get comfortable navigating it, adding content, and maintaining it.</p>
								</li>
								<li>
									<h3 class="mb-2 text-base">
										Design & Development
									</h3>
									<p class="mb-10 text-sm opacity-75">Your website will look modern and make an impression. And, as a developer, I put my years of experience into writing clean code that's easy to maintain, no matter who works on it in the future.</p>
								</li>
								<li>
									<h3 class="mb-2 text-base">
										Mobile Friendly
									</h3>
									<p class="mb-0 text-sm opacity-75">Your website will work and look great on every device. Your visitors will get what they expect whether they’re visiting on a phone, laptop or a large desktop monitor.</p>
								</li>

							</ul>

						</div>

					</section>

				<?php endif; ?>

				<?php $testimonial = get_field('testimonial');
				if( $testimonial ):	?>

					<section class="mt-24 md:mt-36">

						<blockquote class="flex flex-wrap justify-center">

							<div class="md:w-9/12">
								<p><q><?php echo $testimonial['quote']; ?></q></p>
								<figcaption class="font-bold opacity-75">—<cite><?php echo $testimonial['cite']; ?></cite></figcaption>
							</div>

							<div class="flex mt-6 md:items-center md:justify-end md:mt-0 md:w-3/12">
								<img class="headshot-testimonial rounded-full" src="<?php echo esc_url($testimonial['headshot']['url']); ?>" alt="<?php echo esc_attr($testimonial['headshot']['alt']); ?>"/>
							</div>

						</blockquote>

					</section>

				<?php endif; ?>

				<section class="my-24 md:text-center md:my-36">

					<h2 class="text-2xl">Ready to Chat?</h2>

					<p class="text-lg">Want to discuss your next website project or just have questions?</p>

					<a href="<?php echo $hero['button_link']; ?>" class="btn-primary">
						<?php echo $hero['button_text']; ?>
					</a>

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
