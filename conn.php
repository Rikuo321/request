<?php
session_start();

$databaseHost = 'localhost';
$databaseName = 'request';
$databaseUsername = 'root';
$databasePassword = '';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
