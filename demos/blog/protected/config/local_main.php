<?php
return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'db'=>array(
				'connectionString' => 'mysql:host=localhost;dbname=yiiblog',
				'emulatePrepare' => true,
				'username' => 'root',
				'password' => '123456',
				'charset' => 'utf8',
				'tablePrefix' => 'tbl_',
			),
		),
	)
);