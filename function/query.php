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

function cari($lowongan)
{
    $query = "SELECT * FROM tbl_magang WHERE sektor LIKE '%$lowongan%' ";
    return query($query);
}
?>