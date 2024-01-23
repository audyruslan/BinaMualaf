<?php
session_start();
require '../functions.php';

function ubah_menu($data)
{
    global $conn;

    $status = $data['status'];

    $query = "UPDATE tb_menu
                SET
				status = '$status'
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// Ubah Data
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["control"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah_menu($_POST) > 0) {
        $_SESSION['status'] = "Control Menu";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Diubah";
        header("Location: ../profile.php");
    } else {
        $_SESSION['status'] = "Control Menu";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Diubah";
        header("Location: ../profile.php");
    }
}