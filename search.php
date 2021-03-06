<?php
/**
 * The Template for displaying Search Results pages.
 */

get_header();

if ( have_posts() ) :
?>
	<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12">
		<header class="page-header">
			<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'my-theme' ), get_search_query() ); ?></h1>
		</header>
	</div><!-- /.mdc-cell -->
<?php
	get_template_part( 'archive', 'loop' );
else :
?>
	<article id="post-0" class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12 post no-results not-found">
		<header class="entry-header">
			<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'my-theme' ); ?></h1>
		</header><!-- /.entry-header -->
		<p><?php esc_html_e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'my-theme' ); ?></p>
		<?php
			get_search_form();
		?>
	</article><!-- /#post-0 -->
<?php
	endif;

	wp_reset_postdata(); // End of the loop.

get_footer();
