<?php

class Database {
    private static $instance = null;

    private function __construct() {
        echo "Database connection created.<br>";
    }

    private function __clone() {}
    public function __wakeup() {}

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
}

// Demonstration
$db1 = Database::getInstance();
$db2 = Database::getInstance();

if ($db1 === $db2) {
    echo "Both variables contain the same instance.<br>";
}
