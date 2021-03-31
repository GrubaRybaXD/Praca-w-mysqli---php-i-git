<?php
$host = 'localhost';
$port = '3306';
$user = 'root';
$passwd = '';
$db = 'imie';
 $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';port=' . $port . ";charset=utf8", $user, $passwd );

?>