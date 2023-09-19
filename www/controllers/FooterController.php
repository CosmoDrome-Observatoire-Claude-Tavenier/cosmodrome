<?php
class FooterController {
    /**
     * Shows the footer
     * 
     * @param array $page The current page
     */
    public static function showFooter($page) {
        if (strtolower($page['url_path']) != '/' && strtolower($page['url_path']) != '') {
            $is_home = false;
        } else {
            $is_home = true;
        }
        require_once 'views/partials/footer.php';
    }
}
?>