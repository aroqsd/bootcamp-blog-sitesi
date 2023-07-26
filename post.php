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

    <style>

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 10px;
        border: 1px solid #ccc;
    }

    th {
        background-color: #f2f2f2; 
    }

</style>

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
                                <a href="post.php" style="opacity: 100%;">Postlar</a>
                            </li>
                            <li>
                                <a href="contact.html">İletişim</a>
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
                    <table>
                        <tbody>
                            <?php

                            $db = new SQLite3('messages.db');

                            $result = $db->query('SELECT * FROM posts');

                            while ($row = $result->fetchArray()) {
                                echo '<tr>';
                                echo '<td>' . $row['id'] . '</td>';
                                echo '<td>' . $row['title'] . '</td>';
                                echo '<td>' . $row['content'] . '</td>';
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
            <div class="copyright">
                © 2023 All rights reserved.
            </div>
        </div>
    </footer>

</body>

</html>
