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
            margin-top: 10rem;

        }

        .body span {
            color: #1a52e4;
        }

        .footer {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 1rem;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <div class="navbar">
            <div class="navbar_container">
                <ul>
                    <li>
                        <a class="nav_item" href="#">Home</a>
                    </li>
                    <li>
                        <a class="nav_item" href="./intern/intern.php">Intern</a>
                    </li>
                    <li>
                        <a class="nav_item" href="./article/article.php">Article</a>
                    </li>
                </ul>
                <div class="logout_btn">
                    <img src="./images/v422_17.png" style="height: 40px; width: 40px">
                    <a href="../index.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="home_page">
            <div class="home_container">
                <div class="header">
                    <div class="logo">
                        <img src="../img_home/Logo (1).png" style="height: 32px; width: 32px">
                        <a>Internship.time</a>
                    </div>
                </div>
                <div class="body">
                    <img src="./images/v422_10.png " style="height: 128px; width: 128px">
                    <h3>Haloo Admin<br>
                        Selamat datang di halaman administrator<br>
                        website <span>Internship.time</span></h3>
                </div>
                <div class="footer">
                    <p class="text-muted"> Date now :
                        <?= date("H: i: s A d/m/Y") ?>
                    </p>
                </div>
            </div>
        </div>
</body>

</html>