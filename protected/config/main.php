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
		'application.components.twitter.*',
		
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

        'authManager'=>array(
            'class'=>'CPhpAuthManager',
            //'connectionID'=>'db',
        ),

/*
          'clientScript' => array(
              'class' => 'ext.EClientScript.EClientScript',
              'combineScriptFiles' => true, // By default this is set to false, set this to true if you'd like to combine the script files
              'combineCssFiles' => true, // By default this is set to false, set this to true if you'd like to combine the css files
              'optimizeCssFiles' => true,  // @since: 1.1
              'optimizeScriptFiles' => true,   // @since: 1.1
            ),
*/

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
			'keyPrefix'=>'appii:',
			),
		'session' => array(
			'class' => 'SelectiveCacheHttpSession',
			'timeout' => 604800, // 7 days
			'cookieParams' => array(
				//'cookieParams' => array('domain' => '.mydomain.com'), // to include all subdomains
				'httponly' => true,
				'lifetime' => 604800,
			),
		),
		'messages'=>array(
			'forceTranslation' => true,
			),

/*
    'authManager'=>array(
        'class'=>'CachingDbAuthManager',
        'connectionID'=>'db',
        'cacheID'=>'cache',
    ),
*/

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

		'dbBukhari'=>array(
		    'class'=>'CDbConnection',
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/1681.db',
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
                array('class'=>'CFileLogRoute', 'levels'=>'error, warning',),
                // uncomment the line below to show profiling on files
                //array( 'class' => 'CFileProfileLogRoute' , 'maxFileSize'=>102400),
                // uncomment the following to show log messages on web pages
                //array('class'=>'CWebLogRoute',),
                // uncomment the following to show profiling info on web pages
                //array( 'class' => 'CProfileLogRoute' ,),
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
			'key'=>'AIzaSyBz41c0ynlDj9wlxUPswyGs43YQLCLMSrQ',
			'scope'=>'https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile'
		),
		'facebook'=>array(
			'client_id'=>'417810991650867',
			'client_secret'=>'a5c2d4310e86f5caf29fcd3caf6bfb17' , 
			//'key'=>'',
			'scope'=>'email,user_about_me'
		),
		'twitter'=>array(
			'CONSUMER_KEY' => 'wRiylVHT6dBb2RGM97h5pg',
			'CONSUMER_SECRET'=> '29MVfKRj6BxgQrf3PBwLxXForf05IhOw0DRy3csI' ,
		),

	),
);
