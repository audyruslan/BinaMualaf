<?php
session_start();
require '../functions.php';

$id = $_GET["id"];

// Hapus Data Alternatif
function hapus_alternatif($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_alternatif WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

if (hapus_alternatif($id) > 0) {
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