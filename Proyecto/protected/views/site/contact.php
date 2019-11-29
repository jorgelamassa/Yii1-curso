<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>


<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>



<div class="row">
	<div class="col-md-10">
		<div class="panel panel-success">
			<div class="panel-heading">Contact Us
				<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span>
			</div>
			<div class="panel-body">
			<p>
			Si tiene consultas comerciales u otras preguntas,
			complete el siguiente formulario para contactarnos.
			Gracias.
			Los campos con * son obligatorios.
			</p>
				<div class="form">

				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'contact-form',
					'enableClientValidation'=>true,
					'clientOptions'=>array(
						'validateOnSubmit'=>true,
					),
				)); ?>

				<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

				<!-- <?php echo $form->errorSummary($model); ?> -->

				<div class="form-group">
					<?php echo $form->labelEx($model,'name',array("class"=>"col-md-3 control-label")); ?>
					<?php echo $form->textField($model,'name',array("class"=>"form-control")); ?>
					<?php echo $form->error($model,'name',array("class"=>"alert bg-danger")); ?>

				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'email',array("class"=>"col-md-3 control-label")); ?>
					<?php echo $form->textField($model,'email',array("class"=>"form-control")); ?>
					<?php echo $form->error($model,'email',array("class"=>"alert bg-danger")); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'subject',array("class"=>"col-md-3 control-label")); ?>
					<?php echo $form->textField($model,'subject',array("class"=>"form-control",'size'=>60,'maxlength'=>128)); ?>
					<?php echo $form->error($model,'subject',array("class"=>"alert bg-danger")); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'body',array("class"=>"col-md-3 control-label")); ?>
					<?php echo $form->textArea($model,'body',array("class"=>"form-control",'rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'body',array("class"=>"alert bg-danger")); ?>
				</div>

				<?php if(CCaptcha::checkRequirements()): ?>
				<div class="form-group">
					<?php echo $form->labelEx($model,'verifyCode',array("class"=>"col-md-3 control-label")); ?>
					<div>
					<?php $this->widget('CCaptcha'); ?>
					<?php echo $form->textField($model,'verifyCode',array("class"=>"form-control")); ?>
					</div>
					<div class="hint">
						Ingrese las letras como se muestran en la imagen de arriba.
						Las letras no distinguen entre mayúsculas y minúsculas.
					</div>
					<?php echo $form->error($model,'verifyCode',array("class"=>"alert bg-danger")); ?>
				</div>
				<?php endif; ?>

				<div class="form-group">
					<div class="col-md-12 widget-right">
						<?php echo CHtml::submitButton('ENVIAR',array("class"=>"btn btn btn-primary")); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>