<?php
/*
 * Template Name: Franchise
 *
 * @package WordPress
 * @subpackage Kung_Fu_Tea
 */

get_header(); ?>
	<div id="header-banner2">
		<div class="header-content" style="background-image: url(/wp-content/themes/kftea/images/headers/franchise-bg.jpg);">
			<div class="container">
				<div class="row">
					<div class="sixteen columns"><img src="/wp-content/themes/kftea/images/headers/franchise-img.jpg" alt="Franchise - Steps, Cost and Qualification, Join" class="primary-image" /></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-body">
	<div class="container" id="process">
		<a tabindex="-1" id="main-content" name="main-content"></a>
		
		<div class="row steps-row">
			<div class="sixteen columns">
				<header class="entry-header">
					<h1 class="entry-title">10 easy steps to franchising</h1>
				</header>
				<div class="entry-content">
					<p class="center"><strong>Follow these quick and easy steps and be on your way to becoming a franchisee of Kung Fu Tea.</strong></p>
				</div>
				<br />
				<div class="row1 step-row">
					<div class="step step1 first">
						<div class="step-info">
							<p>Fill out the inquiry form</p>
							<span class="info-arrow"></span>
						</div>
						<div class="step-number">1</div>
					</div>
					<div class="step step2">
						<div class="step-info">
							<p>A sales representative will contact you via email or phone</p>
							<span class="info-arrow"></span>
						</div>
						<div class="step-number">2</div>
					</div>
					<div class="step step3 last">
						<div class="step-info">
							<p>Schedule an interview and look over all the details</p>
							<span class="info-arrow"></span>
						</div>
						<div class="step-number">3</div>
					</div>
					<div class="clearFix">&nbsp;</div>
				</div>
				<div class="row2 step-row">
					<div class="step step4 first">
						<div class="step-info">
							<p>Sign letter of intent with a $5,000 Good Faith Deposit (Deducted from the total cost)</p>
							<span class="info-arrow"></span>
						</div>
						<div class="step-number">4</div>
					</div>
					<div class="step step5">
						<div class="step-info">
							<p>Look for best possible store location (Professional suggestions on store location and final approval is chosen by KFT management)</p>
							<span class="info-arrow"></span>
						</div>
						<div class="step-number">5</div>
					</div>
					<div class="step step6 last">
						<div class="step-info">
							<p>Sign the formal agreement and the chosen store lease</p>
							<span class="info-arrow"></span>
						</div>
						<div class="step-number">6</div>
					</div>
					<div class="clearFix">&nbsp;</div>
				</div>
				<div class="row3 step-row">
					<div class="step step7 first">
						<div class="step-info">
							<p>Start the renovation (We can provide advisement for layout and interior design. Final design is approved by KFT management)</p>
							<span class="info-arrow"></span>
						</div>
						<div class="step-number">7</div>
					</div>
					<div class="step step8">
						<div class="step-info">
							<p>Training classes begin (Training is provided for up to 2 people. Training usually lasts 2 weeks)</p>
							<span class="info-arrow"></span>
						</div>
						<div class="step-number">8</div>
					</div>
					<div class="step step9 last">
						<div class="step-info">
							<p>Store Opens!<br /> (You will have senior staff assistance with the store opening and operations for the first 4 weeks to ensure smoother openings)</p>
							<span class="info-arrow"></span>
						</div>
						<div class="step-number">9</div>
					</div>
					<div class="clearFix">&nbsp;</div>
				</div>
				<div class="row4 step-row">
					<div class="step step10">
						<div class="step-info">
							<p>Hi-5s!</p>
							<span class="info-arrow"></span>
						</div>
						<div class="step-number">10</div>
					</div>
					<div class="clearFix">&nbsp;</div>
				</div>
			</div>
		</div>
		<br /><br /><br />
	</div>
</div>
<div class="page-body">
	<div class="container qualifications-row" id="qualifications">
		
		<img src="/wp-content/themes/kftea/images/qualifications-tab.jpg" alt="Qualifications" class="promotions-tab" />
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
		<?php endwhile; ?>
		<br />
	</div>
</div>
<div class="page-body">
	<div class="container" id="join">
		<img src="/wp-content/themes/kftea/images/join-tab.jpg" alt="Join KFTea" class="promotions-tab" />
		<div class="row join-row">
			<div class="ten columns">
				<?php echo do_shortcode('[gravityform id="1" name="Join KFTea" title="false" ajax="true"]'); ?>
			</div>
			<div class="six columns">
				<?php echo do_shortcode("[content_block id=105]"); ?>
			</div>
		</div>
		
		<?php require 'store-locator.php'; ?>
	</div>
</div>
<?php get_footer(); ?>