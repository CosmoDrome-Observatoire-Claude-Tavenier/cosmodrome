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
            Database::getPageComponents($page['id']);
            require_once 'views/home.php';
        } else if (strtolower($page['url_path']) == "/404") {
            Database::getPageComponents($page['id']);
            require_once 'views/error.php';
        } else {
            require_once 'views/page.php';
        }
    }
}
?>