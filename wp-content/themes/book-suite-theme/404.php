<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */

get_header(); ?>

<section class="error-404 not-found sub-section white">
	<div class="container-fluid">
		<div class="row">
			<header class="page-header col-md-12">
				<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'upbootwp' ); ?></h1>
			</header><!-- .page-header -->
		</div><!-- .row -->
		<div class="row">
			<div class="col-md-12">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'upbootwp' ); ?></p>
			</div>
			<div class="col-md-12">
				<?php get_search_form(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
			</div>
			<div class="col-md-6">
				<?php if ( upbootwp_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
			</div>
		</div>
		<div class="row">
			<div class="widget widget_categories col-md-12">
				<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'upbootwp' ); ?></h2>
				<ul>
				<?php
					wp_list_categories( array(
						'orderby'    => 'count',
						'order'      => 'DESC',
						'show_count' => 1,
						'title_li'   => '',
						'number'     => 10,
					) );
				?>
				</ul>
			</div><!-- .widget -->
			<?php endif; ?>
		</div>
		<div class="row">
			<div class="col-md-6">
				<?php
				/* translators: %1$s: smiley */
				$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'upbootwp' ), convert_smilies( ':)' ) ) . '</p>';
				the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
				?>
			</div>
			<div class="col-md-6">
				<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
			</div>
		</div>
	</div><!-- .page-content -->
</section><!-- .error-404 -->
<?php get_footer(); ?>