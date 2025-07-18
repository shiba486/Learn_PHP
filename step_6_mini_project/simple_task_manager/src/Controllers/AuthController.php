<?php
namespace App\Controllers;

use App\Models\User;

class AuthController {
    private $userModel;

    public function __construct() {
        session_start();
        $this->userModel = new User();
    }

    public function register($name, $email, $password) {
        if ($this->userModel->findByEmail($email)) {
            return ['error' => 'Email already registered'];
        }
        $this->userModel->create($name, $email, $password);
        return ['success' => 'Registration successful'];
    }

    public function login($email, $password) {
        $user = $this->userModel->findByEmail($email);
        if (!$user) {
            return ['error' => 'User not found'];
        }
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            return ['success' => 'Login successful'];
        }
        return ['error' => 'Invalid password'];
    }

    public function logout() {
        session_destroy();
    }

    public function checkAuth() {
        return isset($_SESSION['user_id']);
    }

    public function getUserId() {
        return $_SESSION['user_id'] ?? null;
    }
}
