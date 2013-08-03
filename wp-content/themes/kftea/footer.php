<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Kung_Fu_Tea
 */
?>
		<div id="footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<?php get_sidebar( 'footer' ); ?>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="//use.typekit.net/fxc3yus.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<?php wp_footer(); ?>
</body>
</html>