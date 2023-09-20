<?php
require_once 'models/Database.php';
require_once 'controllers/NavbarController.php';
require_once 'controllers/FooterController.php';
require_once 'controllers/PageController.php';


$url = $_SERVER['REQUEST_URI'];
$base_url = '/cosmodrome/www';
$url = str_replace($base_url, '', $url); // À RETIRER POUR LA PRODUCTION

$is_page_found = false;
$page = null;

$pages = Database::getPages();
foreach ($pages as $_page) {
    if (strtolower($url) == strtolower($_page['url_path'])) {
        $page = $_page;
        PageController::showPage($page);
        $is_page_found = true;
        break;
    }
}

if (!$is_page_found) {
    $page = ['url_path' => '/404'];
    PageController::showPage($page);
}

NavbarController::showNavbar($pages, $page, $base_url, $url);
FooterController::showFooter($page);
?>