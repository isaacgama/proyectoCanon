<?php
// Using Medoo namespace
require_once 'Medoo.php';
use Medoo\Medoo;
// $server = (_SERVER['HTTP_HOST']) == "localhost") ? "smoothoperators.com.mx" : "smoothoperators.com.mx";
// Initialize en el segundo local host y el tercero va ir el dominip
$db = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'proyecto-desarrollo',
    'server' => 'smoothoperators.com.mx',
    'username' => 'remote',
    'password' => 'D7AC3D58A7318'
]); 
//print_r($db);
 ?>