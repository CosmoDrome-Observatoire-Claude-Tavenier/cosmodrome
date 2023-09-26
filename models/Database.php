<?php
require_once "PagesTrait.php";
require_once "UsersTrait.php";

class Database {
    // Traits
    use PagesTrait;
    use UsersTrait;
    
    // Attributes
    private static $instance = null;

    // Methods
    /**
     * Gets the database instance
     * 
     * @return PDO The database instance
     */
    public static function getInstance($dbPath) {
        if (self::$instance == null) {
            self::$instance = new PDO('sqlite:' . $dbPath);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }

    /**
     * Sets the database path
     * 
     * @param string $dbPath The database path
     */
    public static function setDbPath($dbPath) {
        self::$dbPath = $dbPath;
    }
}
?>