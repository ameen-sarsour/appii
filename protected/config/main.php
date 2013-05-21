<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'موقعي',
	'sourceLanguage' => 'ar_jo',
        'language' => 'ar_jo',
	//'theme'=>'bootstrap',

	// preloading 'log' component
	'preload'=>array('log'  ),//, 'bootstrap' ),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'ext.imperavi-redactor-widget.*',
		
	),

	'modules'=>array(
		'admin',
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'generatorPaths'=>array(
				'bootstrap.gii',
				),
			),
		),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'redis'=>array(
			'class'=> 'ext.redis.ARedisConnection',
			'hostname'=>'127.0.0.1',
			'port'=>6379,
			),
		'cache'=>array(
			'class'=>'ext.redis.ARedisCache',
			'hashKey'=>false,
			),
		'session' => array(
			'class' => 'CCacheHttpSession',
			'timeout' => 604800, // 7 days
			'cookieParams' => array(
				'httponly' => true,
				'lifetime' => 604800,
			),
		),
		'messages'=>array(
			'forceTranslation' => true,
			),

		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'bootstrap' => array(
		    'class' => 'bootstrap.components.Bootstrap',
		    //'class' => 'ext.YiiBoosterRtl.components.Bootstrap',
		),

		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=fordelete',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
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
