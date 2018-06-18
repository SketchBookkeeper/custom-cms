<?php

require 'core/bootstrap.php';

require $router = Router::load('routes.php')
	->direct(Request::uri());
