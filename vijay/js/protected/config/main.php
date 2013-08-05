<?php
/**
 * main configuration file
 * 
 * @author		Jackfiallos
 * @link		http://qbit.com.mx/labs/celestic
 * @copyright Copyright (c) 2009-2011 Qbit Mexhico
 * @license http://qbit.com.mx/labs/celestic/license/
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
    'onBeginRequest'=>array(
    	'Request','begin'
   	),
	
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
	$db = array(
	'components' => array(
		'db' =>  array(
			'class' => 'CDbConnection',
            'connectionString' => 'mysql:host=fdb6.awardspace.net;dbname=1474299_vj',
			'emulatePrepare' => true,
			'username' => '1474299_vj',
			'password' => 'jm5419',
            'charset' => 'UTF8',
            'tablePrefix' => '1474299_vj',
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
				'loginUrl'=>array('Budgets/test'),
				
		),
		'lc'=>array(
			'class' => 'application.components.LocaleManager',
		),
		'request' => array(
			'class' => 'CHttpRequest',
            'enableCookieValidation' => true,
            'enableCsrfValidation' => true,
        ),
		'urlManager'=>array(
			'urlFormat'=>'get',
			'showScriptName'=>false,
			'caseSensitive'=>false,
			'rules'=>array(
				//'index'=>array('site/index'),
					'index'=>array('site/index'),
					
					'contact'=>array('site/contact'),
				//'login'=>array('site/login'),
					'login'=>array('site/login'),
					
			)
        ),
		'authManager'=>array(
			'class'=>'CDbAuthManager',
			'connectionID'=>'db',
			'itemTable'=>'stb_authitems',
			'assignmentTable'=>'stb_authassignments',
			'itemChildTable'=>'stb_authitemchilds',
		),
		'errorHandler'=>array(
            'errorAction'=>'site/error',
        ),
	),
	
	'modules'=>array(
	        'install',
		'update'
	),
	
	// application parameters
	'params'=>array(
		// App parameters
		'appVersion'=>'0.4.0',
		'lastAppVersion'=>'0.3.5',
		// Email configuration
		'adminEmail'=>'admin@emailaddrss.com',
		'multiplesAccounts'=>false,
		'mailSenderEmail'=>'noreply@emailaddrss.com',
		'mailSenderName'=>'Celestic',
		'mailHost'=>'smtp.emailaddrss.com',
		'mailSMTPAuth'=>true,
		'mailUsername'=>'user',
		'mailPassword'=>'password',
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