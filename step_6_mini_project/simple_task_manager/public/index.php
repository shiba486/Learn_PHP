<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\AuthController;
use App\Controllers\TaskController;

$auth = new AuthController();
$task = new TaskController();

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Simple Router (API style)
header('Content-Type: application/json');

if ($uri === '/register' && $method === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $res = $auth->register($data['name'], $data['email'], $data['password']);
    echo json_encode($res);
    exit;
}

if ($uri === '/login' && $method === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $res = $auth->login($data['email'], $data['password']);
    echo json_encode($res);
    exit;
}

if ($uri === '/logout' && $method === 'POST') {
    $auth->logout();
    echo json_encode(['success' => 'Logged out']);
    exit;
}

// All following routes need authentication
if (!$auth->checkAuth()) {
    http_response_code(401);
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

$userId = $auth->getUserId();

if ($uri === '/tasks' && $method === 'GET') {
    $tasks = $task->getAll($userId);
    echo json_encode($tasks);
    exit;
}

if ($uri === '/tasks' && $method === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $task->create($userId, $data['title'], $data['description']);
    echo json_encode(['success' => 'Task created']);
    exit;
}

if (preg_match('#/tasks/(\d+)#', $uri, $matches)) {
    $taskId = $matches[1];

    if ($method === 'PUT') {
        $data = json_decode(file_get_contents('php://input'), true);
        $task->update($taskId, $data['title'], $data['description'], $data['status']);
        echo json_encode(['success' => 'Task updated']);
        exit;
    }

    if ($method === 'DELETE') {
        $task->delete($taskId);
        echo json_encode(['success' => 'Task deleted']);
        exit;
    }
}

http_response_code(404);
echo json_encode(['error' => 'Route not found']);
