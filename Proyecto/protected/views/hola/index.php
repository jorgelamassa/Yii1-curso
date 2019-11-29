<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs=array(
	'hola'=>array('index'),
	
);

?>
<div class="row">
	<div class="col-md-10">
		<div class="panel panel-success">
			<div class="panel-heading"><?php echo "Estoy aprendiendo: ".$twitter; ?>
				<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span>
			</div>
	      <div class="panel-body">
            <span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span>
            <?php foreach($model as $data): ?>
            <h1><?php echo $data-> username; ?></h1> 
            <?php endforeach; ?>
         </div>
		</div>
   </div>
</div>
      