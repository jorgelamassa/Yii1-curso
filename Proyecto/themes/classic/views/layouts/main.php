<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $this->pageTitle; ?></title>
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" rel="stylesheet">
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span><?php echo CHtml::encode(Yii::app()->name); ?></span></a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle count-info"href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout">
						<em class="fa fa-power-off "></em>
						</a>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/classic/img/descarga.png" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo CHtml::encode(Yii::app()->user->name); ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>

		<ul class="nav menu">	
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'usuarios', 'url'=>array('/users/index')),
				array('label'=>'Hola', 'url'=>array('/hola/index')),
				array('label'=>'Countries', 'url'=>array('/countries/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
		<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<?php if(isset($this->breadcrumbs) and $this->breadcrumbs !== array() ):?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,)); ?><!-- breadcrumbs -->
				<?php endif?>
			</ol>
	</div><!--/.row-->
	<?php if (($msjg=yii::app()->user->getFlashes()) !== null)
		{
		foreach ($msjg as $type => $message) {
			# code...
			?>	<div class="col-md-10">
					<div class="panel panel-<?php echo  $type;?>">
						<div class="panel-heading"><?php echo  $type;?>
							<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span>
						</div>
						<div class="panel-body">
							<p><?php echo ucfirst($message) ;?>.</p>
						</div>
					</div>
				</div>		
		<?php
		}
	}?>	

	<?php echo $content;?>

		
	<div class="col-sm-12">
		<p class="back-link">Copyright &copy; <?php echo date('Y'); ?> Jorge La Massa.<br/>
		All Rights Reserved.</p><br/>
	</div>
	</div><!--/.row-->
	
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/chart.min.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/chart-data.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/easypiechart.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/easypiechart-data.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>