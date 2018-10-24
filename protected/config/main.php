<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Organize Tedarik',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.queue.*',
		'application.mongo.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),

	),

	"language" => "tr",


	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
	
            'allowAutoLogin'=>true,

		),

		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'caseSensitive'=>false,
			'rules'=>array(

				/*
				'urun/<id:\d+>/<title:.*?>'=>'urun/view',
				*/
				
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				'urun/<id:.*?>'=>'urun/view',
			),
		),

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),


		'cache'=>array
        (
            'class'=>'CMemCache',
            
            'servers'=>array
            (
                array
                (
                    'host'=>'127.0.0.1',
                    'port'=>11211,
                    'weight'=>60,
                ),
                
            )
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
		'imageTypes'=>array(
			"image/jpeg","image/gif","image/png","image/jpg"
		),
		"mongodb"=>array(
			"username"=>"organizetedarik",
			"password"=>"fy23tz98",
			"db"=>"organizetedarik"
		),
		'cdn'=>'https://s3.eu-central-1.amazonaws.com/organizetedarik/',
		// this is used in contact page
		'amazon'=>require(dirname(__FILE__).'/amazon.php'),
		'listPerPage' => 6,
		"productsearchpagesize"=>60,
		
		
	),
);
