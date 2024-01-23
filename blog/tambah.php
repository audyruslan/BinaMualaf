<?php
session_start();
date_default_timezone_set('Asia/Ujung_Pandang');
require '../functions.php';

function tambah_blog($data)
{
    global $conn;

    $judul_blog = $data['judul_blog'];
    $content = $data["content"];
    $tgl_blog = date("Y-m-d");
    $time_blog = date("H:i:s");
    // Upload Image Blog
    $img_blog = image_blog();

    $query = "INSERT INTO tb_blog
            VALUES 
            ('','$judul_blog','$content','$tgl_blog','$time_blog','$img_blog')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Data Menu
if (isset($_POST["tambah"])) {

    if (tambah_blog($_POST) > 0) {
        $_SESSION['status'] = "Data Blog";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../blog.php");
    } else {
        $_SESSION['status'] = "Data Blog";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../blog.php");
    }
}