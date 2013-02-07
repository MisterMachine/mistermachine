<?php
/**
 * @package WordPress
 * @subpackage 
*/
?>
		<footer>
			<div class="inner container_12">
				<div class="grid_6">
				<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - <?php _e('all rights reserved'); ?></p>
				</div>
				<div class="grid_6">
				<?php wp_nav_menu( array('menu' => 'Footer Menu', 'container' => '' ) ); ?>
				</div>
			</div>
		</footer>
	</div>

	<?php wp_footer(); ?>

	<!-- google analytics script -->
	<script>
		var _gaq = [['_setAccount', '<?php echo GOOGLE_ID; ?>'], ['_trackPageview']];
		(function(d, t) {
			var g = d.createElement(t),
			s = d.getElementsByTagName(t)[0];
			g.async = true;
			g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g, s);
		})(document, 'script');
	</script>

</body>
</html>