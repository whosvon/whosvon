<?php
session_start();

$mockUsers = [
    "user1@example.com" => "password123",
    "user2@example.com" => "mypassword"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($mockUsers[$email]) && $mockUsers[$email] == $password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("Location: index.html");
        exit();
    } else {
        echo "Invalid login credentials.";
    }
}
?>
