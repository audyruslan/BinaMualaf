<?php
session_start();
require '../functions.php';

$id = $_GET["id"];

if (hapus_dokter($id) > 0) {
    $_SESSION['status'] = "Data Dokter";
    $_SESSION['status_icon'] = "success";
    $_SESSION['status_info'] = "Berhasil Terkirim";
    header("Location: ../dokter.php");
} else {
    $_SESSION['status'] = "Data Dokter";
    $_SESSION['status_icon'] = "error";
    $_SESSION['status_info'] = "Gagal Terkirim";
    header("Location: ../dokter.php");
}