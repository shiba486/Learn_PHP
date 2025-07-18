<?php
namespace App\Models;

use App\Database;
use PDO;

class Task {
    private $pdo;

    public function __construct() {
        $this->pdo = Database::getInstance();
    }

    public function create($userId, $title, $description) {
        $stmt = $this->pdo->prepare("INSERT INTO tasks (user_id, title, description) VALUES (?, ?, ?)");
        return $stmt->execute([$userId, $title, $description]);
    }

    public function getAllByUser($userId) {
        $stmt = $this->pdo->prepare("SELECT * FROM tasks WHERE user_id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetchAll();
    }

    public function findById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM tasks WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function update($id, $title, $description, $status) {
        $stmt = $this->pdo->prepare("UPDATE tasks SET title = ?, description = ?, status = ? WHERE id = ?");
        return $stmt->execute([$title, $description, $status, $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM tasks WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
