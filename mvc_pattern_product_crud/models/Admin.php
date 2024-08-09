<?php
class Admin {
    private $conn;

    public function __construct($db){
    
        $this->conn=$db;
    }

    public function checkCredentials($username, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows > 0;
    }
}

?>