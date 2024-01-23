<?php
session_start();
date_default_timezone_set('Asia/Ujung_Pandang');
require '../functions.php';
 
function tambah($data)
{
    global $conn;

    // Ambil Data Testing dari Tabel Testing
    $query1 = mysqli_query($conn, "SELECT * FROM tb_testing");
    $testingData = mysqli_fetch_assoc($query1);
  
    $id_rm = $testingData['id_rm'];
    $tgl_masuk = date("Y-m-d");
    $jam_masuk = date("H:i:s");
    $id_pasien = $testingData['id_pasien'];
    $id_penyakit = $data['id_penyakit'];
    $id_dokter = $testingData['id_dokter'];
    $id_obat = "";
    $id_ruangan = $testingData['id_ruangan'];
    $distance = "";

    // Insert Data Testing ke Tabel Training
    $query2 = "INSERT INTO tb_training VALUES 
    ('$id_rm','$id_pasien','$id_penyakit','$id_dokter','$id_obat','$id_ruangan','$distance')";
    mysqli_query($conn, $query2);
    
    // Insert Data Testing ke Tabel Rekammedis
    $query3 = "INSERT INTO tb_rekammedis VALUES 
    ('$id_rm','$tgl_masuk','','$jam_masuk','','$id_pasien','$id_penyakit','$id_dokter','$id_obat','$id_ruangan')";
    mysqli_query($conn, $query3);
   
    // Ambil Data Gejala Testing dari Tabel Gejala Testing
    $query4 = mysqli_query($conn, "SELECT * FROM tb_gejala_testing"); 
    $GtestingData = mysqli_fetch_array($query4);

    $G2 = $GtestingData[2];
    $G3 = $GtestingData[3];
    $G4 = $GtestingData[4];
    $G5 = $GtestingData[5];
    $G6 = $GtestingData[6];
    $G7 = $GtestingData[7];
    $G8 = $GtestingData[8];
    $G9 = $GtestingData[9];
    $G10 = $GtestingData[10];
    $G11 = $GtestingData[11];
    $G12 = $GtestingData[12];
    $G13 = $GtestingData[13];
    $G14 = $GtestingData[14];
    $G15 = $GtestingData[15];
    $G16 = $GtestingData[16];
    $G17 = $GtestingData[17];
    $G18 = $GtestingData[18];
    $G19 = $GtestingData[19];
    $G20 = $GtestingData[20];
    $G21 = $GtestingData[21];
    $G22 = $GtestingData[22];
    $G23 = $GtestingData[23];

    // Insert Data Gejala Training
    $query5 = "INSERT INTO tb_gejala_training
    VALUES 
    ('','$id_rm','$G2','$G3','$G4','$G5','$G6','$G7','$G8','$G9','$G10','$G11','$G12','$G13','$G14','$G15','$G16','$G17','$G18','$G19','$G20','$G21','$G22','$G23')";    
    mysqli_query($conn, $query5);

    // Insert Data Gejala Testing ke Tabel Rekammedis
    $query6 = "INSERT INTO tb_gejala_rm
    VALUES 
    ('','$id_rm','$G2','$G3','$G4','$G5','$G6','$G7','$G8','$G9','$G10','$G11','$G12','$G13','$G14','$G15','$G16','$G17','$G18','$G19','$G20','$G21','$G22','$G23')";    
    mysqli_query($conn, $query6);

    // Hapus Data Tabel Testing dan Tabel Gejala Testing
    mysqli_query($conn, "DELETE FROM tb_testing WHERE id_rm = '$id_rm'");
    mysqli_query($conn, "DELETE FROM tb_gejala_testing WHERE id_rm = '$id_rm'");

    return mysqli_affected_rows($conn);
}

//Data Menu
if (isset($_POST["simpan"])) {

    if (tambah($_POST) > 0) {
        $_SESSION['status'] = "Data Baru";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../data_testing.php");
    } else {
        $_SESSION['status'] = "Data Baru";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../data_testing.php");
    }
}