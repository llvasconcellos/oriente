<?php
/**
* @package   oriente Template
* @file      0-1-0_h-x.php
* @version   1.5.0 May 2010
* @author    Oriente http://www.oriente.com.br
* @copyright Copyright (C) 2007 - 2010 Oriente
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// example: simple angled module

?>
<div class="module <?php echo $style; ?> <?php echo $color; ?> <?php echo $yootools; ?> <?php echo $first; ?> <?php echo $last; ?>">

	<div class="header-1">
		<div class="header-2">
			<div class="header-3"></div>
		</div>
	</div>

	<?php if ($showtitle) : ?>
	<h3 class="header"><?php echo $title; ?></h3>
	<?php endif; ?>

	<?php echo $badge; ?>
		
	<div class="box-1 deepest <?php if ($showtitle) echo 'with-header'; ?>">
		<?php echo $content; ?>
	</div>
		
</div>