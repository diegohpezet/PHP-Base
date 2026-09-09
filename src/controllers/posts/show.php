<?php
require_once __DIR__ . '/../../config/bootstrap.php';

try {
    $stmt = $pdo->prepare('SELECT * FROM posts WHERE id = :id');
    $stmt->execute([
        'id' => $_GET['id'],
    ]);

    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    header('Location: /src/views/posts/index.php');
    exit;
} catch (PDOException $e) {
    exit;
}