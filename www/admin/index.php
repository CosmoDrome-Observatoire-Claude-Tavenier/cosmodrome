<?php
// Si l'url est logout on déconnecte l'utilisateur
$url = $_SERVER['REQUEST_URI'];
$base_url = '/cosmodrome/www';
$url = str_replace($base_url, '', $url); // À RETIRER POUR LA PRODUCTION

// On démarre une session
session_start();

if (!isset($_SESSION['username'])) {
    require_once '../controllers/LoginController.php';
    LoginController::showLogin();
    exit();
} else {
    echo '<p>Vous êtes connecté en tant que <strong>' . $_SESSION['username'] . '</strong>. Bravo.</p>';
    echo '<p><a href="logout">Se déconnecter</a></p>';
}

if (strtolower($url) == '/admin/logout') {
    // On déconnecte l'utilisateur
    unset($_SESSION['username']);
    header('Location: .');
    exit();
}