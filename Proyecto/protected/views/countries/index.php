<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Countries',
);

$this->menu=array(
	array('label'=>'Create pais', 'url'=>array('create')),
);
?>
<div class="row">
	<div class="col-md-10">
		<div class="panel panel-success">
			<div class="panel-heading">Countries
				<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span>
			</div>         
	      <div class="panel-body">
            <?php
             echo CHtml::link("create",array("create")); ?>
            <span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span>
            <?php foreach($countries as $data): ?>
            <h2>
               <?php echo $data-> nombre; ?> 
               <a class="" href="<?php echo $this->createUrl("Enabled",array("id"=>$data->id));?>">
               <span class="btn btn-sm btn-<?php echo $data-> status ==1?"info":"warning"; ?>">
                  <?php echo $data-> status ==1?"Enabled":"disabled"; ?>
               </span> 
               </a>
            </h2>
            <label class="btn btn-sm btn-info"><?php echo $data->id ?> </label>
               <?php echo CHtml::link("View",array("View","id"=>$data->id,"nombre"=>$data->nombre)); ?> |
               <?php echo CHtml::link("Update",array("Update","id"=>$data->id,"nombre"=>$data->nombre));?> |
               <?php echo CHtml::link("Delete",array("Delete","id"=>$data->id),array("confirm"=>"Are you sure you want to delete")); ?>             
            </label>
            <?php endforeach; ?>
         </div>
		</div>
   </div>
</div>
