<?php

$dbhost="sql200.epizy.com";
$dbuser="epiz_32603447";
$dbpassword="5FZawcMm3PVr";
$dbname="epiz_32603447_passionmaster";

if(!$con= mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{
	die("failed to connect!");
}