<?php
session_start();
date_default_timezone_set('Asia/Ujung_Pandang');
require '../functions.php';

function ubah_blog($data)
{
    global $conn;

    $id = $data["id"];
    $judul_blog = $data['judul_blog'];
    $content = $data["content"];
    $tgl_blog = date("Y-m-d");
    $time_blog = date("H:i:s");

    // Upload Image Lama
    $imgLama = $data["imgLama"];

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['img_blog']['error'] === 4) {
        $query = "UPDATE tb_blog
                SET	
                judul_blog = '$judul_blog',
                content = '$content',
                tgl_blog = '$tgl_blog',
                time_blog = '$time_blog',
                img_blog = '$imgLama'
                WHERE id = $id
			";
    } else {
        if (file_exists("../assets/img/blog/$imgLama")) {
            unlink("../assets/img/blog/$imgLama");
        }
        $img_blog = image_blog();
        $query = "UPDATE tb_blog
                SET
				judul_blog = '$judul_blog',
                content = '$content',
                tgl_blog = '$tgl_blog',
                time_blog = '$time_blog',
                img_blog = '$img_blog'
                WHERE id = $id
			";
    }
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// Ubah Data
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah_blog($_POST) > 0) {
        $_SESSION['status'] = "Data Blog";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Diubah!";
        header("Location: ../blog.php");
    } else {
        $_SESSION['status'] = "Data Blog";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Diubah!";
        header("Location: ../blog.php");
    }
}