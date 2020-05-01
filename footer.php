<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Upply
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<img src="<?php the_field('logo') ?>" alt="Upply.io logo">
			<p>&copy; 2018 - <?php echo date('Y'); ?> Upply.io | All Rights Reserved</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
