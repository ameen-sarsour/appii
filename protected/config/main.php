<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'مَوقِعي',
	'sourceLanguage' => 'ar_jo',
        'language' => 'ar_jo',
	//'theme'=>'bootstrap',

	// preloading 'log' component
	'preload'=>array('log'  ),//, 'bootstrap' ),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.lib.*',
		'ext.imperavi-redactor-widget.*',
		
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'generatorPaths'=>array(
				'bootstrap.gii',
         	),
			'class'=>'system.gii.GiiModule',
			'password'=>'gii',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	// application components
	'components'=>array(
    'elastic' => array(
      'class' => 'Elastic',
      'index' => 'appii',
      'host' => '127.0.0.1',
    ),

		'user'=>array(
			'class' => 'WebUser',

			// enable cookie-based authentication
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
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/appii.db',
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
		'adminEmail'=>'amas89@gmail.com',
		'google'=>array(
			'client_id'=>'459370235194.apps.googleusercontent.com',
			'client_secret'=>'ToG6js5zLZPdMyEA2xahpRv8' , 
			'redirect_url'=>'http://appii.org/site/login?id=google',
			'key'=>'AIzaSyBz41c0ynlDj9wlxUPswyGs43YQLCLMSrQ',
			'scope'=>'https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile'
		),
		'facebook'=>array(
			'client_id'=>'417810991650867',
			'client_secret'=>'a5c2d4310e86f5caf29fcd3caf6bfb17' , 
			'redirect_url'=>'http://appii.org/site/login?id=facebook',
			//'key'=>'',
			'scope'=>'email,user_about_me'
		),
	),
);
