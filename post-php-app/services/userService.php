<?php
class UserService {
    private PDO $db;
    
    function __construct(PDO $db) {
        $this->db = $db;
    }

    public function login(string $username, string $password) {
        $sql = "SELECT * FROM users WHERE username=:username;";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':username' => $username
        ]);

        $result = $stmt->fetch();
        if($result['password'] === $password) {
            session_start();
            
            $_SESSION['id'] = $result['id'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['isLogged'] = true;

            return true;
        }

        return false;
    }
}