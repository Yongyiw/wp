<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Generate
 */

get_header(); ?>

	<div id="primary" <?php generate_content_class();?> itemprop="mainContentOfPage">
		<main id="main" <?php generate_main_class(); ?> itemtype="http://schema.org/Blog" itemscope="itemscope" role="main">
		<?php do_action('generate_before_main_content'); ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) : ?>
					<div class="comments-area">
						<?php comments_template(); ?>
					</div>
			<?php endif; ?>

		<?php endwhile; // end of the loop. ?>
		<?php do_action('generate_after_main_content'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
do_action('generate_sidebars');
get_footer();