<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="row">
	<div class="col-md-10">
		<div class="panel panel-success">
			<div class="panel-heading">Login
				<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span>
			</div>
		<div class="panel-body">
			<div class="form">
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'login-form',
					'enableClientValidation'=>true,
					'clientOptions'=>array(
						'validateOnSubmit'=>true,
					),
				)); ?>

				<div class="form-group">
					<?php echo $form->labelEx($model,'username',array("class"=>"col-md-3 control-label")); ?>
					<?php echo $form->textField($model,'username',array("class"=>"form-control")); ?>
					<?php echo $form->error($model,'username',array("class"=>"alert bg-danger")); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'password',array("class"=>"col-md-3 control-label")); ?>
					<?php echo $form->passwordField($model,'password',array("class"=>"form-control")); ?>
					<?php echo $form->error($model,'password',array("class"=>"alert bg-danger")); ?>
				</div>

				<div class="checkbox">
					<label>
					<?php echo $form->checkBox($model,'rememberMe',array("class"=>"")); ?>
					<?php echo $form->label($model,'rememberMe',array("class"=>"")); ?>
					<?php echo $form->error($model,'rememberMe',array("class"=>"alert bg-danger")); ?>
					</label>
				</div>

					<div class="form-group">
						<div class="col-md-12 widget-right">
							<?php echo CHtml::submitButton('Login',array("class"=>"btn btn btn-primary")); ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<?php $this->endWidget(); ?>
</div><!-- form -->
