<?php
trait PagesTrait {
    /**
     * Gets all the pages
     * 
     * @return array The pages
     */
    public static function getPages() {
        $db = self::getInstance('../data/database.db');
        $query = $db->prepare("SELECT * FROM Pages ORDER BY id ASC, position ASC");
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
        $db = self::getInstance('../data/database.db');
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
        $db = self::getInstance('../data/database.db');
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
        $db = self::getInstance('../data/database.db');
        $query = $db->prepare("SELECT * FROM Pages WHERE url_path = :url_path");
        $query->execute(['url_path' => $url_path]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Add a page
     * 
     * @param string $title The title of the page
     * @param string $url_path The url path of the page
     * @param int $position The position of the page
     * @param int $parent_id The parent id of the page
     * @return void
     */
    public static function addPage($title, $url_path, $position, $parent_id) {
        $db = self::getInstance('../data/database.db');
        $query = $db->prepare("INSERT INTO Pages (title, url_path, position, parent_id) VALUES (:title, :url_path, :position, :parent_id)");
        $query->execute(['title' => $title, 'url_path' => $url_path, 'position' => $position, 'parent_id' => $parent_id]);
    }

    /**
     * Delete a page
     * 
     * @param int $id The id of the page
     * @return void
     */
    public static function deletePage($id) {
        $db = self::getInstance('../data/database.db');
        $query = $db->prepare("DELETE FROM Pages WHERE id = :id");
        $query->execute(['id' => $id]);
    }

    /**
     * Modify a page
     * 
     * @param int $id The id of the page
     * @param string $title The title of the page
     * @param string $url_path The url path of the page
     * @param int $position The position of the page
     * @param int $parent_id The parent id of the page
     * @return void
     */
    public static function modifyPage($id, $title, $url_path, $position, $parent_id) {
        $db = self::getInstance('../data/database.db');
        $query = $db->prepare("UPDATE Pages SET title = :title, url_path = :url_path, position = :position, parent_id = :parent_id WHERE id = :id");
        $query->execute(['id' => $id, 'title' => $title, 'url_path' => $url_path, 'position' => $position, 'parent_id' => $parent_id]);
    }
}
?>