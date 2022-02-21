<?php

$DB_HOST = '127.0.0.1';
$DB_USER = 'belgachi_taitai';
$DB_PASS = 't)iK).u@*+-i';
$DB_NAME = 'belgachi_taitai';

try {
	$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}", $DB_USER, $DB_PASS);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo $e->getMessage();
}
