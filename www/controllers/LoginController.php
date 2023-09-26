<?php
// Login controller

require_once '../../models/Database.php';

class LoginController {
    public static function showLogin() {
        // Si le post username et password est défini on vérifie si les données sont correctes
        // Si c'est le cas on connecte l'utilisateur et on le redirige vers la page d'accueil
        // Sinon on affiche un message d'erreur

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // On vérifie si les données sont correctes
            if (Database::checkLogin($username, $password)) {
                // On démarre une session
                session_start();
                // On connecte l'utilisateur
                $_SESSION['username'] = $username;

                // On redirige l'utilisateur vers la page d'administration
                header('Location: .');
            } else {
                // On affiche un message d'erreur
                echo '<p class="error">Nom d\'utilisateur ou mot de passe incorrect</p>';
            }
        }
        require_once '../views/login.php';
    }
}   