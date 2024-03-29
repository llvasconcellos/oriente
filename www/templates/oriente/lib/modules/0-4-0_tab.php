<?php
/**
* @package   oriente Template
* @file      0-4-0_tab.php
* @version   1.5.0 May 2010
* @author    Oriente http://www.oriente.com.br
* @copyright Copyright (C) 2007 - 2010 Oriente
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// example: tab module

?>
<div class="module <?php echo $style; ?> <?php echo $color; ?> <?php echo $yootools; ?> <?php echo $first; ?> <?php echo $last; ?>">

	<?php echo $badge; ?>

	<div class="box-1">
		<div class="box-2">
			<div class="box-3">
				<div class="box-4 deepest">
				
					<?php if ($showtitle) : ?>
					<h3 class="header"><span class="header-2"><span class="header-3"><?php echo $title; ?></span></span></h3>
					<?php endif; ?>
					
					<div class="floatbox">
						<?php echo $content; ?>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
</div>