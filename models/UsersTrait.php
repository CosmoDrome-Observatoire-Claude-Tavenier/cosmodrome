<?php
trait UsersTrait {
    /**
     * Gets all Users
     * 
     * @return array The Users
     */
    public static function getUsers() {
        $db = self::getInstance('../data/database.db');
        $query = $db->prepare("SELECT id, username FROM Users ORDER BY id ASC");
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
        $db = self::getInstance('../data/database.db');
        $query = $db->prepare("SELECT id, username FROM Users WHERE username = :'username'");
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
        $db = self::getInstance('../data/database.db');
        $query = $db->prepare("SELECT password FROM Users WHERE username = :username");
        $query->execute(['username' => $username]);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return password_verify($password, $result['password']);
    }

    /**
     * Remove a user
     * 
     * @param int $id The id of the user
     */
    public static function deleteUser($id) {
        $db = self::getInstance('../data/database.db');
        $query = $db->prepare("DELETE FROM Users WHERE id = :id");
        $query->execute(['id' => $id]);
    }

    /**
     * Modify a user
     * 
     * @param int $id The id of the user
     */
    public static function modifyUser($id, $username, $password) {
        $db = self::getInstance('../data/database.db');
        $query = $db->prepare("UPDATE Users SET username = :username, password = :password WHERE id = :id");
        $query->execute(['id' => $id, 'username' => $username, 'password' => password_hash($password, PASSWORD_DEFAULT)]);
    }

    /**
     * Add a user
     * 
     * @param string $username The username of the user
     * @param string $password The password of the user
     */
    public static function addUser($username, $password) {
        $db = self::getInstance('../data/database.db');
        $query = $db->prepare("INSERT INTO Users (username, password) VALUES (:username, :password)");
        $query->execute(['username' => $username, 'password' => password_hash($password, PASSWORD_DEFAULT)]);
    }
}
?>