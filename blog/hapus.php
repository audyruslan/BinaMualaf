<?php
session_start();
require '../functions.php';

$id = $_GET["id"];

// Query Tabel Database
$sql = mysqli_query($conn, "SELECT * FROM tb_blog
                    WHERE id = '$id'");
$row = mysqli_fetch_assoc($sql);

// Delete Image Database
$img_blog = $row["img_blog"];
if (file_exists("../assets/img/blog/$img_blog")) {
    unlink("../assets/img/blog/$img_blog");
}

if (hapus_blog($id) > 0) {
    $_SESSION['status'] = "Data Blog";
    $_SESSION['status_icon'] = "success";
    $_SESSION['status_info'] = "Berhasil Dihapus";
    header("Location: ../blog.php");
} else {
    $_SESSION['status'] = "Data Blog";
    $_SESSION['status_icon'] = "error";
    $_SESSION['status_info'] = "Gagal Dihapus";
    header("Location: ../blog.php");
}