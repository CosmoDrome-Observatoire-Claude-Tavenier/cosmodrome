<?php
$url = $_SERVER['REQUEST_URI'];
$base_url = '/cosmodrome/www';
$url = str_replace($base_url, '', $url); // À RETIRER POUR LA PRODUCTION

if (preg_match('/^\/backoffice\/?/', $url)) {
    require_once '../controllers/AdminNavbarController.php';
    require_once '../controllers/LoginController.php';
    require_once '../controllers/AdminPageController.php';

    $url = $_SERVER['REQUEST_URI'];
    $base_url = $base_url . '/backoffice';
    $url = str_replace($base_url, '', $url);

    session_start();

    if (strtolower($url) == '/login') {
        if (isset($_SESSION['username'])) {
            header('Location: ' . $base_url);
        } else {
            LoginController::showLogin($base_url);
        }
    } else {
        if (!isset($_SESSION['username'])) {
            header('Location: ' . $base_url . '/login');

        } else {
            $user = $_SESSION['username'];
            
            if (strtolower($url) == '/logout') {
                session_destroy();
                header('Location: ' . $base_url . '/login');
                exit();
            }
            
            if (strtolower($url) == '/users') {
                AdminPageController::showUsersPage($url, $base_url);
            }

            if (strtolower($url) == '/users/add') {
                AdminPageController::showUsersPage('/users', $base_url, 'add');
            }

            if (strtolower($url) == '/users/add/confirm') {
                $username = $_POST['username'];
                $password = $_POST['password'];
                Database::addUser($username, $password);
                header('Location: ' . $base_url . '/users');
            }

            if (preg_match('/^\/users\/delete-user\/[1-9][0-9]*+/', strtolower($url))) {
                $id = explode('/', $url)[3];
                AdminPageController::showUsersPage('/users', $base_url, 'delete', $id);
            }

            if (preg_match('/^\/users\/delete-user\/[1-9][0-9]*+\/confirm/', strtolower($url))) {
                $id = explode('/', $url)[3];
                Database::deleteUser($id);
                header('Location: ' . $base_url . '/users');
            }

            if (preg_match('/^\/users\/modify-user\/[1-9][0-9]*+/', strtolower($url))) {
                $id = explode('/', $url)[3];
                AdminPageController::showUsersPage('/users', $base_url, 'modify', $id);
            }

            if (preg_match('/^\/users\/modify-user\/[1-9][0-9]*+\/confirm/', strtolower($url))) {
                $id = explode('/', $url)[3];
                $username = $_POST['username'];
                $password = $_POST['password'];
                Database::modifyUser($id, $username, $password);
                header('Location: ' . $base_url . '/users');
            }

            if (strtolower($url) == '/pages') {
                AdminPageController::showPagesPage($url, $base_url);
            }

            if (strtolower($url) == '/pages/add') {
                AdminPageController::showPagesPage('/pages', $base_url, 'add');
            }

            if (strtolower($url) == '/pages/add/confirm') {
                $title = $_POST['title'];
                $url_path = $_POST['url_path'];
                $position = $_POST['position'];
                $parent_id = $_POST['parent_id'];
                if ($position == 0) {
                    $position = null;
                }

                if ($parent_id == 0) {
                    $parent_id = null;
                }
                Database::addPage($title, $url_path, $position, $parent_id);
                header('Location: ' . $base_url . '/pages');
            }

            if (preg_match('/^\/pages\/delete-page\/[1-9][0-9]*+/', strtolower($url))) {
                $id = explode('/', $url)[3];
                AdminPageController::showPagesPage('/pages', $base_url, 'delete', $id);
            }

            if (preg_match('/^\/pages\/delete-page\/[1-9][0-9]*+\/confirm/', strtolower($url))) {
                $id = explode('/', $url)[3];
                Database::deletePage($id);
                header('Location: ' . $base_url . '/pages');
                }

            if (preg_match('/^\/pages\/modify-page\/[1-9][0-9]*+/', strtolower($url))) {
                $id = explode('/', $url)[3];
                AdminPageController::showPagesPage('/pages', $base_url, 'modify', $id);
            }

            if (preg_match('/^\/pages\/modify-page\/[1-9][0-9]*+\/confirm/', strtolower($url))) {
                $id = explode('/', $url)[3];
                $title = $_POST['title'];
                $url_path = $_POST['url_path'];
                $position = $_POST['position'];
                $parent_id = $_POST['parent_id'];
                Database::modifyPage($id, $title, $url_path, $position, $parent_id);
                header('Location: ' . $base_url . '/pages');
            }

            AdminNavbarController::showAdminNavbar($url, $base_url);
        }
    }

} else {
    require_once '../models/Database.php';
    require_once '../controllers/NavbarController.php';
    require_once '../controllers/FooterController.php';
    require_once '../controllers/PageController.php';

    $is_page_found = false;
    $page = null;

    $pages = Database::getPages();
    foreach ($pages as $_page) {
        if (strtolower($url) == strtolower($_page['url_path'])) {
            $page = $_page;
            PageController::showPage($pages, $page);
            $is_page_found = true;
            break;
        }
    }

    if (!$is_page_found) {
        $page = ['url_path' => '/404'];
        PageController::showPage($pages, $page);
    }

    FooterController::showFooter($base_url);
    NavbarController::showNavbar($pages, $page, $base_url, $url);
}

?>