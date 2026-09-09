<?php
require_once __DIR__ . '/../../config/bootstrap.php';

try {
    $stmt = $pdo->prepare('INSERT INTO posts (title, content) VALUES (:title, :content)');
    $stmt->execute([
        'title' => $_POST['title'],
        'content' => $_POST['content'],
    ]);

    header('Location: /src/views/posts/index.php');
    exit;
} catch (PDOException $e) {
    exit;
}