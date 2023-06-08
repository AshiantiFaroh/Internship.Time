<?php
//koneksi
// $conn = mysqli_connect("localhost", "root", "", "internship");
require './function.php';

//ambil data
if (isset($_POST["regist"])) {
    if (regist($_POST) > 0) {
        echo
            "<script>
            alert('REGISTRASI BERHASIL')
            document.location.href = 'login.php';
        </script>
        ";
    }
    $error = true;
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
                <h3>Register</h3>
            </div>

            <?php if (isset($error)): ?>
                <p style="color: red; font-style: italic; font-weight: 500; ">REGISTRASI GAGAL !</p>
            <?php endif; ?>

            <div class="form__group field">
                <input placeholder="Username" id="unameInputUser" name="unameInput" class="form__field" type="text" />
                <label class="form__label" for="unameInputUser">Username</label>
            </div>
            <div class="form__group field">
                <input placeholder="Email" id="emailInputUser" name="emailInput" class="form__field" type="text" />
                <label class="form__label" for="emailInputUser">Email</label>
            </div>
            <div class="form__group field">
                <input required="" placeholder="Password" id="passInputUser" name="passInput" class="form__field"
                    type="password" />
                <label class="form__label" for="passInputUser">Password</label>
            </div>
            <div class="form__group field">
                <input required="" placeholder="Confirm Password" id="passInputUser2" name="passInput2"
                    class="form__field" type="password" />
                <label class="form__label" for="passInputUser2">Confirm Password</label>
            </div>
            <div class="submit_btn">
                <input id="sbmt_btn" type="submit" name="regist" />
            </div>
            <div class="cancel_btn">
                <a href="../index.php" id="cancel_btn">Back</a>
            </div>
            <div class="regist_btn">
                <a href="./login.php">have an account?<span> Login!</span> </a>
            </div>
        </form>
    </div>
</body>

</html>