<?php
session_start();
require '../functions.php';

function tambah_pegawai($data)
{
    global $conn;

    $nik = $data['nik'];
    $nama_lengkap = $data['nama_lengkap'];
    $tmp_lahir = $data['tmp_lahir'];
    $tgl_lahir = $data['tgl_lahir'];
    $riwayat_pendidikan = $data['riwayat_pendidikan'];
    $jabatan = $data['jabatan'];
    $status_pgw = $data['status_pgw'];

    $query = "INSERT INTO tb_pegawai
				VALUES 
				('','$nik','$nama_lengkap','$tmp_lahir','$tgl_lahir','$riwayat_pendidikan','$jabatan','$status_pgw')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Data Menu
if (isset($_POST["tambah"])) {

    if (tambah_pegawai($_POST) > 0) {
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
}