<?php
session_start();

require '../function/query.php';

$magang = query("SELECT * FROM tbl_magang WHERE id < 107");

if (isset($_POST["search"])) {
    $magang = cari($_POST["lowongan"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Internship.Time</title>
    <link rel="stylesheet" href="internship.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        form {
            background-color: #fff;
            display: flex;
            align-items: last baseline;
            justify-content: center;
            width: 100%;
            height: 200px;
        }
    </style>
</head>

<body>
    <header id="home_page">
        <nav class="navbar">
            <div class="navbar_container">
                <a href="#" id="nav_logo">
                    <img src="../img_magang/Logo (1).png" alt="none" style="height: 32px; width: 32px" />
                    <p>Internship.Time</p>
                </a>
                <ul class="nav_menu">
                    <li class="nav_item">
                        <a href="../index.php" target="_parent" class="nav_links" id="home">Home</a>
                    </li>
                    <li class="nav_item">
                        <a href="#" target="_parent" class="nav_links" id="magang">Internship</a>
                    </li>
                    <li class="nav_item">
                        <a href="../article/article.php" class="nav_links" target="_parent" id="article">Article</a>
                    </li>
                    <li class="nav_item">
                        <a href="../aboutUs/about.php" class="nav_links" target="_parent" id="about">About Us</a>
                    </li>
                    <li class="sesi">
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
    <div class="searching_page" id="searching_page">
        <form action="" method="post">
            <div class="searching_section">
                <input type="text" placeholder="Cari Lowongan Magang " name="lowongan" class="search_placeholder" />
            </div>
            <div class="btn_search">
                <input type="submit" class="search_btn" value="Search" name="search" />
            </div>
        </form>
    </div>

    <!-- content internship page -->

    <div class="internship_content_page" id="internship_content_page">
        <div class="internship_container">
            <div class="content_container">
                <?php foreach ($magang as $row): ?>
                    <div class="content_wrapper">
                        <div class="card_header">
                            <img src="../img_magang/<?= $row["logo"] ?>" alt="none" class="rounded-2"
                                style="height: 60px; width: 60px" />
                            <div class="profile_card">
                                <h4 class="card_heading">
                                    <?= $row["institusi"] ?>
                                </h4>
                                <p class="text-muted">
                                    <?= $row["alamat"] ?>
                                </p>
                            </div>
                        </div>
                        <div class="card_body">
                            <a href="./internshipcontent.php?id=<?= $row["id"]; ?>">
                                <h4 class="intern_tittle">
                                    <?= $row["posisi"] ?>
                                </h4>
                                <p class="text-muted">Full Time</p>
                                <p class="intern_desc">
                                    <?= $row["informasi"] ?>
                                </p>
                                <p>Selama 4 bulan</p>
                            </a>
                        </div>
                        <div class="card_footer">
                            <img src="../img_home/🦆 icon _calendar_.png" alt="none" style="height: 20px; width: 20px" />
                            <p>Diperbarui 4 bulan</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
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
</body>

</html>