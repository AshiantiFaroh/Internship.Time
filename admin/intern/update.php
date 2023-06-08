<?php

require '../backend.php';

$id = $_GET["id"];

$intern = query("SELECT * FROM tbl_magang WHERE id = $id")[0];


if (isset($_POST['insert'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
        alert('Data berhasil diubah!');
        document.location.href = './intern.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal diubah!');
        </script>";
    }
}

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

        .navbar_container ul {
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

        .form_input {
            display: flex;
            align-items: start;
            justify-content: center;
            flex-direction: row;
            background-color: #fff;
            width: 1200px;
            max-height: 792px;
            padding: 40px;
            margin-top: 10rem;
            gap: 2rem;
        }

        .form_input ul {
            list-style: none;
            padding: 20px;
        }

        .section {
            width: auto;
            height: 100%;
        }

        .section ul {
            gap: 2rem;
        }

        .section li {
            font-size: 24px;
        }

        .insert_btn {
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

        .insert_btn:hover {
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
                        <a class="nav_item" href="./intern.php">Intern</a>
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



        <form action="" method="post">
            <div class="form_input">
                <div class="section">
                    <input type="hidden" id="id" name="id" value="<?= $intern["id"]; ?>"></input>
                    <ul>
                        <li>
                            <label for="institusi">institusi : </label>
                        </li>
                        <li>
                            <label for="linkwebsite">linkwebsite : </label>
                        </li>
                        <li>
                            <label for="sektor">sektor : </label>
                        </li>
                        <li>
                            <label for="posisi">posisi : </label>
                        </li>
                        <li>
                            <label for="alamat">alamat : </label>
                        </li>
                        <li>
                            <label for="durasi">durasi : </label>
                        </li>
                        <li>
                            <label for="isi">isi : </label>
                        </li>
                        <li>
                            <label for="informasi">informasi : </label>
                        </li>
                        <li>
                            <label for="logo">logo : </label>

                        </li>
                    </ul>
                </div>
                <div class="section">
                    <ul>
                        <li>
                            <input type="text" id="institusi" name="institusi"
                                value="<?= $intern["institusi"]; ?>"></input>
                        </li>
                        <li>
                            <input type="text" id="linkwebsite" name="linkwebsite"
                                value="<?= $intern["linkwebsite"]; ?>"></input>
                        </li>
                        <li>
                            <input type="text" id="sektor" name="sektor" value="<?= $intern["sektor"]; ?>"></input>
                        </li>
                        <li>
                            <input type="text" id="posisi" name="posisi" value="<?= $intern["posisi"]; ?>"></input>
                        </li>
                        <li>
                            <input type="text" id="alamat" name="alamat" value="<?= $intern["alamat"]; ?>"></input>
                        </li>
                        <li>
                            <input type="text" id="durasi" name="durasi" value="<?= $intern["durasi"]; ?>"></input>
                        </li>
                        <li>
                            <input type="text" id="isi" name="isi" value="<?= $intern["isi"]; ?>"></input>
                        </li>
                        <li>
                            <input type="text" id="informasi" name="informasi"
                                value="<?= $intern["informasi"]; ?>"></input>
                        </li>
                        <li>
                            <input type="text" id="logo" name="logo" value="<?= $intern["logo"]; ?>"></input>
                        </li>
                    </ul>
                    <Button class="insert_btn" name="insert">INSERT</Button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>