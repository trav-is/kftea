<?php
/*
 * Template Name: Products
 *
 * @package WordPress
 * @subpackage Kung_Fu_Tea
 */

get_header(); ?>
	<div id="header-banner2">
		<div class="header-content" style="background-image: url(/wp-content/themes/kftea/images/headers/products-bg.jpg);">
			<div class="container">
				<div class="row">
					<div class="sixteen columns"><img src="/wp-content/themes/kftea/images/headers/products-img.jpg" alt="Our Drinks - Take a look at our drink menu and try one of our refreshing blends today" class="primary-image" /></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-body">
	<div class="container">
		<a tabindex="-1" id="main-content" name="main-content"></a>
		<div class="row">
			<div class="sixteen columns">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>
			</div>
		</div>
		<br /><br />
		<?php require 'store-locator.php'; ?>
	</div>
</div>
<?php get_footer(); ?>