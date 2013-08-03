<?php
/*
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Kung_Fu_Tea
 */

get_header(); ?>
	<div id="header-banner">
		<div class="royalSlider hp-carousel">
			<ul class="royalSlidesContainer carousel-content">
				<?php /*<li class="royalSlide">
					<img src="/wp-content/themes/kftea/images/headers/jelly-wow.jpg" class="carousel-background" alt="" />
					<div class="container">
						<div class="row">
							<div class="eight columns alpha">
								<h2>Introducing our new hand crafted teas</h2>
								<a href="#" class="button">View Menu</a>
							</div>
							<div class="eight columns omega">
								<img src="/wp-content/themes/kftea/images/headers/jelly-wow-img.png" alt="Jelly Wow" />
							</div>
						</div>
					</div>
				</li>
				<li class="royalSlide">
					<img src="/wp-content/themes/kftea/images/headers/header__temp.jpg" class="carousel-background" alt="" />
					<div class="container">
						<div class="row">
							<div class="eight columns alpha">
								<h2>Introducing our new hand crafted teas</h2>
								<a href="#" class="button">View Menu</a>
							</div>
							<div class="eight columns omega">
								<img src="/wp-content/themes/kftea/images/headers/header__temp-img.png" alt="Jelly Wow" />
							</div>
						</div>
					</div>
				</li> */ ?>
				
<!---
				<li class="royalSlide">
					<div class="carousel-background" style="background-image: url(/wp-content/themes/kftea/images/headers/jellywow-bg.jpg);">
						<div class="container">
							<div class="row">
								<div class="sixteen columns"><img src="/wp-content/themes/kftea/images/headers/jellywow-img.jpg" alt="" class="primary-image" /></div>
							</div>
						</div>
					</div>
				</li>
--->
				<li class="royalSlide">
					<div class="carousel-background" style="background-image: url(/wp-content/themes/kftea/images/headers/bubblemilk-bg.jpg);">
						<div class="container">
							<div class="row">
								<div class="sixteen columns"><img src="/wp-content/themes/kftea/images/headers/bubblemilk-img.jpg" alt="" class="primary-image" /></div>
							</div>
						</div>
					</div>
				</li>
				
				<li class="royalSlide">
					<div class="carousel-background" style="background-image: url(/wp-content/themes/kftea/images/headers/passionfruit-bg.jpg);">
						<div class="container">
							<div class="row">
								<div class="sixteen columns"><img src="/wp-content/themes/kftea/images/headers/passionfruit-img.jpg" alt="" class="primary-image" /></div>
							</div>
						</div>
					</div>
				</li>
				<li class="royalSlide">
					<div class="carousel-background" style="background-image: url(/wp-content/themes/kftea/images/headers/greenwow-bg.jpg);">
						<div class="container">
							<div class="row">
								<div class="sixteen columns"><img src="/wp-content/themes/kftea/images/headers/greenwow-img.jpg" alt="" class="primary-image" /></div>
							</div>
						</div>
					</div>
				</li>
				
				<li class="royalSlide">
					<div class="carousel-background" style="background-image: url(/wp-content/themes/kftea/images/headers/redwow-bg.jpg);">
						<div class="container">
							<div class="row">
								<div class="sixteen columns"><img src="/wp-content/themes/kftea/images/headers/redwow-img.jpg" alt="" class="primary-image" /></div>
							</div>
						</div>
					</div>
				</li>
				<li class="royalSlide">
					<div class="carousel-background" style="background-image: url(/wp-content/themes/kftea/images/headers/tarotslush-bg.jpg);">
						<div class="container">
							<div class="row">
								<div class="sixteen columns"><img src="/wp-content/themes/kftea/images/headers/tarotslush-img.jpg" alt="" class="primary-image" /></div>
							</div>
						</div>
					</div>
				</li>
				
			</ul>
		</div>
	</div>
	<script type="text/javascript">
		$(function() {
			var hpTabs = {};
			hpTabs.tabs = $(".hp-carousel").royalSlider({
				slideTransitionType: "fade",
				slideTransitionSpeed: 1000,              
				slideTransitionEasing: "easeInOutSine",
				directionNavEnabled: true,
				controlNavEnabled: false,
				slideshowEnabled: true,           
				slideshowDelay: 3000,
				dragUsingMouse: false
				/*autoScaleSlider: true,
				autoScaleSliderWidth: 1500,
				autoScaleSliderHeight: 540*/
			}).data("royalSlider");	
		});
	</script>
</div>
<div class="page-body">
	<div class="container">
		<a tabindex="-1" id="main-content" name="main-content"></a>
		<div class="row">
			<?php get_sidebar('home'); ?>
		</div>
		<?php require 'store-locator.php'; ?>
	</div>
</div>
<?php get_footer(); ?>