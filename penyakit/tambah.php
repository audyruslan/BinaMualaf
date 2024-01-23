<?php
session_start();
require '../functions.php';

function tambah_penyakit($data)
{
    global $conn;

    $nama_penyakit = $data['nama_penyakit'];

    $query = "INSERT INTO tb_penyakit
				VALUES 
				('','$nama_penyakit')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Data Menu
if (isset($_POST["tambah"])) {

    if (tambah_penyakit($_POST) > 0) {
        $_SESSION['status'] = "Data Penyakit";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../penyakit.php");
    } else {
        $_SESSION['status'] = "Data Penyakit";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../penyakit.php");
    }
}