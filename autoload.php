<?php

date_default_timezone_set('Europe/London');

if (file_exists('sclr.php')) {
	require 'sclr.php';
}

spl_autoload_register(function($class) {
	$base = '/src/';
	$class = str_replace('Sclr\\', '', $class);
	$file = __DIR__ . $base . strtr($class, '\\', '/') . '.php';
	if (file_exists($file)) {
		require $file;
		return true;
	}
});