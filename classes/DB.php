<?php

class DB
{
    private static $db = null;

    public static function getInstance()
    {
        if (self::$db == null) {
            self::$db = new PDO('mysql:host=localhost;dbname=itProger;port=81:80;', 'root', '');
        }
        return self::$db;
    }

    private function __construct() {}
    private function __clone() {}
    public function __wakeup() {}
}