<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Save user data (mock database simulation)
    $data = "$name,$email,$password\n";
    file_put_contents("users.txt", $data, FILE_APPEND);
    echo "Account created successfully! You can now <a href='login.html'>login</a>.";
}
?>
