<?php

$db = new SQLite3('admin.db');

$newUsername = 'okanG';
$newPassword = 'yavuzlarHO';

$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

$query = $db->prepare('INSERT INTO admin_users (username, password) VALUES (:username, :password)');
$query->bindValue(':username', $newUsername, SQLITE3_TEXT);
$query->bindValue(':password', $hashedPassword, SQLITE3_TEXT);
$query->execute();

$db->close();

echo 'Yeni admin hesabı başarıyla oluşturuldu!';
?>
