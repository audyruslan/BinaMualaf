<?php
session_start();
require '../functions.php';

function ubah($data)
{
    global $conn;
    $id = $data["id"];

    $nama_binaan = $data['nama_binaan'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $alamat = $data['alamat'];

    $query = "UPDATE tb_alternatif
                SET
                nama_binaan = '$nama_binaan',
                jenis_kelamin = '$jenis_kelamin',
                alamat = '$alamat'
                WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// Ubah Data
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        $_SESSION['status'] = "Data Alternatif";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Diubah";
        header("Location: ../alternatif.php");
    } else {
        $_SESSION['status'] = "Data Alternatif";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Diubah";
        header("Location: ../alternatif.php");
    }
}