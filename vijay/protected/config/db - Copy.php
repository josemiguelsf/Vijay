<?php

$db = array(
	'components' => array(
		'db' =>  array(
			'class' => 'CDbConnection',
            'connectionString' => 'mysql:host=fdb6.awardspace.net;dbname=1474299_vj',
			'emulatePrepare' => true,
			'username' => '1474299_vj',
			'password' => 'jm5419',
            'charset' => 'latin1',
            'tablePrefix' => '1474299_vj',
            'emulatePrepare' => true,
            'enableProfiling' => true,
            'schemaCacheID' => 'cache',
            'schemaCachingDuration' => 3600
		),
	),
);

return $db;
