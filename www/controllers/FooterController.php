<?php
class FooterController {
    /**
     * Shows the footer
     * 
     * @param array $page The current page
     */
    public static function showFooter() {
        require_once 'views/partials/footer.php';
    }
}
?>