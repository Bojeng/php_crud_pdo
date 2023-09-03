<?php

$dbaseHost = 'localhost';
$duserUser = 'pdocrud';
$dUsername = 'root';
$dPassword = '';

try
{
    // // http://php.net/manual/en/pdo.connections.php
    $dConnection = new PDO("mysql:host={$dbaseHost}; dbname={$duserUser}",$dUsername, $dPassword);
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
