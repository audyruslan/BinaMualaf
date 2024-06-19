<?php
session_start();
require '../functions.php';

function tambah($data)
{
    global $conn;

    // Ambil Data Testing
    $sqlTesting = mysqli_query($conn, "SELECT * FROM tb_testing");
    $testingData = mysqli_fetch_assoc($sqlTesting);

    $alternatif_id = $testingData['alternatif_id'];
    $Data2 = $testingData['status_binaan'];
    $Data3 = $testingData['nilai_ujian'];
    $Data4 = $testingData['mualaf'];
    $Data5 = $testingData['status_pekerjaan'];
    $Data6 = $testingData['jmlh_tanggungan'];

    $kelayakan = $data["kelayakan"];

    // Insert Data Training
    $sqlTraining = "INSERT INTO tb_training (alternatif_id, status_binaan, nilai_ujian, mualaf, status_pekerjaan, jmlh_tanggungan, kelayakan)
                    VALUES ('$alternatif_id', '$Data2', '$Data3', '$Data4', '$Data5', '$Data6','$kelayakan')";
    mysqli_query($conn, $sqlTraining);

    // Hapus Data Tabel Testing
    mysqli_query($conn, "TRUNCATE TABLE tb_testing");

    return mysqli_affected_rows($conn);
}

//Data Menu
if (isset($_POST["simpan"])) {

    if (tambah($_POST) > 0) {
        $_SESSION['status'] = "Data Baru";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../data_training.php");
    } else {
        $_SESSION['status'] = "Data Baru";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../data_training.php");
    }
}
