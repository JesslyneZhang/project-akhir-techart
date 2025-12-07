<?php
// app/controllers/AuthController.php

require_once __DIR__ . '/../models/User.php';

class AuthController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    // TAMPILKAN FORM LOGIN
    public function showLoginForm()
    {
        $error = isset($_GET['error']) ? $_GET['error'] : null;
        require __DIR__ . '/../views/auth/login.php';
    }

    // PROSES LOGIN (POST)
    public function login()
{
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (!$email || !$password) {
        header('Location: index.php?page=login&error=Email atau password wajib diisi');
        exit;
    }

    $user = $this->userModel->findByEmail($email);
    if (!$user) {
        header('Location: index.php?page=login&error=Email atau password salah');
        exit;
    }

    // ====== GANTI BAGIAN INI ======
    // kalau pakai hash:
    // if (!password_verify($password, $user['password'])) { ... }

    // versi cepet: plain text compare
    if ($password !== $user['password']) {
        header('Location: index.php?page=login&error=Email atau password salah');
        exit;
    }
    // ===============================

    $_SESSION['user'] = [
        'id'    => $user['id'],
        'name'  => $user['name'],
        'email' => $user['email'],
        'role'  => $user['role'],
    ];

    if ($user['role'] === 'admin') {
        header('Location: index.php?page=admin_hotels');
    } else {
        header('Location: index.php?page=home');
    }
    exit;
}

    // LOGOUT
    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location: index.php');
        exit;
    }
}
