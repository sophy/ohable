<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ohable
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
		<span class="bottom-copyright">&copy; <?php echo date('Y') ?>
			<a href="<?php echo esc_url(home_url('/')); ?>">
			<?php bloginfo('name'); ?>
			</a>
			<?php _e('All Rights Reserved.', 'ohable') ?>
		</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
</div><!-- #main-site -->

<?php wp_footer(); ?>

</body>
</html>
