<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs=array(
	'Countries'=>array('index'),
	'View Countries',
);

?>
<div class="row">
	<div class="col-md-10">
		<div class="panel panel-success">
			<div class="panel-heading">View Countries <?php echo $model->nombre ?>
				<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span>
			</div>         
	        <div class="panel-body">
            
            <table class="table">
                <tr>
                    <th><?php echo $model->id; ?></th>
                    <th><?php echo $model->nombre; ?></th>
                    <th>    
                    <span class="btn btn-sm btn-<?php echo $model-> status ==1?"info":"warning"; ?>">
                    <?php echo $model-> status ==1?"Enabled":"disabled"; ?>
                    </span> 
                    </th>
                </tr>
            </table>

            </div>
        </div>
    </div>
</div>

