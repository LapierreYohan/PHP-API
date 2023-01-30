<?php

if (!empty($_POST['login']) && !empty($_POST['password'])) {

    $pdo = new PDO('sqlite:' . __DIR__ . '/database.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//    $test = $pdo->exec("UPDATE users SET password='1234' ");
//    var_dump($test);die();

    $stmt = $pdo->prepare('SELECT * FROM users WHERE name = :name and password = :password');
    $stmt->execute(
        [
            'name' => $_POST['login'],
            'password' => $_POST['password'],
        ]
    );
    $user = $stmt->fetch();
    if ($user) {
        $_SESSION['user'] = $user;
    }
}
header('Location: /index');
exit();