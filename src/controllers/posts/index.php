<?php
require_once __DIR__ . '/../../config/bootstrap.php';

try {
    $stmt = $pdo->prepare('SELECT * FROM posts');
    $stmt->execute();

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('Location: /src/views/posts/index.php');
    exit;
} catch (PDOException $e) {
    exit;
}
