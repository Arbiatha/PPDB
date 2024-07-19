<?php
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi input
    if (empty($email) || empty($password)) {
        die('Email dan password harus diisi!');
    }

    // Koneksi ke database
    $database = new Database();
    $db = $database->getConnection();

    // Query untuk memeriksa email dan password
    $query = "SELECT id_siswa, email, password FROM siswa WHERE email = :email";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifikasi password
    if ($user && password_verify($password, $user['password'])) {
        // Password cocok, buat sesi
        $_SESSION['user_id'] = $user['id_siswa'];
        $_SESSION['user_email'] = $user['email'];

        // Redirect ke halaman utama
        header('Location: ../siswa/index.php');
        exit;
    } else {
        // Password tidak cocok
        echo 'Email atau password salah!';
    }
}