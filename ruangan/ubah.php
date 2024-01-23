<?php
session_start();
require '../functions.php';

function ubah_ruangan($data)
{
    global $conn;
    $id = $data["id"];
    $nama_ruangan = $data['nama_ruangan'];
    $jumlah_pasien = $data['jumlah_pasien'];
    $jam_besuk = $data['jam_besuk'];

    $query = "UPDATE tb_ruangan
                SET
				nama_ruangan = '$nama_ruangan',
				jumlah_pasien = '$jumlah_pasien',
				jam_besuk = '$jam_besuk'
                WHERE id = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// Ubah Data
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah_ruangan($_POST) > 0) {
        $_SESSION['status'] = "Data Ruangan";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../ruangan.php");
    } else {
        $_SESSION['status'] = "Data Ruangan";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../ruangan.php");
    }
}