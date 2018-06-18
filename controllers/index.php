<?php
require 'core/Task.php';

$tasks = $database->SelectAll('todos');

$tasks = array_map(function ($task) {

	return new Task($task->description);

}, $tasks);
