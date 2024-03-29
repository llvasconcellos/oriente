<?php
/**
* @package   oriente Template
* @file      3-3-3.php
* @version   1.5.0 May 2010
* @author    Oriente http://www.oriente.com.br
* @copyright Copyright (C) 2007 - 2010 Oriente
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// example: full transparent module with rounded corners

?>
<div class="module <?php echo $style; ?> <?php echo $color; ?> <?php echo $yootools; ?> <?php echo $first; ?> <?php echo $last; ?>">

	<?php echo $badge; ?>
	
	<div class="box-t1">
		<div class="box-t2">
			<div class="box-t3"></div>
		</div>
	</div>
	
	<div class="box-1">
		<div class="box-2">
			<div class="box-3 deepest">
			
				<?php if ($showtitle) : ?>
				<h3 class="header"><span class="header-2"><span class="header-3"><?php echo $title; ?></span></span></h3>
				<?php endif; ?>
				
				<?php echo $content; ?>
				
			</div>
		</div>
	</div>

	<div class="box-b1">
		<div class="box-b2">
			<div class="box-b3"></div>
		</div>
	</div>
		
</div>