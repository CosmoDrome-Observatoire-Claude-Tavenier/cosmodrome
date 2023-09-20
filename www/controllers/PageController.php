<?php
require_once 'models/Database.php';

class PageController {
    /**
     * Shows the page
     * 
     * @param array $page The page to show
     */
    public static function showPage($page) {
        if (strtolower($page['url_path']) == "/" || strtolower($page['url_path']) == "") {
            $page['components'] = Database::getPageComponents($page['id']);
            require_once 'views/home.php';
        } else if (strtolower($page['url_path']) == "/404") {
            require_once 'views/error.php';
        } else {
            $page['components'] = Database::getPageComponents($page['id']);
            require_once 'views/page.php';
        }
    }
}
?>