<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Play
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p><?php the_custom_logo();?></p>			
			<span class="sep"> © 2020 — Play — Todos os direitos reservados.  | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'bx-desafio' ), 'bx-desafio', '<a href="https://www.linkedin.com/in/valeriagoncalez/">Valéria Gonçalez</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
