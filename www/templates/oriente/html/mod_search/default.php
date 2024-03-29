<?php
/**
* @package   oriente Template
* @file      default.php
* @version   1.5.0 May 2010
* @author    Oriente http://www.oriente.com.br
* @copyright Copyright (C) 2007 - 2010 Oriente
*/
 
// no direct access
defined('_JEXEC') or die('Restricted access');

$button				= $params->get('button', '');
$imagebutton		= $params->get('imagebutton', '');
$button_pos			= $params->get('button_pos', 'left');
$button_text		= $params->get('button_text', JText::_('Search'));
$width				= intval($params->get('width', 20));
$text				= $params->get('text', JText::_('search...'));
$set_Itemid			= intval($params->get('set_itemid', 0));
$moduleclass_sfx	= $params->get('moduleclass_sfx', '');

?>

<form action="index.php" method="post" class="default-search">
	<div class="searchbox">
		<button class="search-magnifier" type="submit" value="Search"></button>
		<input class="searchfield" type="text" onfocus="if(this.value=='<?php echo $text; ?>') this.value='';" onblur="if(this.value=='') this.value='<?php echo $text; ?>';" value="<?php echo $text; ?>" size="<?php echo $width; ?>" alt="<?php echo $button_text; ?>" maxlength="20" name="searchword" />
	</div>
	<input type="hidden" name="task"   value="search" />
	<input type="hidden" name="option" value="com_search" />
</form>