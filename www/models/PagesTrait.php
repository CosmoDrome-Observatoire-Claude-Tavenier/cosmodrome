<?php
trait PagesTrait {
    /**
     * Gets all the pages
     * 
     * @return array The pages
     */
    public static function getPages() {
        $db = self::getInstance();
        $query = $db->prepare("SELECT * FROM Pages;");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Gets a page by its id
     * 
     * @param int $id The id of the page
     * @return array The page
     */
    public static function getPageChildren($id) {
        $db = self::getInstance();
        $query = $db->prepare("SELECT * FROM Pages WHERE parent_id = :id");
        $query->execute(['id' => $id]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Gets all page components by page id
     * 
     * @param int $id The id of the page
     * @return array The page
     */
    public static function getPageComponents($id) {
        $db = self::getInstance();
        $query = $db->prepare("SELECT * FROM Components INNER JOIN pages_components ON components.id = pages_components.component_id WHERE pages_components.page_id = :id");
        $query->execute(['id' => $id]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Gets a page by its url path
     * 
     * @param string $url_path The url path of the page
     * @return array The page
     */
    public static function getPageByUrlPath($url_path) {
        $db = self::getInstance();
        $query = $db->prepare("SELECT * FROM Pages WHERE url_path = :url_path");
        $query->execute(['url_path' => $url_path]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}
?>