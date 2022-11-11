<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Play
 */

get_header();
?>

	<main id="primary" class="site-main">
		
		<?php		
		$post_type = 'play_video';
		$taxonomies = get_object_taxonomies( (object) array( 'post_type' => $post_type ) );

		$last_args = array(
					'post_type'=> $post_type, 
					'numberposts' => '1', 
					'post_status' => 'publish',											
				);
		$last_post = new WP_Query( $last_args );

		

		if ( $last_post->have_posts() ) : $last_post->the_post();
			 $url = get_the_post_thumbnail_url( null, 'full' );				
			$id = get_the_ID();?>

		    <div class="ultimo_post" style="background: url('<?php echo esc_url( $url ); ?>');">
			    <div class="cont_ultimo_post">
			    	<div class="categoria-tempo">
				    	<p class="categoria"><?php the_terms($id, 'playvideo_categories' ) ;?></p>
				    	<p class="tempo"><?php the_field('tempo_de_duracao') ;?></p>		    	
			    	</div>
			    	<div class="titulo-destaque">
			    		<h2><?php the_title() ;?></h2>
			    	</div>
			    	<div class="button">
			    		<button><?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?></button>
			    	</div>
			    
				</div>
		    </div>
		    		    
		<?php endif; ?>


		<?php
	    wp_reset_postdata();
			
			foreach( $taxonomies as $taxonomy ) :				
				$terms = get_terms( $taxonomy,
			    		array(
			    			'orderby' 	=> 'id',
			    			'order'   	=> 'ASC',
			    			'hide_empty' 	=> '1',
					)
				);		    

			    foreach( $terms as $term ) :
			    		
					$args = array (
						'post_type'	  => $post_type,
						'posts_per_page'  => '-1',
						'tax_query' 	  => array(
				                    array(				                        
				                        'taxonomy' => $taxonomy,
				                        'field'    => 'slug',
				                        'terms'    => $term->slug,
				                    )
				                )
							);
						
					$query = new WP_Query( $args );
				 	
					if( $query->have_posts() ) : ?>
						<!-- Category -->
						<div class="titulo-categoria">
							<h2><?php echo $term->name ;?></h2>
						</div>


						<div id="sec-categoria-<?php echo $term->slug ;?>">						
						<!-- Loop - post -->
						<?php while( $query->have_posts() ) : $query->the_post(); ?>
							<div class="play-video-post">
								<?php get_template_part( 'template-parts/content', 'home', get_post_type() );?>
						    </div>
			        	<?php endwhile; ?>

			        	</div> <?php

			    	endif;

				endforeach;				

			endforeach;			
		?>

	
	</main><!-- #main -->

<?php
get_footer();