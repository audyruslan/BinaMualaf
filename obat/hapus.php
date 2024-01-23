<?php
session_start();
require '../functions.php';

$id = $_GET["id"];

if (hapus_obat($id) > 0) {
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