<?php
session_start();
require '../functions.php';

$id = $_GET["id"];

if (hapus_pegawai($id) > 0) {
    $_SESSION['status'] = "Data Pegawai";
    $_SESSION['status_icon'] = "success";
    $_SESSION['status_info'] = "Berhasil Terkirim";
    header("Location: ../pegawai.php");
} else {
    $_SESSION['status'] = "Data Pegawai";
    $_SESSION['status_icon'] = "error";
    $_SESSION['status_info'] = "Gagal Terkirim";
    header("Location: ../pegawai.php");
}