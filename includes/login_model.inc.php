<?php

declare(strict_types = 1);

function output_username()
{
    if (isset($_SESSION['user_id'])) {
        echo "You are logged in as " . $_SESSION['user_username'];
    } else {
        echo "You are not logged in";
    }
}

function get_user(object $pdo, string $username)
{
    $query = "SELECT * FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}