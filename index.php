<?php

session_start();

require './signUp/function.php';

// $result = mysqli_query($conn, "SELECT * FROM magang_card ");
// $result2 = mysqli_query($conn, "SELECT * FROM tbl_artikel ");

$magang = query("SELECT * FROM magang_card ");
$artikel = query("SELECT * FROM artikel_card LIMIT 0, 3");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF8" />
    <meta httpequiv="XUACompatible" content="IE=edge" />
    <meta name="viewport" content="width=devicewidth, initialscale=1.0" />
    <title>Internship.Time</title>
    <link rel="stylesheet" href="./index.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body>
    <header id="home_page">
        <nav class="navbar">
            <div class="navbar_container">
                <a href="#" id="nav_logo">
                    <img src="./img_home/Logo (1).png" alt="none" style="height: 32px; width: 32px" />
                    <p>Internship.Time</p>
                </a>
                <ul class="nav_menu">
                    <li class="nav_item">
                        <a href="#home_page" target="_self" class="nav_links" id="home">Home</a>
                    </li>
                    <li class="nav_item">
                        <a href="./intern/internship.php" target="_parent" class="nav_links" id="magang">Internship</a>
                    </li>
                    <li class="nav_item">
                        <a href="./article/article.php" class="nav_links" target="_parent" id="article">Article</a>
                    </li>
                    <li class="nav_item">
                        <a href="./aboutUs/about.php" class="nav_links" target="_parent" id="about">About Us</a>
                    </li>
                    <li class="sesi">
                        <?php if (isset($_SESSION["login"])): ?>
                            <?= '<p class="username">' . $_SESSION["username"] . '</p>'; ?>
                        <?php endif; ?>
                    </li>
                </ul>
                <?php if (isset($_SESSION["login"])): ?>
                    <?php echo '<a href="./signUp/logout.php" class="nav_btn" target="_parent" id="login_Btn">Logout</a>'; ?>
                <?php endif; ?>
                <?php if (!isset($_SESSION["login"])): ?>
                    <?php echo '<a href="./signUp/login.php" class="nav_btn" target="_parent" id="login_Btn">Sign in</a>'; ?>
                <?php endif; ?>

            </div>
        </nav>
    </header>
    <!-- home section -->
    <div class="home_page" id="home_page">
        <div class="home_container">
            <h1 class="home_heading">
                Temukan tempat <br />
                <span>magang</span> impianmu
            </h1>
            <p class="home_desk">
                Tak perlu khawatir kini kamu dapat menemukan berbagai informasi <br />
                tentang magang dengan mudah dan menyenangkan
            </p>
            <div class="search_container">
                <a href="./intern/internship.php"><button class="search_btn">Daftar Magang</button></a>
            </div>
        </div>
        <img class="img_home" src="./img_home/home_bg.png" alt="none" style="height: 600px; width: 600px" />
    </div>

    <!-- list section-->
    <div class="list_page" id="list_page">
        <div class="list_container">
            <div class="list_img_container">
                <img src="./img_home/img_list1.png" alt="none" style="height: 100px; width: 100px" />
            </div>
            <div class="list_content">
                <h3 class="list1_heading">30+</h3>
                <p class="list1_pharagraph">Pilihan Magang</p>
            </div>
            <div class="list_img_container">
                <img src="./img_home/img_list2.png" alt="none" class="rounded-2" style="height: 100px; width: 100px" />
            </div>
            <div class="list_content">
                <h3 class="list2_heading">20+</h3>
                <p class="list2_pharagraph">Mitra Perusahaan</p>
            </div>
            <div class="list_img_container">
                <img src="./img_home/img_list3.png" alt="none" style="height: 100px; width: 100px" />
            </div>
            <div class="list_content">
                <h3 class="list3_heading">100+</h3>
                <p class="list3_pharagraph>">Berita Magang</p>
            </div>
        </div>
    </div>

    <!-- Main section -->
    <div class="main_page" id="main_page">
        <div class="main_container">
            <h2 class="main_heading">Pilihan sektor Industri</h2>
            <p class="main_desk">
                Di sini kamu dapat memilih sektor industri yang sesuai dengan
                keinginanmu loh!
            </p>
            <div class="group_content">
                <div class="main_group">
                    <img src="./img_home//teknologi.jpg" alt="none" class="rounded-4"
                        style="width: 320px; height: 320px" />
                    <h3 class="desk_img">Teknologi</h3>
                </div>
                <div class="main_group">
                    <img src="./img_home/Kesehatan dan pelayanan.jpg" alt="none" class="rounded-4"
                        style="width: 320px; height: 320px" />
                    <h3 class="desk_img">Kesehatan dan Pelayanan</h3>
                </div>
                <div class="main_group">
                    <img src="./img_home/Jasa-jasa.jpg" alt="none" class="rounded-4"
                        style="width: 320px; height: 320px" />
                    <h3 class="desk_img">Jasa-Jasa</h3>
                </div>
                <div class="main_group">
                    <img src="./img_home/bumn.png" alt="none" class="rounded-4" style="width: 320px; height: 320px" />
                    <h3 class="desk_img">Badan Usaha Milik Negara</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- internship section -->
    <div class="internship_page" id="internship_home">
        <div class="internship_container">
            <h2>Lowongan magang terkini</h2>
            <div class="internship_desc">
                <p class="text-muted">
                    Berikut lowongan magang terbaru yang dapat kami informasikan
                </p>
                <a class="internship_home_link" href="./intern/internship.php ">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="internship_group">
            <div class="card_container">
                <?php foreach ($magang as $row): ?>
                    <div class="card_content">
                        <a href="./intern/internshipcontent.php?id=<?= $row["id"]; ?>">
                            <div class="card_header">
                                <img src="./img_magang/<?= $row["logo"] ?>" alt="none" class="rounded-2"
                                    style="height: 60px; width: 60px" />
                                <div class="profile_card">
                                    <h5 class="card_heading">
                                        <?= $row["institusi"] ?>
                                    </h5>
                                    <p class="text-muted">
                                        <?= $row["alamat"] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="card_body">
                                <h5 class="intern_tittle">
                                    <?= $row["posisi"] ?>
                                </h5>
                                <p class="text-muted">Full Time</p>
                                <p class="intern_desc">
                                    <?= $row["informasi"] ?>
                                </p>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Features Section-->
    <div class="features_page" id="features_page">
        <div class="features_header">
            <h1>Artikel</h1>
        </div>
        <div class="features_desc">
            <p class="text-muted">Yuk baca dan simak artikel terbaru berikut ini</p>
            <a href="./frontend_user/articlecontent.html">Lihat Selengkapnya</a>
        </div>

        <div class="features_container">
            <?php foreach ($artikel as $row): ?>
                <div class="features_content">
                    <img src="./img_article/<?= $row["gambar"] ?>" alt="none" style="height: 270px; width: 430px" />
                    <div class="content_information">
                        <p class="text-muted">
                            <?= $row["tanggal"] ?>
                        </p>
                        <a class="content_link" href="./article/articlecontent.php?id=<?= $row["id"]; ?>">Lihat
                            Selengkapnya</a>
                    </div>
                    <h6 class="features_content_tittle">
                        <?= $row["judul"] ?>
                    </h6>
                    <p class="features_content_desc">
                        <?= $row["informasi"] ?>
                    </p>
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

    <script src="login.js"></script>
</body>

</html>