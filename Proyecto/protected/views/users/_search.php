<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'id',array("class"=>"col-md-3 control-label")); ?>
		<?php echo $form->textField($model,'id',array("class"=>"form-control")); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'username',array("class"=>"col-md-3 control-label")); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128,"class"=>"form-control")); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'email',array("class"=>"col-md-3 control-label")); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128,"class"=>"form-control")); ?>
	</div>


	<div class="form-group">
		<div class="col-md-12 widget-right">
		<?php echo CHtml::submitButton('Search',array("class"=>"btn btn btn-primary")); ?>
		</div>
	</div>


<?php $this->endWidget(); ?>

</div><!-- search-form -->