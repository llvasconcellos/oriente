<?php
/**
* @package   oriente Template
* @file      _item.php
* @version   1.5.0 May 2010
* @author    Oriente http://www.oriente.com.br
* @copyright 
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
?>

<?php if ($params->get('item_title')) : ?>
<h4>
	<?php if ($params->get('link_titles') && $item->linkOn != '') : ?>
		<a href="<?php echo $item->linkOn;?>">
			<?php echo $item->title;?>
		</a>
	<?php else : ?>
		<?php echo $item->title; ?>
	<?php endif; ?>
</h4>
<?php endif; ?>

<?php if (!$params->get('intro_only')) :
	echo $item->afterDisplayTitle;
endif; ?>

<?php echo $item->beforeDisplayContent; ?>

<?php echo $item->text; ?>

<?php if (isset($item->linkOn) && $item->readmore && $params->get('readmore')) : ?>
  <a class="readmore" href="<?php echo $item->linkOn; ?>"><?php echo $item->linkText ?></a>
<?php endif; ?>
