<?php
class PostService {
    private PDO $db;
    
    function __construct(PDO $db) {
        $this->db = $db;
    }

    public function get_all() {
        $sql = "SELECT * FROM posts;";

        $results = $this->db->query($sql);

        return $results;
    }

    public function get(int $id) {
        $sql = "SELECT * FROM posts WHERE id=:id;";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $id
        ]);

        return $stmt;
    }

    public function create(string $title, string $content, string $image_src) {
        $sql = "INSERT INTO posts(title, content, image_src) VALUES (:title, :content, :image_src);";

        $stmt = $this->db->prepare($sql);
        
        return $stmt->execute([
            ':title' => $title,
            ':content' => $content,
            ':image_src' => $image_src
        ]);
    }
}