<?php
/**
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
?>


<section id="pageMasthead" class="page-hero" role="banner">
			<?php if ( has_post_thumbnail() ) {  ?>
			<?php the_post_thumbnail('featured-image-landscape', array( 'class' => 'jumbotron-img img-responsive' )); ?>
			<?php  } ?>
</section>
<section class="sub-section white ">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<header class="entry-header  page-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php upbootwp_posted_on_date(); ?>
					</header><!-- .entry-header -->
					<?php the_content(); ?>
					<footer class="entry-meta">
					
					
					<?php wp_link_pages( array('before' => '<div class="page-links">' . __( 'Pages:', 'upbootwp' ),'after'  => '</div>',) ); ?>
			
					<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
					</footer><!-- .entry-meta -->	
				</div>
				
			</div>
			<?php if(has_term( 'news', 'pr-news' ) ) { ?>
				 <div class="row">
					<div class="col-md-12 text-center">
						<div><a class="btn btn-default btn-lg" title="Product Features" href="/news/" role="button">See All News</a></div>
					</div>
				</div>	
			<?php } ?>
			<?php if(has_term( 'press-releases', 'pr-news' ) ) { ?>
				 <div class="row">
					<div class="col-md-12 text-center">
						<div><a class="btn btn-default btn-lg" title="Product Features" href="/press-releases/" role="button">See All PR News</a></div>
					</div>
				</div>	
			<?php } ?>
			
		</div>
	</article><!-- #post-## -->
</section>

