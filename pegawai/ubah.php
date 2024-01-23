<?php
session_start();
require '../functions.php';

function ubah_pegawai($data)
{
    global $conn;
    $id = $data["id"];
    $nik = $data['nik'];
    $nama_lengkap = $data['nama_lengkap'];
    $tmp_lahir = $data['tmp_lahir'];
    $tgl_lahir = $data['tgl_lahir'];
    $riwayat_pendidikan = $data['riwayat_pendidikan'];
    $jabatan = $data['jabatan'];
    $status_pgw = $data['status_pgw'];

    $query = "UPDATE tb_pegawai
                SET
				nik = '$nik',
				nama_lengkap = '$nama_lengkap',
				tmp_lahir = '$tmp_lahir',
				tgl_lahir = '$tgl_lahir',
				riwayat_pendidikan = '$riwayat_pendidikan',
				jabatan = '$jabatan',
				status_pgw = '$status_pgw'
                WHERE id = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// Ubah Data
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah_pegawai($_POST) > 0) {
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