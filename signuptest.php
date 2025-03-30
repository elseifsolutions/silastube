<?php
require 'static/important/config.inc.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $date = date("Y-m-d");

    $stmt = $pdo->prepare("SELECT id FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);

    if ($stmt->rowCount() > 0) {
        echo "Username already taken.";
    } else {
        $stmt = $pdo->prepare("INSERT INTO users (id, username, password, registeredon, email) VALUES (UUID(), :username, :password, :registeredon, :email)");
        $stmt->execute([
            'username' => $username,
            'password' => $hashed_password,
            'registeredon' => $date,
            'email' => $email
        ]);

        echo "Signup successful! <a href='login.php'>Login here</a>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <h2>Signup</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>

