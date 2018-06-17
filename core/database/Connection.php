<?php

class Connection {
	// How to access a static method
	// Connection::make();
	public static function make($config) {
		try {

			return new PDO(
				$config['connection'] . ';dbname=' . $config['name'],
				$config['username'],
				$config['password'],
				$config['options']
			);

		} catch(PDOException $e) {

			die('Could not connect');

		}
	}
}
