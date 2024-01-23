<?php
session_start();
require '../functions.php';

function ubah_pasien($data)
{
    global $conn;
    $id = $data["id"];
    $nama_lengkap = $data['nama_lengkap'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $alamat = $data['alamat'];

    $query = "UPDATE tb_pasien
                SET
				nama_lengkap = '$nama_lengkap',
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
    if (ubah_pasien($_POST) > 0) {
        $_SESSION['status'] = "Data Pasien";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../pasien.php");
    } else {
        $_SESSION['status'] = "Data Pasien";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../pasien.php");
    }
}