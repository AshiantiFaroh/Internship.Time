<?php
//set session

//koneksi
$conn = mysqli_connect("localhost", "root", "", "internship");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function regist($data)
{
    global $conn;
    $email = $data["emailInput"];
    $username = stripslashes($data["unameInput"]);
    $password = $data["passInput"];
    $password2 = $data["passInput2"];

    $result = mysqli_query($conn, "SELECT email FROM tbl_user WHERE email = '$email'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('Email sudah terdaftar');
        </script>";
        return false;
    }

    if ($password !== $password2) {
        echo "<script>
            alert('Konfirmasi password tidak sesuai!');
        </script>";
    }

    mysqli_query($conn, "INSERT INTO `tbl_user`(`id`, `email`, `username`, `password`) VALUES ('','$email','$username','$password')");

    return mysqli_affected_rows($conn);
}

function sesi($sesi)
{

}


?>