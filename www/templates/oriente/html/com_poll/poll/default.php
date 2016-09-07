<?php
/**
* @package   oriente Template
* @file      default.php
* @version   1.5.0 May 2010
* @author    Oriente http://www.oriente.com.br
* @copyright 
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
?>

<?php JHTML::_('stylesheet', 'poll_bars.css', 'components/com_poll/assets/'); ?>

<div class="joomla <?php echo $this->params->get('pageclass_sfx')?>">
	
	<div class="poll">

		<?php if ($this->params->get('show_page_title', 1)) : ?>
		<h1 class="pagetitle">
			<?php echo $this->escape($this->params->get('page_title')); ?>
		</h1>
		<?php endif; ?>

		<form action="index.php" method="post" name="poll" id="poll">
		
		<div>
			<label class="label-left" for="id">
				<?php echo JText::_('Select Poll'); ?>
			</label>
			<?php echo $this->lists['polls']; ?>
		</div>
		
		<div>
			<?php echo $this->loadTemplate('graph'); ?>
		</div>
		
		</form>
		
	</div>
</div>