<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['email'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    file_put_contents('emails.txt', $email . PHP_EOL, FILE_APPEND | LOCK_EX);
    header('Location: index.php');
    exit;
}
