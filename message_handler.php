<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = $_POST['fullname-surname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $db = new SQLite3('messages.db');

    $db->exec('CREATE TABLE IF NOT EXISTS messages (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        full_name TEXT NOT NULL,
        email TEXT NOT NULL,
        subject TEXT NOT NULL,
        message TEXT NOT NULL
    )');
    $query = $db->prepare('INSERT INTO messages (full_name, email, subject, message) VALUES (:fullName, :email, :subject, :message)');
    $query->bindValue(':fullName', $fullName, SQLITE3_TEXT);
    $query->bindValue(':email', $email, SQLITE3_TEXT);
    $query->bindValue(':subject', $subject, SQLITE3_TEXT);
    $query->bindValue(':message', $message, SQLITE3_TEXT);
    $query->execute();
    $db->close();

    header('Location: contact.html');
    exit();
}
?>
