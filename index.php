<?php
require_once 'includes.php';

$test_array=array('jacob','anna','ben');
$obj_for= new LoopFor($test_array);
$obj_map = new LoopMap($test_array);
$results_for=$obj_for->capitalize_names($array);
$results_map=$obj_map->capitalize_names($array);
assert($results_for==$results_map);
var_dump($results_for);
var_dump($results_map);


