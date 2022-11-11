<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Play
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	

	

	<header class="entry-header">

		<div class="categoria-tempo">
	    	<p class="categoria"><?php the_terms($id, 'playvideo_categories' ) ;?></p>
	    	<p class="tempo"><?php the_field('tempo_de_duracao') ;?></p>		    	
		</div>

		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>		
	</header>	

	<div class="entry-content">		
		<div class="embed-container">
			<?php
				$video = get_field('video-embed');

				if( !empty( $video ) ):
			     the_field('video-embed');
			     endif; 
		    ?>
		</div>

		<div class="sinopse">
			<?php
				$sinopse = get_field('sinopse');

				if( !empty( $sinopse ) ): ?>
			     <p class="sinopse"> <?php  the_field('sinopse');?> </p>
			 <?php  endif; ?>

		</div>		

		
	</div>



	<footer class="entry-footer">
		<?php bx_desafio_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->




