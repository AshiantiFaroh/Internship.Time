<?php

require '../backend.php';

$jumlahdataitem = 4;
$jumlahdata = count(query("SELECT * FROM tbl_magang"));
$jumlahhalaman = ceil($jumlahdata / $jumlahdataitem);
$halamanaktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$dataawal = ($jumlahdataitem * $halamanaktif) - $jumlahdataitem;

$intern = query("SELECT * FROM tbl_magang LIMIT $dataawal, $jumlahdataitem");


?>


<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="UTF8" />
    <meta httpequiv="XUACompatible" content="IE=edge" />
    <meta name="viewport" content="width=devicewidth, initialscale=1.0" />
    <title>Internship.Time</title>
    <link rel="stylesheet" href="./main.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .wrapper {
            width: 100%;
            height: 791px;
            display: flex;
            flex-direction: row;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 200px;
            height: 100%;
            background: rgb(26, 82, 228);
            opacity: 1;
            top: 0px;
            left: 0px;
        }

        .navbar_container {
            width: 180px;
            height: 95%;
            /* background-color: aliceblue; */
        }

        ul {
            display: flex;
            width: 100%;
            height: 90%;
            flex-direction: column;
            align-items: center;
            list-style: none;
            /* background-color: antiquewhite; */
            padding: 0;
            padding-top: 130px;
            gap: 4rem;
        }

        .nav_item {
            color: #fff;
            font-size: 20px;
            font-family: sans-serif;
            font-weight: 500;
            text-transform: uppercase;
            list-style: none;
            text-decoration: none;
        }

        .nav_item:hover {
            cursor: pointer;
            color: #000;
            letter-spacing: 1.5px;
        }

        .logout_btn {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 5px;
            margin-left: 1.5rem;
        }

        .logout_btn a {
            font-size: 20px;
            font-weight: 500;
            color: #fff;
            text-decoration: none;
        }

        .logout_btn:hover {
            filter: drop-shadow(5px 5px 10px #000000);
        }

        .home_page {
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            width: 100%;
            background-color: #fff;
            padding: 20px;
        }

        .home_container {
            /* background-color: beige; */
            width: 100%;
            height: 100%;
            padding: 20px;
        }

        .body {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            /* background-color: #000000; */
            gap: .3rem;
            text-align: center;
            margin-top: 5rem;

        }

        .body span {
            color: #1a52e4;
        }

        .footer {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 1rem;
            gap: 1.5rem;
        }

        .btn_tool {
            display: flex;
            color: #fff;
            background-color: #1a52e4;
            font-size: 1rem;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            justify-content: center;
            height: 45px;
            /* border: 2px solid #1a52e4; */
            border-radius: 0.75em;
            padding: .65em 1.5em;
            margin-top: .2rem;
        }

        .btn_tool:hover {
            border: none;
            background-color: #000;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="navbar">
            <div class="navbar_container">
                <ul>
                    <li>
                        <a class="nav_item" href="../home.php">Home</a>
                    </li>
                    <li>
                        <a class="nav_item" href="#">Intern</a>
                    </li>
                    <li>
                        <a class="nav_item" href="../article/article.php">Article</a>
                    </li>
                </ul>
                <div class="logout_btn">
                    <img src="../images/v422_17.png" style="height: 40px; width: 40px">
                    <a href="#">Logout</a>
                </div>
            </div>
        </div>


        <div class="home_page">
            <div class="home_container">
                <div class="header">
                    <div class="logo">
                        <img src="../images/Logo (1).png" style="height: 32px; width: 32px">
                        <a>Internship.time</a>
                    </div>
                </div>
                <div class="body">
                    <table border="2" cellpadding="5" cellspacing="0">
                        <tr>
                            <th>No</th>
                            <th>Aksi</th>
                            <th>Institusi</th>
                            <th>Link</th>
                            <th>Sektor</th>
                            <th>posisi</th>
                            <th>alamat</th>
                            <th>durasi</th>
                            <th>isi</th>
                            <th>informasi</th>
                            <th>logo</th>
                        </tr>
                        <?php $i = 1 ?>
                        <?php foreach ($intern as $row): ?>
                            <tr>
                                <td>
                                    <?= $i; ?>
                                </td>
                                <td>
                                    <a href="update.php?id=<?= $row["id"]; ?>">Edit</a> |
                                    <a href="hapus.php?id=<?= $row["id"]; ?>"
                                        onclick="return confirm('APAKAH ANDA YAKIN UNTUK MENGHAPUS DATA?');">hapus</a>
                                </td>
                                <td>
                                    <?= $row["institusi"]; ?>
                                </td>
                                <td>
                                    <?= $row["linkwebsite"]; ?>
                                </td>
                                <td>
                                    <?= $row["sektor"]; ?>
                                </td>
                                <td>
                                    <?= $row["posisi"]; ?>
                                </td>
                                <td>
                                    <?= $row["alamat"]; ?>
                                </td>
                                <td>
                                    <?= $row["durasi"]; ?>
                                </td>
                                <td>
                                    <?= substr($row["isi"], 0, 50) ?>
                                </td>
                                <td>
                                    <?= substr($row["informasi"], 0, 50) ?>
                                </td>
                                <td>
                                    <img src="../img_magang/<?= $row["logo"]; ?>" style="width: 50px; height: 50px;  ">

                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </table>
                </div>
                <!-- Pagenation -->
                <?php if ($halamanaktif > 1): ?>
                    <a href="?halaman=<?= $halamanaktif - 1 ?>">&lt;</a>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $jumlahhalaman; $i++): ?>
                    <?php if ($i == $halamanaktif): ?>
                        <a href="?halaman=<?= $i ?>" style="color: blue;"><?= $i; ?></a>
                    <?php else: ?>
                        <a href="?halaman=<?= $i ?>" style="color: black;"><?= $i; ?></a>
                    <?php endif; ?>
                <?php endfor; ?>
                <div class="footer">
                    <a class="btn_tool" href="./internAksi.php">INPUT</a>
                </div>
            </div>
        </div>
</body>

</html>