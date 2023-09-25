<?php
trait UsersTrait {
    /**
     * Gets all Users
     * 
     * @return array The Users
     */
    public static function getUsers() {
        $db = self::getInstance('../../data/database.db');
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
        $db = self::getInstance('../../data/database.db');
        $query = $db->prepare("SELECT * FROM Users WHERE username = :'username'");
        $query->execute(['username' => $username]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Checks if the login is correct
     * 
     * @param string $username The username of the user
     * @param string $password The password of the user
     * @return bool True if the login is correct, false otherwise
     */
    public static function checkLogin($username, $password) {
        // On récupère le mot de passe de l'utilisateur
        $db = self::getInstance('../../data/database.db');
        $query = $db->prepare("SELECT password FROM Users WHERE username = :username");
        $query->execute(['username' => $username]);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return password_verify($password, $result['password']);
    }
}
?>