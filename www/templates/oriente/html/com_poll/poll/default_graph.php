<?php
/**
* @package   oriente Template
* @file      default_graph.php
* @version   1.5.0 May 2010
* @author    Oriente http://www.oriente.com.br
* @copyright Copyright (C) 2007 - 2010 Oriente
*/

// no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<fieldset>
	<legend><?php echo $this->poll->title; ?></legend>

	<table cellspacing="0" cellpadding="0" border="0" class="joomlatable">
	<?php foreach($this->votes as $vote) : ?>
		<tr>
			<td width="100%" colspan="3">
				<?php echo $vote->text; ?>
			</td>
		</tr>
		<tr>
			<td align="right" width="25">
				<strong><?php echo $vote->hits; ?></strong>
			</td>
			<td width="30" >
				<?php echo $vote->percent; ?>%
			</td>
			<td width="300" >
				<div class="<?php echo $vote->class; ?>" style="height:<?php echo $vote->barheight; ?>px;width:<?php echo $vote->percent; ?>%"></div>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	
</fieldset>

<?php echo JText::_( 'Number of Voters' ); ?>: <?php if(isset($this->votes[0])) echo $this->votes[0]->voters; ?>
<br /><?php echo JText::_( 'First Vote' ); ?>: <?php echo $this->first_vote; ?>
<br /><?php echo JText::_( 'Last Vote' ); ?>: <?php echo $this->last_vote; ?>