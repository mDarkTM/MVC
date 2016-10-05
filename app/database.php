<?php

use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule();

$capsule->addConnection([
	'driver' 	=> 'mysql',
	'host' 		=> 'db4free.net',
	'username' 	=> 'techmediamvc',
	'password' 	=> 'techmediamvc',
	'database' 	=> 'techmediamvc',
	'charset'  	=> 'utf8',
	'collation'	=> 'utf8_unicode_ci',
	'prefix'	=> ''
	]);
$capsule->bootEloquent();