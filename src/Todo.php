<?php

namespace App;

use PDO;

class Todo {
    public $pdo;

    public function __construct () {
        $db = new DB();
        $this->pdo = $db->conn;
    }

    public function store (string $title, string $dueDate, int $userId): bool {
        $query = "INSERT INTO todos(title, status, due_date, created_at, updated_at, user_id) 
                VALUES (:title, 'pending', :due_date, NOW(), NOW(), :userId)
        ";
        return $this->pdo->prepare($query)->execute([":title" => $title, ":due_date" => $dueDate, ':userId' => $userId]);
    }

    public function getAllTodos (int $userId) {
        $query = "SELECT * FROM todos where user_id=:user_id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([":user_id" => $userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function destroy (int $id): bool {
        $query = "DELETE FROM todos WHERE id=:id";
        return $this->pdo->prepare($query)->execute([":id" => $id]);
    }

    public function getTodo (int $id) {
        $query = "SELECT * FROM todos WHERE id=:id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([":id" => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update (int $id, string $title, string $status, string $dueDate) {
        $query = "UPDATE todos set
            title=:title,status=:status, due_date=:due_date,updated_at=NOW() where id=:id";

        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([":id" => $id, ":title" => $title, ":status" => $status, ":due_date" => $dueDate]);
    }
}