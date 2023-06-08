<?PHP
session_start();

require '../function/query.php';

$artikel = query("SELECT * FROM tbl_artikel WHERE id < 14");
$artikel2 = query("SELECT * FROM artikel_card WHERE id < 3");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Internship.Time</title>
    <link rel="stylesheet" href="article.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header id="home_page">
        <nav class="navbar">
            <div class="navbar_container">
                <a href="#" id="nav_logo">
                    <img src="../img_home/Logo (1).png" alt="none" style="height: 32px; width: 32px" />
                    <p>Internship.Time</p>
                </a>
                <ul class="nav_menu">
                    <li class="nav_item">
                        <a href="../index.php" target="_parent" class="nav_links" id="home">Home</a>
                    </li>
                    <li class="nav_item">
                        <a href="../intern/internship.php" target="_parent" class="nav_links" id="magang">Internship</a>
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

    <!-- main content-->

    <div class="main_article_page" id="main_article_content">
        <div class="article_container">
            <?php foreach ($artikel as $row): ?>
                <div class="article_wrapper">
                    <div class="img_article_wrapper">
                        <img src="../img_article/<?= $row["gambar"] ?>" class="rounded-3"
                            style="width: 400px; height: 250px" />
                    </div>
                    <div class="text_article_wrapper">
                        <h3>
                            <?= $row["judul"] ?>
                        </h3>
                        <p class="text-muted">
                            <?= $row["penulis"] ?>
                        </p>
                        <p>
                            <?= $row["informasi"] ?>
                        </p>
                        <a href="./articlecontent.php?id=<?= $row["id"] ?>"><button class="btn_article">Read
                                More</button></a>
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
</body>

</html>