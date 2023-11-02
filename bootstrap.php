<?php

require_once __DIR__ . '/src/helpers.php';
require_once __DIR__ . '/libraries/Psr4AutoloaderClass.php';

$loader = new Psr4AutoloaderClass;
$loader->register();

$loader->addNamespace('CT275\Labs', __DIR__ . '/src');

try {
	$PDO = (new CT275\Labs\PDOFactory())->create([
		'dbhost' => 'localhost',
		'dbname' => 'ct275_lab4',
		'dbuser' => 'root',
		'dbpass' => '632521410Kh@ng'
	]);
}
catch (Exception $ex) {
	echo 'Không thể kết nối đến MySQL,
		kiểm tra lại uername/password đến MySQL.<br>';
	exit("<pre>${ex}</pre>");
}
?>