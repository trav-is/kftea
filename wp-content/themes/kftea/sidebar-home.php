<?php
/**
 * The Sidebar containing the Home Page widget area.
 *
 * @package WordPress
 * @subpackage Kung_Fu_Tea
 */

// count the active widgets to determine column sizes
$homewidgets = is_active_sidebar('first-home-widget-area') + is_active_sidebar('second-home-widget-area') + is_active_sidebar('third-home-widget-area') + is_active_sidebar('fourth-home-widget-area');

$homegrid = "one-third columns"; // default, split into thirds

if ($homewidgets == "1") { // if only one, use full 12 columns
	$homegrid = "sixteen columns";
} elseif ($homewidgets == "2") { // if two, split in half
	$homegrid = "eight columns";
} elseif ($homewidgets == "3") { // if three, split into thirds
	$homegrid = "one-third columns";
} elseif ($homewidgets == "4") { // if four, split into fourths
	$homegrid = "four columns";
}
?>

<?php if ($homewidgets) : ?>
	<?php if (is_active_sidebar('first-home-widget-area')) : ?>
		<div class="<?php echo $homegrid;?>">
			<div class="twitter-feed"><?php dynamic_sidebar('first-home-widget-area'); ?></div>
		</div>
	<?php endif;?>
	
	<?php if (is_active_sidebar('second-home-widget-area')) : ?>
		<div class="<?php echo $homegrid;?>">
			<?php dynamic_sidebar('second-home-widget-area'); ?>
		</div>
	<?php endif;?>
	
	<?php if (is_active_sidebar('third-home-widget-area')) : ?>
		<div class="<?php echo $homegrid;?>">
			<?php dynamic_sidebar('third-home-widget-area'); ?>
		</div>
	<?php endif;?>
	
	<?php if (is_active_sidebar('fourth-home-widget-area')) : ?>
		<div class="<?php echo $homegrid;?>">
			<?php dynamic_sidebar('fourth-home-widget-area'); ?>
		</div>
	<?php endif;?>
	<div class="clear"></div>
<?php endif;?>