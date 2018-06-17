<?php

require 'Task.php';

$query = require 'bootstrap.php';

$tasks = $query->SelectAll('todos');

$tasks = array_map(function ($task) {

	return new Task($task->description);

}, $tasks);

echo '<pre>';
print_r($tasks);
echo '</pre>';
