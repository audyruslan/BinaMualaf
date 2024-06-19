<?php
session_start();
require '../functions.php';

function tambah_training($data)
{
    global $conn;
    $alternatif_id = $data['alternatif_id'];
    $status_binaan = $data['status_binaan'];
    $nilai_ujian = $data['nilai_ujian'];
    $mualaf = $data['mualaf'];
    $status_pekerjaan = $data['status_pekerjaan'];
    $jmlh_tanggungan = $data['jmlh_tanggungan'];
    $kelayakan = $data['kelayakan'];

    $query = "INSERT INTO tb_training
				VALUES 
				('','$alternatif_id','$status_binaan','$nilai_ujian','$mualaf','$status_pekerjaan','$jmlh_tanggungan','$kelayakan')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Data Training
if (isset($_POST["tambah"])) {

    if (tambah_training($_POST) > 0) {
        $_SESSION['status'] = "Data Training";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Ditambahkan!";
        header("Location: ../data_training.php");
    } else {
        $_SESSION['status'] = "Data Training";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Ditambahkan!";
        header("Location: ../data_training.php");
    }
}