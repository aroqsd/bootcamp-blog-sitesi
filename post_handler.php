<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $db = new SQLite3('messages.db');

    $db->exec('CREATE TABLE IF NOT EXISTS posts (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT NOT NULL,
        content TEXT NOT NULL
    );');

    $query = $db->prepare('INSERT INTO posts (title, content) VALUES (:title, :content)');
    $query->bindValue(':title', $title, SQLITE3_TEXT);
    $query->bindValue(':content', $content, SQLITE3_TEXT);
    $query->execute();
    $db->close();

    header('Location: postlar.php');
    exit();
}
?>
