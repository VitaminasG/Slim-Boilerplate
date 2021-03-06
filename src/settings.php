<?php

// Slim Settings

return[
	'settings' => [
		'displayErrorDetails' => true, // Set to false in production
		'addContentLengthHeader' => false, // Allow the web server to send the content-length header
		'db' => [
			'driver' => 'mysql',
			'host' => '127.0.0.1',
			'database' => 'slim',
			'username' => 'root',
			'password' => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		],

		'view' => [
			'template_path' => 'templates',
			'twig' => [
				'cache' => 'cache/twig',
				'debug' => true,
				'auto_reload' => true,
			]
		],

		'logger' => [
			'name' => 'default_logger',
			'path' => 'log/app.log'
		]

	]
];