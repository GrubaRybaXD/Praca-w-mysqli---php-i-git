<?php
$host = 'localhost';
$port = '3306';
$user = 'root';
$passwd = '';
$db = 'imie';
 
try{
   $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';port=' . $port . ";charset=utf8", $user, $passwd );
    echo('połączono z bazą danych');
}catch(PDOException $e){
    echo('Problem z połączeniem');
}

?>