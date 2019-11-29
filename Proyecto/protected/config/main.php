<?php

/* 	descomenta lo siguiente para definir un alias de ruta 
	el "me" sera la variable global para la ruta de nuetros
	 modulo o clases externa que deseemos importar 
*/
Yii::setPathOfAlias('me',dirname(__FILE__)."/../../../JorgeLaMassa");
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Jorge La Massa. Yii',
	'theme'=>'classic',

	// preloading 'log' component
	//'preload'=>array('log','happy'),
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'me.test.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'cesi88++',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	// creamos un componente los componetes siempre reciben un parametro llamado class
	//los componetes siempre reciben un parametro llamado class indicamos don esta con ext. 
	//y se recomiendo ponerle un identificador ejemplo jlm
	'components'=>array(
		'happy'=>array(
			"class"=>"ext.Fhappy",
			"trato"=>1,
	),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'urlSuffix'=>'.asp',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		

		// database settings are configured in database.php
		'db'=>array(
			'connectionString'=>'mysql:host=localhost;dbname=proyecto_php_poo',
			'emulatePrepare' => true,
			'username'=>'bd_poo',
			'password'=>'bd_poo',
			'charset'=> 'utf8'
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>YII_DEBUG ? null : 'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),

);
