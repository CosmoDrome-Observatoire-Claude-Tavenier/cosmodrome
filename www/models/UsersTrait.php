<?php
trait UsersTrait {
    /**
     * Gets all Users
     * 
     * @return array The Users
     */
    public static function getUsers() {
        $db = self::getInstance();
        $query = $db->prepare("SELECT * FROM Users");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Gets a users by its username
     * 
     * @param string $username The username of the user
     * @return array The user
     */
    public static function getUser($username) {
        $db = self::getInstance();
        $query = $db->prepare("SELECT * FROM Users WHERE username = :'username'");
        $query->execute(['username' => $username]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>