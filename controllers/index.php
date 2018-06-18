<?php
require 'core/Task.php';

$tasks = $app['database']->SelectAll('todos');

$tasks = array_map(function ($task) {

	return new Task($task->description);

}, $tasks);

require 'views/index.view.php';
