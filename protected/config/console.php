<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return CMap::mergeArray(
    array(
		'basePath' => dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
		'name' => 'Console Application',
	),
    require(dirname(__FILE__).'/local.php')
);