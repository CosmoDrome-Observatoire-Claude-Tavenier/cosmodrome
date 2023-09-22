<?php
require_once 'models/Database.php';

class FooterController {
    /**
     * Shows the footer
     * 
     * @param array $page The current page
     */
    public static function showFooter($base_url) {
        $mentions = Database::getPageByUrlPath('/mentions-legales');
        require_once 'views/partials/footer.php';
    }
}
?>