<?php
/**
 * The home template file.
 *
 * @package saliou
 */

get_header(); 
?>
	<div id="primary" class="content-area col-md-9 <?php echo esc_attr($layout); ?>">
		<main id="main" class="post-wrap" role="main">

		<?php if ( have_posts() ) : ?>

		<div class="posts-layout">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					if ( $layout != 'classic-alt' ) {
						get_template_part( 'content', get_post_format() );
					} else {
						get_template_part( 'content', 'classic-alt' );
					}
				?>
			<?php endwhile; ?>
		</div>
		<?php
			the_posts_pagination( array(
				'mid_size'  => 1,
			) );
		?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
	if ( ( $layout == 'classic-alt' ) || ( $layout == 'classic' ) ) :
	get_sidebar();
	endif;
?>
<?php get_footer(); ?>
