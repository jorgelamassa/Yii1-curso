<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="row">
	<div class="col-md-10">
		<div class="panel panel-success">
			<div class="panel-heading">Users
				<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span>
			</div>
			<div class="panel-body">
			<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span>
			<?php 
					$this->widget('zii.widgets.CMenu', array(
						'items'=>$this->menu,
						'htmlOptions'=>array('class'=>'nav nav-pills'),
					));
			?>
			<?php echo $content; ?>
			</div>
		</div>
	</div>
</div>
<?php $this->endContent(); ?>