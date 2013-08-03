<?php
/*
 * Template Name: About
 *
 * @package WordPress
 * @subpackage Kung_Fu_Tea
 */

get_header(); ?>
<?php /*<div id="header-banner" class="internal-banner">
	<div class="header-content">
		<img src="/wp-content/themes/kftea/images/headers/about.jpg" class="header-background" alt="" />
		<div class="container">
			<div class="row">
				<div class="ten columns">
					<h2>Carefully selected teas and drinks for everybody</h2>
					<a target="_blank" href="https://www.facebook.com/pages/Kung-Fu-Tea-%E5%8A%9F%E5%A4%AB%E8%8C%B6/281140911015"><img alt="Like us on Facebook" src="/wp-content/themes/kftea/images/facebook-icon-header.png" /></a> <a target="_blank" href="https://twitter.com/KungFuTeaUSA"><img alt="Follow us on Twitter" src="/wp-content/themes/kftea/images/twitter-icon-header.png" /></a>
				</div>
				<div class="six columns">
					<img src="/wp-content/themes/kftea/images/headers/about-img.png" alt="Taro Tea" />
				</div>
			</div>
		</div>
	</div>
</div>*/ ?>
	<div id="header-banner2">
		<div class="header-content" style="background-image: url(/wp-content/themes/kftea/images/headers/about-bg.jpg);">
			<div class="container">
				<div class="row">
					<div class="sixteen columns"><img src="/wp-content/themes/kftea/images/headers/about-img.jpg" alt="About Kung Fu Tea - Unrivaled quality, utmost attention to details, and unquestionable authenticity" class="primary-image" /></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-body">
	<div class="container">
		<a tabindex="-1" id="main-content" name="main-content"></a>
		<div class="row">
			<?php $aboutwidgets = is_active_sidebar('about-widget-area'); ?>
			<?php if ($aboutwidgets) : ?>
				<div class="ten columns">
			<?php else : ?>
				<div class="sixteen columns">
			<?php endif;?>
			
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; ?>
				
			</div>
	
			<?php if ($aboutwidgets) : ?>
				<?php if (is_active_sidebar('about-widget-area')) : ?>
					<div class="six columns">
						<?php dynamic_sidebar('about-widget-area'); ?>
					</div>
				<?php endif;?>
			<?php endif;?>
		</div>

		<?php require 'store-locator.php'; ?>
	</div>
</div>
<?php get_footer(); ?>