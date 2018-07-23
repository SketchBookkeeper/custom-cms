<?php

namespace App\Core;

try {

	$pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');

} catch(PDOException $e) {

	die('Could not connect');

}

$statement = $pdo->prepare('select * from todos');

$statement->execute();

var_dump($statement->fetchAll(PDO::FETCH_OBJ));

// Fetch into a class
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'SomeClass');

var_dump($tasks);
