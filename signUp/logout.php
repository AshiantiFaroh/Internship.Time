<?php

if (isset($_POST['logout'])) {
    session_start();
    session_destroy();
    session_unset();
    header("Location: ../index.php");
}

if (isset($_POST['cancel'])) {
    header("Location: ../index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .wrapper {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            margin-top: 2rem;
        }

        button {
            width: 100px;
            height: 40px;
            font-size: 17px;
            padding: 0.5em 1em;
            border: transparent;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
            background: #116399;
            color: white;
            border-radius: 8px;
            margin-top: .5rem;
        }

        button:hover {
            background-color: black;
        }
    </style>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Internship.Time</title>
        <link rel="stylesheet" href="login.css" />
        <style>
        </style>
    </head>

    <body>
        <form action="" method="post">
            <div class="container">
                <h3>APAKAH ANDA YAKIN UNTUK LOGOUT ?</h3>
                <div class="wrapper">
                    <button name="cancel">cancel</button>
                    <button name="logout">logout</button>
                </div>
            </div>
        </form>
    </body>

    </html>
</body>

</html>