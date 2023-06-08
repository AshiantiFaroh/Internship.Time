<?php
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

function tambah($intern)
{
    global $conn;
    $institusi = $intern["institusi"];
    $link = $intern["linkwebsite"];
    $sektor = $intern["sektor"];
    $posisi = $intern["posisi"];
    $alamat = $intern["alamat"];
    $durasi = $intern["durasi"];
    $isi = $intern["isi"];
    $informasi = $intern["informasi"];
    $logo = $intern["logo"];

    $querry = mysqli_query($conn, "INSERT INTO `tbl_magang`(`id`, `institusi`, `linkwebsite`, `sektor`, `posisi`, `alamat`, `durasi`, `isi`, `informasi`, `logo`) 
            VALUES 
            ('','$institusi','$link','$sektor','$posisi','$alamat','$durasi','$isi','$informasi','$logo')");
    return mysqli_affected_rows($conn);
}
function tambah2($article)
{
    global $conn;
    $judul = $article["judul"];
    $penulis = $article["penulis"];
    $tanggal = $article["tanggal"];
    $informasi = $article["informasi"];
    $isi = $article["isi"];
    $gambar = $article["gambar"];

    $querry = mysqli_query($conn, "INSERT INTO `tbl_artikel`(`id`, `judul`, `penulis`, `tanggal`, `informasi`, `isi`, `gambar`) 
            VALUES 
            ('','$judul','$penulis','$tanggal','$informasi','$isi','$gambar')");
    return mysqli_affected_rows($conn);
}
function ubah($intern)
{
    global $conn;
    $id = $intern["id"];
    $institusi = $intern["institusi"];
    $link = $intern["linkwebsite"];
    $sektor = $intern["sektor"];
    $posisi = $intern["posisi"];
    $alamat = $intern["alamat"];
    $durasi = $intern["durasi"];
    $isi = $intern["isi"];
    $informasi = $intern["informasi"];
    $logo = $intern["logo"];

    $query = "UPDATE tbl_magang SET
                institusi = '$institusi',
                linkwebsite = '$link',
                sektor = '$sektor',
                posisi = '$posisi',
                alamat = '$alamat',
                durasi = '$durasi',
                isi = '$isi',
                informasi = '$informasi',
                logo = '$logo'
            WHERE id = $id
        ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_magang WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function hapus2($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_artikel WHERE id = $id");
    return mysqli_affected_rows($conn);
}
?>