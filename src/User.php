<?php

namespace App;

use PDO;

class User {
    public $pdo;

    public function __construct () {
        $db = new DB();
        $this->pdo = $db->conn;
    }
    public function register (
        string $fullName,
        string $email,
        string $password
    ): mixed {
        $select = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
        $select->bindParam(":email", $email);
        $select->execute();
        if ($select->rowCount() > 0) {
            return false;
        }
        $query = "INSERT INTO users (full_name, email, password) 
        VALUES (:full_name, :email, :password)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            ':full_name' => $fullName,
            ':email' => $email,
            ':password' => $password
        ]);
        $id = $this->pdo->lastInsertId();
        return $this->getUserById($id);
    }
    public function login (string $email, string $password): bool|array {
        $query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            ':email' => $email,
            ':password' => $password
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserById (int $id): mixed {
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            ':id' => $id
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function setTelegramId (int $id, int $telegramId) {
        
    }
}