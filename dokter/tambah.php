<?php
session_start();
require '../functions.php';

function tambah_dokter($data)
{
    global $conn;

    $nama_dokter = $data['nama_dokter'];
    $spesialis = $data['spesialis'];
    $no_hp = $data['no_hp'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $alamat = $data['alamat'];

    $query = "INSERT INTO tb_dokter
				VALUES 
				('','$nama_dokter','$spesialis','$no_hp','$jenis_kelamin','$alamat')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Data Menu
if (isset($_POST["tambah"])) {

    if (tambah_dokter($_POST) > 0) {
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
}