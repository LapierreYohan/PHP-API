<?php

if (
    isset($_POST['title']) &&
    isset($_POST['description']) &&
    isset($_POST['level'])
) {
    $pdo = new PDO('sqlite:' . __DIR__ . '/database.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('INSERT INTO tickets(user_id, title, description, level) VALUES (:user, :title, :description, :level)');

    $title = htmlentities($_POST['title']);
    $description = htmlentities($_POST['description']);

    $stmt->bindParam('user', $_SESSION['user']['id'], PDO::PARAM_INT);
    $stmt->bindParam('title', $title, PDO::PARAM_STR, 255);
    $stmt->bindParam('description', $description);
    $stmt->bindParam('level', $_POST['level'], PDO::PARAM_INT);

    $stmt->execute();
}

header('Location: /todo-list');
exit();