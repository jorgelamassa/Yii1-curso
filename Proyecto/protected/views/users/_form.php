<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	
	<?php //echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'username',array("class"=>"col-md-3 control-label")); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128,"class"=>"form-control")); ?>
		<?php echo $form->error($model,'username',array("class"=>"alert bg-danger","role"=>"alert")); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'password',array("class"=>"col-md-3 control-label")); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128,"class"=>"form-control")); ?>
		<?php echo $form->error($model,'password',array("class"=>"alert bg-danger","role"=>"alert")); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email',array("class"=>"col-md-3 control-label")); ?>
		<?php echo $form->textField($model,'email',array("type"=>"email",'size'=>60,'maxlength'=>128,"class"=>"form-control")); ?>
		<?php echo $form->error($model,'email',array("class"=>"alert bg-danger","role"=>"alert")); ?>
	</div>

	<div class="form-group">
		<div class="col-md-12 widget-right">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class"=>"btn btn btn-primary")); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->