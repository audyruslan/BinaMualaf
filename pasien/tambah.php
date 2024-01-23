<?php
session_start();
require '../functions.php';

function tambah_pasien($data)
{
    global $conn;

    $nama_lengkap = $data['nama_lengkap'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $alamat = $data['alamat'];

    $query = "INSERT INTO tb_pasien
				VALUES 
				('','$nama_lengkap','$jenis_kelamin','$alamat')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Data Menu
if (isset($_POST["tambah"])) {

    if (tambah_pasien($_POST) > 0) {
        $_SESSION['status'] = "Data Pasien";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../pasien.php");
    } else {
        $_SESSION['status'] = "Data Pasien";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../pasien.php");
    }
}