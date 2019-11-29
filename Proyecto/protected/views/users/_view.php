<?php
/* @var $this UsersController */
/* @var $data Users */
?>
<div class=" media">
	<div class=" media-body">
		<h1 class=" media-body">
		<?php echo CHtml::encode($data->getAttributeLabel('id')." : "); ?> 
		<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		<?php echo CHtml::encode($data->getAttributeLabel('username')." : "); ?><?php echo CHtml::encode($data->username); ?>
			<small><?php echo CHtml::encode($data->email); ?></small>
		</h1>
		<p> <?php echo CHtml::encode($data->password);?> Lorem ipsum dolor sit amet consectetur adipisicing
		 elit. Modi, alias provident rerum eos, ab tempora corrupti illo consectetur eveniet dolorem pariatur.
		  Ab, esse. Reprehenderit ipsa facilis, repellendus labore sed cupiditate.</p>	
	</div>
</div>