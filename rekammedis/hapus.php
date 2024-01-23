<?php
session_start();
require '../functions.php';

$id = $_GET["id"];
// Hapus Data Training dan Tabel Gejala Training
mysqli_query($conn, "DELETE FROM tb_training WHERE id_rm = '$id'");

if (hapus_rekammedis($id) > 0) {
    $_SESSION['status'] = "Data Rekam Medis";
    $_SESSION['status_icon'] = "success";
    $_SESSION['status_info'] = "Berhasil Terkirim";
    header("Location: ../rekammedis.php");
} else {
    $_SESSION['status'] = "Data Rekam Medis";
    $_SESSION['status_icon'] = "error";
    $_SESSION['status_info'] = "Gagal Terkirim";
    header("Location: ../rekammedis.php");
}