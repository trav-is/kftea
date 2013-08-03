<?php
/**
 * Store Locator
 *
 *
 * @package WordPress
 * @subpackage Kung_Fu_Tea
 */
?>
<div class="row">
	<div class="sixteen columns">
		<div class="center">
			<span class="dream-tag">Share our dream, and help us introduce Kung Fu Tea to the world!</span>
		</div>
	</div>
</div>
<div class="row">
	<div class="sixteen columns">
		<h2 class="dots"><span>Find the KFTea store closest to you</span></h2>
		<?php
			//while ( have_posts() ) : the_post();
				//get_template_part( 'content', 'home' );
			//endwhile; 
			$my_id = 23;
			$post_id_23 = get_post($my_id);
			$content = $post_id_23->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]>', $content);
			echo $content;
		?>
	</div>
</div>
<div class="clearfix">&nbsp;</div>