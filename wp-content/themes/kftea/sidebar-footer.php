<?php
/**
 * The Footer widget areas.
 *
 * @package WordPress
 * @subpackage Kung_Fu_Tea
 */

// count the active widgets to determine column sizes
$footerwidgets = is_active_sidebar('first-footer-widget-area') + is_active_sidebar('second-footer-widget-area') + is_active_sidebar('third-footer-widget-area') + is_active_sidebar('fourth-footer-widget-area');

$footergrid = "one-third columns"; // default, split into thirds

if ($footerwidgets == "1") { // if only one, use full 12 columns
	$footergrid = "sixteen columns";
} elseif ($footerwidgets == "2") { // if two, split in half
	$footergrid = "eight columns";
} elseif ($footerwidgets == "3") { // if three, split into thirds
	$footergrid = "one-third columns";
} elseif ($footerwidgets == "4") { // if four, split into fourths
	$footergrid = "four columns";
}
?>
<?php if ($footerwidgets) : ?>
	<?php if (is_active_sidebar('first-footer-widget-area')) : ?>
		<div class="<?php echo $footergrid; ?>">
			<?php dynamic_sidebar('first-footer-widget-area'); ?>
		</div>
	<?php endif;?>
	
	<?php if (is_active_sidebar('second-footer-widget-area')) : ?>
		<div class="<?php echo $footergrid; ?>">
			<?php dynamic_sidebar('second-footer-widget-area'); ?>
		</div>
	<?php endif;?>
	
	<?php if (is_active_sidebar('third-footer-widget-area')) : ?>
		<div class="<?php echo $footergrid; ?>">
			<?php dynamic_sidebar('third-footer-widget-area'); ?>
		</div>
	<?php endif;?>

	<?php if (is_active_sidebar('fourth-footer-widget-area')) : ?>
		<div class="<?php echo $footergrid; ?>">
			<?php dynamic_sidebar('fourth-footer-widget-area'); ?>
		</div>
	<?php endif;?>
	<div class="clear"></div>
<?php endif;?>