<?php
/**
* @package   oriente Template
* @file      default.php
* @version   1.5.0 May 2010
* @author    Oriente http://www.oriente.com.br
* @copyright Copyright (C) 2007 - 2010 Oriente
*/

// no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<div class="joomla <?php echo $this->params->get('pageclass_sfx')?>">
	<div class="weblinks">

		<?php if ($this->params->get('show_page_title', 1)) : ?>
		<h1 class="pagetitle">
			<?php echo $this->escape($this->params->get('page_title')); ?>
		</h1>
		<?php endif; ?>

		<?php if ( ($this->params->def('image', -1) != -1) || $this->params->def('show_comp_description', 1) ) : ?>
		<div class="description">
			<?php
				if ( isset($this->image) ) :  echo $this->image; endif;
				echo $this->params->get('comp_description');
			?>
		</div>
		<?php endif; ?>

		<ul>
			<?php foreach ( $this->categories as $category ) : ?>
			<li>
				<a href="<?php echo $category->link; ?>" class="category<?php echo $this->params->get( 'pageclass_sfx' ); ?>"><?php echo $this->escape($category->title);?></a>
				<span class="number">
					(<?php echo $category->numlinks;?>)
				</span>
			</li>
			<?php endforeach; ?>
		</ul>

	</div>
</div>