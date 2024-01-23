<?php
session_start();
require '../functions.php';

function ubah_dokter($data)
{
    global $conn;
    $id = $data["id"];
    $nama_dokter = $data['nama_dokter'];
    $spesialis = $data['spesialis'];
    $no_hp = $data['no_hp'];
    $jenis_kelamin = $data['jenis_kelamin'];  
    $alamat = $data['alamat'];

    $query = "UPDATE tb_dokter
                SET
				nama_dokter = '$nama_dokter',
				spesialis = '$spesialis',
				no_hp = '$no_hp',
				jenis_kelamin = '$jenis_kelamin',
				alamat = '$alamat'
                WHERE id = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// Ubah Data
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah_dokter($_POST) > 0) {
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