<?php
session_start();
require '../functions.php';

function tambah_ruangan($data)
{
        global $conn;

        $nama_ruangan = $data['nama_ruangan'];
        $jumlah_pasien = $data['jumlah_pasien'];
        $jam_besuk = $data['jam_besuk'];

        $query = "INSERT INTO tb_ruangan
				VALUES 
				('','$nama_ruangan','$jumlah_pasien','$jam_besuk')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

//Data Menu
if (isset($_POST["tambah"])) {

        if (tambah_ruangan($_POST) > 0) {
                $_SESSION['status'] = "Data Penyakit";
                $_SESSION['status_icon'] = "success";
                $_SESSION['status_info'] = "Berhasil Terkirim";
                header("Location: ../ruangan.php");
        } else {
                $_SESSION['status'] = "Data Penyakit";
                $_SESSION['status_icon'] = "error";
                $_SESSION['status_info'] = "Gagal Terkirim";
                header("Location: ../ruangan.php");
        }
}