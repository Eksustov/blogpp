<?php
require "models/Model.php";

class Blog extends Model {
    protected static function getTableName(): string
    {
        return "posts";
    }

    public static function find($id) {
        self::init();
        $sql = "SELECT * FROM " . static::getTableName() . " WHERE id = :id LIMIT 1";
        $params = [":id" => $id];
        
        return self::$db->query($sql, $params)->fetch();
    }

    public static function create($data) {
        self::init();
        $sql = "INSERT INTO " . static::getTableName() . " (content) VALUES (:content)";
        return self::$db->query($sql, [
            ":content" => $data["content"]
        ]);
    }

    public static function save($id, $data) {
        self::init();
        $sql = "UPDATE " . static::getTableName() . " SET content = :content WHERE id = :id";
        return self::$db->query($sql, [
            ":id" => $id,
            ":content" => $data["content"]
        ]);
    }

    public static function delete($id) {
        self::init();
        $sql = "DELETE FROM " . static::getTableName() . " WHERE id = :id";
        return self::$db->query($sql, [":id" => $id]);
    }
}