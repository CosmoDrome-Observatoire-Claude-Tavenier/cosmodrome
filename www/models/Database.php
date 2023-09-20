<?php
require_once "PagesTrait.php";

class Database {
    // Traits
    use PagesTrait;

    // Attributes
    private static $dbPath = "../data/database.db";
    private static $instance = null;

    // Methods
    /**
     * Gets the database instance
     * 
     * @return PDO The database instance
     */
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new PDO('sqlite:' . self::$dbPath);
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