<?php
/*
 * Template Name: Careers
 *
 * @package WordPress
 * @subpackage Kung_Fu_Tea
 */

get_header(); ?>
<div id="header-banner2">
		<div class="header-content" style="background-image: url(/wp-content/themes/kftea/images/headers/careers-bg.jpg);">
			<div class="container">
				<div class="row">
					<div class="sixteen columns"><img src="/wp-content/themes/kftea/images/headers/careers-img.jpg" alt="Careers - Find the position for you at one of our stores" class="primary-image" /></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-body">
	<div class="container">
		<a tabindex="-1" id="main-content" name="main-content"></a>
		<div class="row">
			<?php $careerswidgets = is_active_sidebar('careers-widget-area'); ?>
			<?php if ($careerswidgets) : ?>
				<div class="twelve columns">
			<?php else : ?>
				<div class="sixteen columns">
			<?php endif;?>
			
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; ?>
				
			</div>
	
			<?php if ($careerswidgets) : ?>
				<?php if (is_active_sidebar('careers-widget-area')) : ?>
					<div class="four columns">
						<?php dynamic_sidebar('careers-widget-area'); ?>
					</div>
				<?php endif;?>
			<?php endif;?>
		</div>

		<?php require 'store-locator.php'; ?>
	</div>
</div>
<?php get_footer(); ?>