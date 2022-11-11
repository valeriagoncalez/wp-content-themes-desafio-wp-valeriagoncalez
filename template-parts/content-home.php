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
	<div class="imagem_capa">
	<?php 
		$image = get_field('imagem_de_capa');
		if( !empty( $image ) ): ?>
	    	<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>
	</div>

	<div class="div_tempo">
		<p class="tempo-catalogo"><?php the_field('tempo_de_duracao') ;?></p>
	</div>

	<header class="entry-header content-home">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				bx_desafio_posted_on();
				bx_desafio_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


	<!--  bx_desafio_post_thumbnail(); ?> -->

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bx-desafio' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		?>

		<?php

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bx-desafio' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->



	<footer class="entry-footer">
		<?php bx_desafio_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->




