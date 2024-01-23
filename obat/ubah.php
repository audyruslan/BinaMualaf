<?php
session_start();
require '../functions.php';

function ubah_penyakit($data)
{
    global $conn;
    $id = $data["id"];
    $nama_obat = $data['nama_obat'];
    $ket_obat = $data['ket_obat'];

    $query = "UPDATE tb_obat
                SET
				nama_obat = '$nama_obat',
				ket_obat = '$ket_obat'
                WHERE id = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// Ubah Data
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah_penyakit($_POST) > 0) {
        $_SESSION['status'] = "Data Obat";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../obat.php");
    } else {
        $_SESSION['status'] = "Data Obat";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../obat.php");
    }
}