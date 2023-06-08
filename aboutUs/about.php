<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Internship.Time</title>
    <link rel="stylesheet" href="about.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
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
                        <a href="#" class="nav_links" target="_parent" id="about">About Us</a>
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

    <!-- zero -->
    <div class="zero_about" id="zero_about">
        <div class="zero_container">
            <div class="zero_wrapper">
                <h3>About Us</h3>
                <h1>
                    Kami Memberikan informasi yang sangat luas, terpercaya, akurat dan
                    up to date di seluruh wilayah indonesia
                </h1>
                <p>
                    Kami memberikan layanan berupa informasi kepada pengguna dengan
                    sangat luas, akurat dan <br />
                    up to date penguna dapat melihat informasi seputar dunia magang dan
                    beberapa artikel yang menarik untuk dibaca
                </p>
            </div>
            <div class="img_wrapper">
                <img src="../img_about/Group 11.png" alt="none" style="height: 450px; width: 1300px" />
            </div>
        </div>
    </div>

    <!-- information_about-->
    <div class="information_about" id="information_about">
        <div class="information_container">
            <div class="information_wrapper">
                <div class="content_header">
                    <h2>Keunggulan utama yang kami miliki</h2>
                    <p>
                        Berikut merupakan fitur-fitur utama yang kami miliki, fitur
                        tersebut kami merancang fitur tersebut supaya<br />
                        Pengguna kami mendapatkan pengalaman yang menyenangkan saat
                        mengunjungi website kami
                    </p>
                </div>
                <div class="content_body">
                    <div class="body_wrapper">
                        <div class="img_wrapp">
                            <img src="../img_about/newspaper (1) 1.png" alt="none" style="width: 50px; height: 50px" />
                        </div>
                        <div class="text_wrapp">
                            <h5>Berbagai artikel menarik</h5>
                            <p>
                                Kami menyediakan fitur Artikel yang berguna untuk pengguna
                                dalam memperdalam ilmu pengetahuan seputar dunia pendidikan
                                atau self development
                            </p>
                        </div>
                    </div>
                    <div class="body_wrapper">
                        <div class="img_wrapp">
                            <img src="../img_about/🦆 icon _News_.png" alt="none" style="width: 50px; height: 50px" />
                        </div>
                        <div class="text_wrapp">
                            <h5>Informasi yang lengkap</h5>
                            <p>
                                Kami memberikan berbagai informasi lengkap dan up to date
                                seputar dunia magang yang sudah kami ringkaskan sehingga
                                pengguna dapat dengan mudah mendapatkan informasi lowongan
                                magang yang akan dicari
                            </p>
                        </div>
                    </div>
                    <div class="body_wrapper">
                        <div class="img_wrapp">
                            <img src="../img_about/🦆 icon _App connectivity_.png" alt="none"
                                style="width: 50px; height: 50px" />
                        </div>
                        <div class="text_wrapp">
                            <h5>Konektifitas yang luas</h5>
                            <p>
                                Kami memberikan berbagai informasi lengkap dan up to date
                                seputar dunia magang yang sudah kami ringkaskan sehingga
                                pengguna dapat dengan mudah mendapatkan informasi lowongan
                                magang yang akan dicari
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- visi misi webs -->
    <div class="goals_page" id="goals_page">
        <div class="goals_container">
            <div class="goals_wrapper">
                <div class="goals_header">
                    <h2>Our Mission</h2>
                </div>
                <div class="goals_body">
                    <p>
                        Mendekatkan dunia pendidikan dan industri dengan menawarkan
                        program-program yang terus berkembang. Mempercepat hal tersebut
                        melalui optimaslisasi pelatihan. Membuat peningkatan keterampilan
                        lebih mudah, cepat, dan murah, dan juga Membangun SDM profesional
                        yang berkualitas tinggi dan memiliki karakter esensial untuk
                        mengatasi tantangan di era globalisasi, serta tetap memiliki
                        kewajiban moral untuk membangun bangsa.
                    </p>
                </div>
                <div class="goals_footer">
                    <p>Find Us On :</p>
                    <div class="img_goals_wrapp">
                        <img src="../img_about/🦆 icon _Instagram_.png" alt="none" style="width: 35px; height: 35px" />
                    </div>
                    <div class="img_goals_wrapp">
                        <img src="../img_about/Vector.png" alt="none" style="width: 35px; height: 30px" />
                    </div>
                    <div class="img_goals_wrapp">
                        <img src="../img_about/🦆 icon _Facebook F_.png" alt="none" style="width: 30px; height: 35px" />
                    </div>
                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>