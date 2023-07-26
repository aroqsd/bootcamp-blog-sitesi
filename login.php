<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$db = new SQLite3('admin.db');

$query = $db->prepare('SELECT * FROM admin_users WHERE username = :username');
$query->bindValue(':username', $username, SQLITE3_TEXT);
$result = $query->execute();

if ($row = $result->fetchArray()) {
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $username;
        header('Location: inbox.php');
        exit();
    } else {
        echo 'Hatalı kullanıcı adı veya şifre';
    }
} else {
    echo 'Hatalı kullanıcı adı veya şifre';
}

$db->close();
?>
