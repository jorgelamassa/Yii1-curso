<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs=array(
	'Countries'=>array('index'),
	'Create',
);

?>
<div class="row">
	<div class="col-md-10">
		<div class="panel panel-success">
			<div class="panel-heading">Create Countries
				<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span>
			</div>         
	        <div class="panel-body">
                <div class="form">
            <!-- este Widget lo trae le framework yii y lo vamoa tener en la variable $form que es paa crear formularios,
            y acedo a  $this 
            es el controlador lo q enviamoas a la vista fue el modelo Countries -->
            <?php $form=$this->beginWidget("CActiveForm"); ?>    
            <div class="form-group">
                <!-- con la variable $form podemos crear los label campos y error-->
                <?php echo $form->labelEx($model,'nombre',array("class"=>"col-md-3 control-label")); ?>
                <?php echo $form->textField($model,'nombre',array("class"=>"form-control")); ?>
                <?php echo $form->error($model,'nombre',array("class"=>"alert bg-danger","role"=>"alert")); ?>
            </div>
            <div class="form-group">
                <?php echo $form->labelEx($model,'status',array("class"=>"col-md-3 control-label")); ?>
                <?php echo $form->textField($model,'status',array("class"=>"form-control")); ?>
                <?php echo $form->error($model,'status',array("class"=>"alert bg-danger","role"=>"alert")); ?>
            </div>
            <div class="form-group">
                <!--de esta forma creamo un boton -->  
                <?php echo CHtml::submitButton("Create",array("class"=>"btn btn btn-primary")); ?>
            </div>
             <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>
</div>