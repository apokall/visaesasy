<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package visaeasy7
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="search-fix"></div>
		<?php the_title( sprintf( '<div class="search-result__link"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></div>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php visaeasy7_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	<div class="search-result__text">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
</article><!-- #post-## -->
