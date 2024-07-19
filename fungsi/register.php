<?php
require_once "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    try {
        $pdo = new PDO($dsn, $username, $password, $options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO siswa (email, password) VALUES (:email, :password)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);

        if ($stmt->execute()) {
            header("Location: ../email-verification.php");
            exit();
        } else {
            echo "Ada kesalahan saat membuat akun Anda. Silakan coba lagi.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    unset($pdo);
}


