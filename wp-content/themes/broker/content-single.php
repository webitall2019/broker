<?php
/**
 * @package commercegurus
 */
?>
<?php 		
$allowed_args = array(
	//formatting
	'span' => array(
		'class' => array()
	),
);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="image">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail(); ?>
		<?php endif; ?>
    </div>

	<div class="blog-meta">
		<?php cg_get_author_name(); ?>
		<span><?php the_time( 'F j, Y' ) ?></span> <span class="comments"><?php comments_number(); ?> </span>
	</div>

    <div class="entry-content">
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'broker' ),
			'after'	 => '</div>',
		) );
		?>
    </div><!-- .entry-content -->
    <footer class="entry-meta">
		<?php
		/* translators: used between list items, there is a space after the comma */
		$category_list	 = get_the_category_list( esc_html__( ', ', 'broker' ) );

		/* translators: used between list items, there is a space after the comma */
		$tag_list = get_the_tag_list( '', esc_html__( ', ', 'broker' ) );

		if ( !cg_categorized_blog() ) {
			// This blog only has 1 category so we just need to worry about tags in the meta text
			if ( '' != $tag_list ) {
				$meta_text = wp_kses( __( '<span class="tags">%2$s</span>', 'broker' ), $allowed_args );
			} else {
				$meta_text = wp_kses( __( '<span class="tags">%2$s</span>', 'broker' ), $allowed_args );
			}
		} else {
			// But this blog has loads of categories so we should probably display them here
			if ( '' != $tag_list ) {
				$meta_text = wp_kses( __( '<span class="categories">%1$s</span> <span class="tags">%2$s</span>', 'broker' ), $allowed_args );
			} else {
				$meta_text = wp_kses( __( '<span class="categories">%1$s</span> <span class="tags">%2$s</span>', 'broker' ), $allowed_args );
			}
		} // end check for categories on this blog

		printf(
		$meta_text, $category_list, $tag_list, get_permalink()
		);
		?>

<?php // edit_post_link( esc_html__( 'Edit', 'broker' ), '<span class="edit-link">', '</span>' );  ?>
    </footer><!-- .entry-meta -->

</article><!-- #post-## -->
