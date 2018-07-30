<?php

return [
  'fetch' => PDO::FETCH_CLASS,
  'default' => 'mongodb',
  'connections' => [
		'mongodb' => [
        'driver'   => 'mongodb',
        'host'     => 'localhost',
        'port'     => 27017,
        'username' => '',
        'password' => '',
        'database' => 'lrs_prod' // Default name (removing this makes Travis fail).
    ],
	],
	'migrations' => 'migrations',
];
