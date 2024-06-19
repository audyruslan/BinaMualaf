<?php
session_start();
require '../functions.php';

function tambah_kriteria($data)
{
    global $conn;
    $kriteria = $data['kriteria'];

    $query = "INSERT INTO tb_kriteria
				VALUES 
				('','$kriteria')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Data Kriteria
if (isset($_POST["tambah"])) {

    if (tambah_kriteria($_POST) > 0) {
        $_SESSION['status'] = "Data Kriteria";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../kriteria.php");
    } else {
        $_SESSION['status'] = "Data Kriteria";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../kriteria.php");
    }
}