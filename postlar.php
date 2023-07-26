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
    <title>Contact</title>
    
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
                                <a href="inbox.php">Gelen Kutusu</a>
                            </li>
                            <li>
                                <a href="postlar.php" style="opacity: 100%;">Post Paylaş</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="contact-wrapper">
        <div class="container mt-4">
            <div class="contact-container">
                <div class="contact-top-title">
                    Post Paylaş
                </div>
                <div class="contact-form">
                    <form action="post_handler.php" method="post">
                        <div class="title-input">
                            <input type="text" name="title" id="" placeholder="Başlık" >
                        </div>
                        <div class="content-input">
                            <textarea name="content" id="" cols="60" rows="5" placeholder="İçerik"></textarea>
                        </div>
                        <div class="button-input">
                            <button type="submit">Paylaş</button>
                        </div>
                    </form>
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
