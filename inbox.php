<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gelen Kutusu Mesajları</title>
    
    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="header-wrapper mt-5">
                <div class="row header-content">
                    <div class="header-title col-md-8">
                        <a href="index.html">Blog Title</a>
                    </div>
                    <div class="header-menu col-md-4">
                        <ul>
                            <li>
                                <a href="index.html">Ev</a>
                            </li>
                            <li>
                                <a href="about.html">Hakkında</a>
                            </li>
                            <li>
                                <a href="post.php">Postlar</a>
                            </li>
                            <li>
                                <a href="contact.html">İletişim</a>
                            </li>
                            <li>
                                <a href="inbox.html" style="opacity: 100%;">Gelen Kutusu</a>
                            </li>
                            <li>
                                <a href="postlar.php">Post Paylaş</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="inbox-wrapper">
        <div class="container mt-4">
            <div class="inbox-container">
                <div class="inbox-top-title">
                    Gelen Kutusu Mesajları
                </div>
                <div class="inbox-messages">
                    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                        <thead>
                            <tr>
                                <th style="padding: 10px 15px;">No</th>
                                <th style="padding: 10px 15px;">Ad Soyad</th>
                                <th style="padding: 10px 15px;">Email</th>
                                <th style="padding: 10px 15px;">Konu</th>
                                <th style="padding: 10px 15px;">Mesaj</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $db = new SQLite3('messages.db');

                            $result = $db->query('SELECT * FROM messages');

                            while ($row = $result->fetchArray()) {
                                echo '<tr>';
                                echo '<td style="padding: 10px 15px;">' . $row['id'] . '</td>';
                                echo '<td style="padding: 10px 15px;">' . $row['full_name'] . '</td>';
                                echo '<td style="padding: 10px 15px;">' . $row['email'] . '</td>';
                                echo '<td style="padding: 10px 15px;">' . $row['subject'] . '</td>';
                                echo '<td style="padding: 10px 15px;">' . $row['message'] . '</td>';
                                echo '</tr>';
                            }

                            $db->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer> 
        <div class="container-fluid mt-5"></div>
        <hr>
        </div>
        <div class="container text-center mt-5 mb-5">
            <div class="logout-form">
                <form action="logout.php" method="post">
                    <input type="submit" value="Çıkış Yap">
                </form>
            </div>
            <div class="copyright">
                © 2023 All rights reserved.
            </div>
        </div>
    </footer>
    <style>
        .button-input button,
        .logout-form input[type="submit"] {
            background-color: #4CAF50; 
            color: white; 
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .button-input button:hover,
        .logout-form input[type="submit"]:hover {
            background-color: #FF0000;
        }

        .button-input button:active,
        .logout-form input[type="submit"]:active {
            background-color: #3e8e41; 
        }
    </style>
</body>

</html>
