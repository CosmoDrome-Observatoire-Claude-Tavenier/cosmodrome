<?php
class NavbarController {
    /**
     * Shows the navbar
     * 
     * @param array $pages The pages to show in the navbar
     * @param array $page The current page
     * @param string $base_url The base url of the website
     * @param string $url The current url
     */
    public static function showNavbar($pages, $page, $base_url, $url) {
        if (strtolower($page['url_path']) != '/' && strtolower($page['url_path']) != '') {
            $is_home = false;
        } else {
            $is_home = true;
        }

        $main_pages = [];
        $secondary_pages = [];
        $sorted_pages = [];

        foreach ($pages as $_page) {
            if ($_page['parent_id'] == null) {
                array_push($main_pages, $_page);
            } else {
                array_push($secondary_pages, $_page);
            }
        }

        // We sort the main pages by position ascending
        usort($main_pages, function($a, $b) {
            return $a['position'] <=> $b['position'];
        });

        // We sort the secondary pages by position ascending
        usort($secondary_pages, function($a, $b) {
            if ($a['position'] == $b['position']) {
                return $a['parent_id'] <=> $b['parent_id'];
            }
            return $a['position'] <=> $b['position'];
        });

        // We loop through the main pages
        foreach ($main_pages as $main_page) {
            $main_page['children'] = [];
            // We loop through the secondary pages
            foreach ($secondary_pages as $secondary_page) {
                // We push the secondary page in the main page's children array
                if ($secondary_page['parent_id'] == $main_page['id']) {
                    // We push the secondary page in the main page's children array
                    array_push($main_page['children'], $secondary_page);
                }
            }

            // We push the main page in the sorted pages array
            array_push($sorted_pages, $main_page);
        }

        require_once 'views/partials/temp.php';
    }
}
?>