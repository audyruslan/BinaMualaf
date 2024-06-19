<?php
session_start();
require '../functions.php';

$kriteria_id = $_GET["kriteria_id"];

if (hapus_kriteria($kriteria_id) > 0) {
    $_SESSION['status'] = "Data Gejala";
    $_SESSION['status_icon'] = "success";
    $_SESSION['status_info'] = "Berhasil Terkirim";
    header("Location: ../gejala.php");
} else {
    $_SESSION['status'] = "Data Gejala";
    $_SESSION['status_icon'] = "error";
    $_SESSION['status_info'] = "Gagal Terkirim";
    header("Location: ../gejala.php");
}