<?php

require '../function/query.php';
session_start();


$id = $_GET["id"];

$intern = query("SELECT * FROM tbl_magang WHERE id = $id")[0];
$sektor = $intern["sektor"];

$rekomen = query("SELECT * FROM tbl_magang WHERE sektor = '$sektor' LIMIT 0, 4");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Internship.Time</title>
    <link rel="stylesheet" href="internshipcontent.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="w-screen">
    <header id="home_page">
        <nav class="navbar">
            <div class="navbar_container">
                <a href="#" id="nav_logo">
                    <img src="../img_magang/Logo (1).png" alt="none" style="height: 32px; width: 32px" />
                    <p>Internship.Time</p>
                </a>
                <ul class="nav_menu">
                    <li class="nav_item">
                        <a href="../index.php" target="_self" class="nav_links" id="home">Home</a>
                    </li>
                    <li class="nav_item">
                        <a href="./internship.php" target="_parent" class="nav_links" id="magang">Internship</a>
                    </li>
                    <li class="nav_item">
                        <a href="../article/article.php" class="nav_links" target="_parent" id="article">Article</a>
                    </li>
                    <li class="nav_item">
                        <a href="../aboutUs/about.php" class="nav_links" target="_parent" id="about">About Us</a>
                    </li>
                    <li>
                        <?php if (isset($_SESSION["login"])): ?>
                            <?= '<p class="username">' . $_SESSION["username"] . '</p>'; ?>
                        <?php endif; ?>
                    </li>
                </ul>
                <?php if (isset($_SESSION["login"])): ?>
                    <?php echo '<a href="./p.php" class="nav_btn" target="_parent" id="login_Btn">Logout</a>'; ?>
                <?php endif; ?>
                <?php if (!isset($_SESSION["login"])): ?>
                    <?php echo '<a href="./signUp/login.php" class="nav_btn" target="_parent" id="login_Btn">Sign in</a>'; ?>
                <?php endif; ?>

            </div>
        </nav>
    </header>
    <!-- Main Content Page -->
    <div class="main_content_page" id="main_content_page">
        <div class="main_container">
            <a href="./internship.php" class="back_btn">
                <img src="../img_home/back.png" alt="none" />
                <p>Kembali</p>
            </a>
            <div class="content_container">
                <div class="content_wrapper">
                    <div class="content_header">
                        <img src="../img_magang/<?= $intern["logo"]; ?>" alt="none"
                            style="height: 100px; width: 100px" />
                        <div class="profile_content">
                            <h4>
                                <?= $intern["institusi"]; ?>
                            </h4>
                            <a href="<?= $intern["linkwebsite"]; ?>"><?= $intern["linkwebsite"]; ?></a>
                        </div>
                    </div>
                    <div class="content_body">
                        <div class="content_tittle">
                            <h4>
                                <?= $intern["posisi"]; ?>
                            </h4>
                            <p class="time">Full Time</p>
                            <p class="text-muted">
                                <?= $intern["alamat"]; ?>
                            </p>
                            <p class="text-muted">
                                <?= $intern["durasi"]; ?>
                            </p>
                        </div>
                        <div class="content_body_child">
                            <h5>Rincian Kegiatan</h5>
                            <p>
                                <?= $intern["isi"]; ?>
                            </p>
                        </div>
                        <a href="<?= $intern["linkwebsite"]; ?>" target="_blank">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- sidebar content-->

    <div class="sidebar_content">
        <div class="sidebar_container">
            <h3>Rekomendasi Lowongan Magang Lainnya Untukmu</h3>
            <?php foreach ($rekomen as $row): ?>
                <div class="sidebar_wrapper">
                    <div class="sidebar_menu">
                        <div class="sidebar_item">
                            <div class="img_wrapp">
                                <img src="../img_magang/<?= $row["logo"]; ?>" alt="none"
                                    style="height: 120px; width: 120px" />
                            </div>
                            <div class="item_info">
                                <h4>
                                    <?= $row["institusi"]; ?>
                                </h4>
                                <p class="text-muted">
                                    <?= $row["alamat"]; ?>
                                </p>
                                <p>
                                    <?= $row["posisi"]; ?><br />
                                    <?= $row["durasi"]; ?>
                                </p>
                                <a class="item_link" href="./internshipcontent.php?id=<?= $row["id"]; ?>">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <footer>
        <div class="footer_page" id="footer_page">
            <div class="footer_container">
                <div class="footer_wrapper">
                    <h3>Internship.time</h3>
                    <p>
                        Layanan berbasis software (Software as a service) yang berfokus
                        pada bidang informasi untuk mempermudah mencari tempat magang bagi
                        siswa dan mahasiswa.
                    </p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>