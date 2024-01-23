<?php
session_start();
require '../functions.php';

function tambah ($data)
{
    global $conn;

    // Data Alternatif
    $nama_binaan = $data['nama_binaan'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $alamat = $data['alamat'];

    // Insert Data Alternatif
    $query = "INSERT INTO tb_alternatif
                VALUES 
                ('','$nama_binaan','$jenis_kelamin','$alamat')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Data Menu
if (isset($_POST["tambah"])) {

    if (tambah($_POST) > 0) {
        $_SESSION['status'] = "Data Alternatif";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../alternatif.php");
    } else {
        $_SESSION['status'] = "Data Alternatif";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../alternatif.php");
    }
}