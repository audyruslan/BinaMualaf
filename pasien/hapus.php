<?php
session_start();
require '../functions.php';

$id = $_GET["id"];

if (hapus_pasien($id) > 0) {
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