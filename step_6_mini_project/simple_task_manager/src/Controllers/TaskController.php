<?php
namespace App\Controllers;

use App\Models\Task;

class TaskController {
    private $taskModel;

    public function __construct() {
        $this->taskModel = new Task();
    }

    public function create($userId, $title, $description) {
        return $this->taskModel->create($userId, $title, $description);
    }

    public function getAll($userId) {
        return $this->taskModel->getAllByUser($userId);
    }

    public function update($id, $title, $description, $status) {
        return $this->taskModel->update($id, $title, $description, $status);
    }

    public function delete($id) {
        return $this->taskModel->delete($id);
    }
}
