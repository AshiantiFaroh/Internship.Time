<?php
session_start();



require './function.php';

if (isset($_POST["login"])) {
    $email = $_POST["emailInput"];
    $password = $_POST["passInput"];

    $result = mysqli_query($conn, "SELECT * FROM tbl_user WHERE email = '$email'");
    $resultpass = mysqli_query($conn, "SELECT * FROM tbl_user WHERE password = '$password' ");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        // var_dump($row);
        if ($resultpass) {
            $_SESSION["login"] = true;
            $_SESSION['username'] = $row['username'];
            header("Location: ../index.php");
            exit;
        } else {
            $error = true;
        }
        // if (password_verify($password, $row["password"])) {
        //     header("location : index.php");
        //     
        // }

    }
    if ($email === "admin" && $password === "admin123") {
        header("Location: ../admin/home.php");
        exit;
    }
    // <?php if (!isset($resultpass)): 
    //     <p style="color: red; font-style:italic; ">Email atau Password salah</p>
    // <?php endif; 

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Internship.Time</title>
    <link rel="stylesheet" href="login.css" />
    <style>
        .submit_btn input {
            width: 100%;
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
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="post" id="login">
            <div class="title">
                <h3>Login</h3>
            </div>
            <?php if (isset($_SESSION["login"])): ?>
                <p style="color: red; font-style:italic; ">Anda sudah login</p>
            <?php endif; ?>
            <?php if (isset($error)): ?>
                <p style="color: red; font-style:italic; ">Email salah</p>
            <?php endif; ?>
            <div class="form__group field">
                <input placeholder="Email" id="emailInput" name="emailInput" class="form__field" type="text" />
                <label class="form__label" for="email">Email</label>
            </div>
            <div class="form__group field">
                <input required="" placeholder="Password" id="passInput" name="passInput" class="form__field"
                    type="password" />
                <label class="form__label" for="password">Password</label>
            </div>
            <div class="submit_btn">
                <input id="sbmt_btn" type="submit" name="login" />
            </div>
            <div class="cancel_btn">
                <a href="../index.php" id="cancel_btn">Back</a>
            </div>
            <div class="regist_btn">
                <a href="./regist.php">don't have an account?<span> Register!</span>
                </a>
            </div>
        </form>
    </div>
</body>

</html>