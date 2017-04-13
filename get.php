<?php
header("Content-type: application/json");
	$test_array = array (
	'ime' => 'Igor',
	'prezime' => 'Ivacic',
	'brojTelefona' => '069 355 11 22',
	'email' => 'igorivacic@gmail.com',
);
echo json_encode($test_array);
?>