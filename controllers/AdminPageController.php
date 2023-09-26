<?php
class AdminPageController {
    public static function showUsersPage($url, $base_url, $action = null, $action_arg = null) {
        if (strtolower($url) == '/users') {
            $page_title = 'Utilisateurs';
            $users = Database::getUsers();
            require_once '../www/views/admin-page.php';
            if ($action == 'delete') {
                require_once '../www/views/partials/delete-user-modal.php';
            } else if ($action == 'modify') {
                require_once '../www/views/partials/modify-user-modal.php';
            } else if ($action == 'add') {
                echo 'add';
                require_once '../www/views/partials/add-user-modal.php';
            }
        }
    }
}
?>