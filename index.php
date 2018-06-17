<?php

require 'core/Task.php';

$query = require 'core/bootstrap.php';

$tasks = $query->SelectAll('todos');

$tasks = array_map(function ($task) {

	return new Task($task->description);

}, $tasks);

require 'views/index.view.php';
