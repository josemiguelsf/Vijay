<?php
/**
 * main configuration file
 * 
 * @author		Jose Sanchez
 * @copyright Copyright (c) 2013 Schaumbur, IL
 * @description
 * This is the main Web application configuration
 * CWebApplication properties can be configured here.
 *
 **/ 

// Load db config file
$db = include_once('db.php');
$main = array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'VijayHR',

	// preloading components
	'preload'=>array('log', 'lc'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.models.forms.*',
		'application.components.*',
	),
    
    // Begin request event
    /*'onBeginRequest'=>array(
    	'Request','begin'
   	),
	*/
	// Lenguaje de los mensajes
	'sourceLanguage'=>'en_US',
	
	'localeDataPath'=>'protected/i18n/data/',

	// Codificacion default
	'charset'=>'iso-8859-1',
   	
   	// alias shortcodes
   	'aliases' => array(
        'widgets' => 'application.widgets',
	),

	// application components
	
	'components'=>array(
		'widgetFactory' => array(
            'widgets' => array(
                'CJuiDialog' => array(
                    'themeUrl' => 'css',
                    'theme' => 'redmond',
                ),
		'CJuiAutoComplete' => array(
                    'themeUrl' => 'css',
                    'theme' => 'redmond',
                ),
                'CJuiDatePicker' => array(
                    'themeUrl' => 'css',
                    'theme' => 'redmond',
                ),
				'CJuiTabs' => array(
                    'themeUrl' => 'css',
                    'theme' => 'redmond',
                ),
            ),
        ),
		'bootstrap'=>array(
				'class'=>'bootstrap.components.Bootstrap',
		),
	$db = array(
	'components' => array(
		'db' =>  array(
			'class' => 'CDbConnection',
            'connectionString' => 'mysql:host=localhost;dbname=vj',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
            'charset' => 'UTF8',
            'tablePrefix' => '',
            'emulatePrepare' => true,
            'enableProfiling' => true,
            'schemaCacheID' => 'cache',
            'schemaCachingDuration' => 3600
		),
			
	),
),
		'messages'=>array(
			'class'=>'CPhpMessageSource',
		),
		'user'=>array(
			'allowAutoLogin'=>true,
			//'loginUrl'=>array('site/login'),
			'class' => 'ValidateUser',
				'loginUrl'=>array('Site/login'),
				
		),
		'lc'=>array(
			'class' => 'application.components.LocaleManager',
		),
		'request' => array(
			'class' => 'CHttpRequest',
            'enableCookieValidation' => true,
            'enableCsrfValidation' => true,
        ),
		'theme'=>'bootstrap', // requires you to copy the theme under your themes directory
		'modules'=>array(
	      //  'install',
		//'update',
	//	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		//'gii'=>array(
		//	'class'=>'system.gii.GiiModule',
		//	'password'=>'admin',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			//'ipFilters'=>array('127.0.0.1','::1'),
		//),
		//),
	),
	
		'urlManager'=>array(
			'urlFormat'=>'get',
			'showScriptName'=>false,
			'caseSensitive'=>false,
			'rules'=>array(
				'index'=>array('site/index'),
				'contact'=>array('site/contact'),
				'login'=>array('site/login'),
					
					
						
			)
        ),
			
			
		'authManager'=>array(
			'class'=>'CDbAuthManager',
			'connectionID'=>'db',
			'itemTable'=>'stb_authItems',
			'assignmentTable'=>'stb_authAssignments',
			'itemChildTable'=>'stb_authItemChilds',
		),
		'errorHandler'=>array(
            'errorAction'=>'site/error',
        ),
	),
	
	
			
			
		// application parameters
	'params'=>array(
		// App parameters
		'appVersion'=>'0.4.0',
		'lastAppVersion'=>'0.3.5',
		// Email configuration
		'adminEmail'=>'josemiguelsf@gmail.com',
		'multiplesAccounts'=>false,
		'mailSenderEmail'=>'noreply@emailaddrss.com',
		'mailSenderName'=>'HRVijay',
		'mailHost'=>'smtp.gmail.com:465',
		'mailSMTPAuth'=>true,
		'mailUsername'=>'josemiguelsf@gmail.com',
		'mailPassword'=>'jm541999',
		'mailSendMultiples'=>5,
		// Internationalization
		'timezone' => 'America/Mexico_City',
		'database_format'=>array(
			'date'=>'yyyy-MM-dd',
			'time'=>'HH:mm:ss',
			'dateTimeFormat'=>'{1} {0}',
		),
		'languages'=>array(
			'es_mx',
			'en_us',
			'pt_br',
			'es_es',
			'de_de'
		),
	),
);

return CMap::mergeArray($main, $db);
