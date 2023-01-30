<?php

session_start();

$path = $_SERVER['PATH_INFO']??"/";

if (!isset($_SESSION['user']) && $path != "/login") {
    header("Location: /login");
    exit();
}

switch($path) {

    case "/index":
        include __DIR__ . "/index.php";
        break;   
    
    case "/":
        include __DIR__ . "/index.php";
        break;   

    case "/login":
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            include __DIR__ . "/login.php";
        } else {
            include __DIR__ . "/traitement-form-connect.php";
        }
        break;

    case "/form-edit":
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            include __DIR__ . "/form-edit.php";
        } else {
            include __DIR__ . "/traitement-form-add-ticket.php";
        }
        break;

    case "/todo-list":
        include __DIR__ . "/todo-list.php";
        break;

    case "/logout":

        $_SESSION = [];
        session_destroy();
        header('Location: /login');
        exit();
    
    default:
        header("HTTP/1.1 404 Not Found");
        echo("<title>ERROR 404</title>");
        echo("ERROR 404 :");
        break;
}
