<?php
require_once __DIR__ . '/../../config/bootstrap.php';

try {
    $stmt = $pdo->prepare('UPDATE posts SET title = :title, content = :content WHERE id = :id');
    $stmt->execute([
        'id' => $_GET['id'],
        'title' => $_POST['title'],
        'content' => $_POST['content'],
    ]);

    header('Location: /src/views/posts/index.php');
    exit;
} catch (PDOException $e) {
    exit;
}