<?php
session_start();
require '../functions.php';

function tambah_obat($data)
{
    global $conn;

    $nama_obat = $data['nama_obat'];
    $ket_obat = $data['ket_obat'];

    $query = "INSERT INTO tb_obat
				VALUES 
				('','$nama_obat','$ket_obat')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Data Menu
if (isset($_POST["tambah"])) {

    if (tambah_obat($_POST) > 0) {
        $_SESSION['status'] = "Data Obat";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../obat.php");
    } else {
        $_SESSION['status'] = "Data Obat";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../obat.php");
    }
}