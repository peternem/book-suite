<section id="productDesign" class="sub-section prod-features white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1><?php echo $cbtn_text = _e( 'Intuitive Data Tools to Boost Your Property\'s Revenue', 'upbootwp' );?></h1>
			</div>	
		</div>
		<?php 
				
		$args = array( 
			'post_type' => 'post',
			'category_name' => 'property-pricing',
			//'tag' => 'design', //must use tag id for this field
			'posts_per_page' => -1, //get all posts
		 	'order'   => 'DESC'
		);
			$loop = new WP_Query( $args );
				
			$postx_counter = 0;

			while ( $loop->have_posts() ) : $loop->the_post();
				$postx_counter++;  
				if ($postx_counter == 1 ) {
					echo "<div class='row'>";
				} 
				?>
				<div class="col-md-4 features-box" data-post="<?php echo $postx_counter ?>">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="icon">
						<?php if ( has_post_thumbnail() ) {  ?>
						<?php the_post_thumbnail('post-thumbnails', array('class' => 'svg')); ?>
						<?php  } ?>
					</div>
					<div class="content">
						<header class="title">
								<p class="h4"><?php echo the_title(); ?></p>	
						</header>
							<?php echo the_excerpt(); ?>
							<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</dp>' ); ?>
							<?php
								if(get_field('product_associations')) :
									echo "<div class=\"badges\">";
									$field = get_field_object('product_associations');
									$value = get_field('product_associations');
									//print_r($value);
								
									foreach ($value as $val) :
									    echo "<span class=\"badge\">".$val."</span>"; 
									endforeach;
									echo "</div>";
								endif; 
							?>
							
					</div>
					</article>
				</div>
				<?php

				if ($postx_counter % 3 == 0 ) {
					echo "</div>";
					$postx_counter = 0;
				} 
			endwhile;  
			
			wp_reset_postdata();
					
			?>   
	</div>
</section>