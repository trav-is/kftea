<?php
/*
 * Template Name: Menu
 *
 * @package WordPress
 * @subpackage Kung_Fu_Tea
 */

get_header(); ?>
	<div id="header-banner2">
		<div class="header-content" style="background-image: url(/wp-content/themes/kftea/images/headers/menu.jpg);">
			<div class="container">
				<div class="row">
					<div class="sixteen columns"><img src="/wp-content/themes/kftea/images/headers/menu-img.jpg" alt="Our Menu - Stop in for a refreshing drink today!" class="primary-image" /></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-body">
	<div class="container">
		<a tabindex="-1" id="main-content" name="main-content"></a>
		<div class="row menu-row">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>
		</div>

		<?php require 'store-locator.php'; ?>
	</div>
</div>
<?php get_footer(); ?>