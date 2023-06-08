<?php

require '../function/query.php';
session_start();

$id = $_GET["id"];

$article = query("SELECT * FROM tbl_artikel WHERE id = $id")[0];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="articlecontent.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!--content header-->
    <div class="w-screen ">
        <div class="content_header" id="content_header">
            <div class="content_container">
                <div class="header_wrapper">
                    <a href="./article.php"><img src="../img_home/back.png" alt="none">
                        <p>Kembali</p>
                    </a>
                    <h3>Blog Magang</h3>
                </div>
                <div class="content_tittle">
                    <h1>
                        <?= $article["judul"]; ?>
                    </h1>
                    <p class="text-muted">
                        <?= $article["informasi"]; ?>
                    </p>
                    <p class="text-muted">
                        <?= $article["tanggal"]; ?>
                    </p>
                </div>
                <div class="img_wrapp img-fluid">
                    <img src="../img_article/<?= $article["gambar"]; ?>" alt="none" class="img-fluid"
                        style="width: 1100px; height: 545px;">
                </div>
            </div>
        </div>

        <div class="content_body" id="content_body">
            <div class="content_container">
                <div class="body_wrapper">
                    <div class="pharagraph" id="pharagraph1">
                        <p>
                            <?= $article["isi"]; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="footer_page" id="footer_page">
                <div class="footer_container">
                    <div class="footer_wrapper">
                        <h3>Internship.time</h3>
                        <p>Layanan berbasis software (Software as a service)
                            yang berfokus pada bidang informasi untuk
                            mempermudah mencari tempat magang bagi siswa dan mahasiswa.</p>
                    </div>
                    <div class="footer_wrapper">
                        <h3>About</h3>
                        <ul class="footer_list_about">
                            <li class="list_about">Hubungi Kami</li>
                            <li class="list_about">Pusat Bantuan</li>
                            <li class="list_about">Logo</li>
                            <li class="list_about">Kebijakan Privasi</li>
                        </ul>
                    </div>
                    <div class="footer_wrapper">
                        <h3>Pencari Magang</h3>
                        <ul class="footer_list_pencarimagang">
                            <li class="list_pencarimagang">Blog</li>
                            <li class="list_pencarimagang">Lowongan Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>