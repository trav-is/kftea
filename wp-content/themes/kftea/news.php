<?php
/*
 * Template Name: News
 *
 * @package WordPress
 * @subpackage Kung_Fu_Tea
 */

get_header(); ?>
	<div id="header-banner2">
		<div class="header-content" style="background-image: url(/wp-content/themes/kftea/images/headers/news-bg.jpg);">
			<div class="container">
				<div class="row">
					<div class="sixteen columns"><img src="/wp-content/themes/kftea/images/headers/news-img.jpg" alt="News and Promotions - Check out some of our upcoming promotions and new store openings" class="primary-image" /></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-body">
	<div class="container">
		<a tabindex="-1" id="main-content" name="main-content"></a>
		<div id="now-open-sign"><img src="/wp-content/themes/kftea/images/now-open-sign.png" alt="Now Open" /></div>
		<div class="row news-row">
			<div class="sixteen columns">
			<?php
				if (is_page()) {
					$cat=get_cat_ID('Now Open');
					$posts = get_posts ("cat=$cat");
					
					query_posts( array(
						'cat' => 'Now Open',
						"order" => 'asc',
						'orderby' => 'meta_value',
						'meta_key' => 'Display Order'
					));
					if (have_posts()) : while (have_posts()) : the_post();
						
						$postID = get_the_ID();
						$location = get_post_meta($postID, 'Location Name', $single = true);
						$street = get_post_meta($postID, 'Street', $single = true);
						$cityStateZip = get_post_meta($postID, 'City State Zip', $single = true);
						$directions = get_post_meta($postID, 'Directions Link', $single = true);
			?>
						<div class="news-location">
							<h2><?php the_title(); ?></h2>
								<h3><?= $location ?></h3>
								<?php 
								if (has_post_thumbnail($postID)) {
									echo get_the_post_thumbnail($postID);
								}
								the_content(); ?>
								<p class="address"><?= $street ?><br />
									<?= $cityStateZip ?></p>
								<a href="<?= $directions ?>" class="directions" target="_blank">Directions</a>
						</div>
			<?php
						endwhile;
					endif;
					wp_reset_query();
				}
			?>		
			</div>
		</div>
	
		<?php
			if (is_page()) {
				$cat2=get_cat_ID('Promotions');
				$promotions = get_posts("cat=$cat2");
				if ($promotions) {
		?>
				</div>
			</div>
			<div class="page-body">
				<div class="container">
					<img src="/wp-content/themes/kftea/images/promotions-tab.jpg" alt="Promotions" class="promotions-tab" />
					<?php foreach ($promotions as $promo):
						setup_postdata($promo); ?>
						
						<div class="row promo-row">
							<?php if (has_post_thumbnail($promo->ID)) { ?>
								<div class="eight columns feature">
									<?= get_the_post_thumbnail($promo->ID); ?>
								</div>
								<div class="eight columns">
							<?php } else { ?>
								<div class="sixteen columns">
							<?php } 
								the_content(); ?>
							</div>
						</div>
						
					<?php endforeach;
				}
			}
		?>
		
		<br class="clearFix" />
		<?php require 'store-locator.php'; ?>
	</div>
</div>
<?php get_footer(); ?>