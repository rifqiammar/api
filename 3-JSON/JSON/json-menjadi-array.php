<?php

$data = file_get_contents('coba.json');
$kopi = json_decode($data, true);

var_dump($kopi);