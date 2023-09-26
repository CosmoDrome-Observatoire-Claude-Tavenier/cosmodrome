<?php
class AdminPageController {
    public static function showUsersPage($url, $base_url, $action = null, $action_arg = null) {
        $page_title = 'Utilisateurs';
        $users = Database::getUsers();
        require_once '../www/views/admin-page.php';
        if ($action == 'delete') {
            require_once '../www/views/partials/delete-user-modal.php';
        } else if ($action == 'modify') {
            require_once '../www/views/partials/modify-user-modal.php';
        } else if ($action == 'add') {
            require_once '../www/views/partials/add-user-modal.php';
        }
    }

    public static function showPagesPage($url, $base_url, $action = null, $action_arg = null) {
        $page_title = 'Pages';
        $pages = Database::getPages();
        require_once '../www/views/admin-page.php';
        if ($action == 'delete') {
            require_once '../www/views/partials/delete-page-modal.php';
        } else if ($action == 'modify') {
            require_once '../www/views/partials/modify-page-modal.php';
        } else if ($action == 'add') {
            require_once '../www/views/partials/add-page-modal.php';
        }
    }
}
?>