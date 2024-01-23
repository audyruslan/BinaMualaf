<?php
session_start();
date_default_timezone_set('Asia/Ujung_Pandang');
require '../functions.php';

function tambah_rekammedis($data)
{
    global $conn;

    //Ambil Data dari Form Input Rekam Medis
    $tgl_masuk = date("Y-m-d");
    $jam_masuk = date("H:i:s");
    $id_pasien = $data['id_pasien'];
    $id_penyakit = $data['id_penyakit'];
    $id_dokter = $data['id_dokter'];
    $id_obat = $data['id_obat'];
    $id_ruangan = $data['id_ruangan'];

    // Gejela Name
    $batuk = $data['batuk'];
    $pilek = $data['pilek'];
    $demam = $data['demam'];
    $sakit_kepala = $data['sakit_kepala'];
    $nyeri_menelan = $data['nyeri_menelan'];
    $nyeri_lambung = $data['nyeri_lambung'];
    $perut_kembung = $data['perut_kembung'];
    $muntah = $data['muntah'];
    $sakit_perut = $data['sakit_perut'];
    $gangguan_saluran_pencernaan = $data['gangguan_saluran_pencernaan'];
    $feses_cair = $data['feses_cair'];
    $tidak_nafsu_makan = $data['tidak_nafsu_makan'];
    $darah_pada_feses = $data['darah_pada_feses'];
    $kulit_ruam_kemerahan_gatal = $data['kulit_ruam_kemerahan_gatal'];
    $lepuh_berisi_air = $data['lepuh_berisi_air'];
    $kulit_membengkak = $data['kulit_membengkak'];
    $sakit_dada = $data['sakit_dada'];
    $gelisa = $data['gelisa'];
    $mudah_lelah = $data['mudah_lelah'];
    $jantung_berdebar = $data['jantung_berdebar'];
    $kulit_gatal = $data['kulit_gatal'];
    $kulit_kering_bersisik_pecah = $data['kulit_kering_bersisik_pecah'];   

    // KodeUnik Rekammedis
    $sql = mysqli_query($conn, "SELECT max(id_rm) AS maxID FROM tb_rekammedis");
    $data = mysqli_fetch_array($sql);
    $code = $data["maxID"];
    $code++;
    $id_rm = sprintf("%03s", $code); 

    // Insert Data Rekammedis
    $query1 = "INSERT INTO tb_rekammedis
                VALUES 
                ('$id_rm','$tgl_masuk','','$jam_masuk','','$id_pasien','$id_penyakit','$id_dokter','$id_obat','$id_ruangan')";
    mysqli_query($conn, $query1);

    // Insert Data Gejala Rekammedis
    $query2 = "INSERT INTO tb_gejala_rm
                VALUES 
                ('','$id_rm','$batuk','$pilek','$demam','$sakit_kepala','$nyeri_menelan','$nyeri_lambung','$perut_kembung','$muntah','$sakit_perut','$gangguan_saluran_pencernaan','$feses_cair','$tidak_nafsu_makan','$darah_pada_feses','$kulit_ruam_kemerahan_gatal','$lepuh_berisi_air','$kulit_membengkak','$sakit_dada','$gelisa','$mudah_lelah','$jantung_berdebar','$kulit_gatal','$kulit_kering_bersisik_pecah')";    
    mysqli_query($conn, $query2);

    // Insert Data Training
    $query3 = "INSERT INTO tb_training
                VALUES 
                ('$id_rm','$id_pasien','$id_penyakit','$id_dokter','$id_obat','$id_ruangan','')";
    mysqli_query($conn, $query3);

    // Insert Data Gejala Training
    $query4 = "INSERT INTO tb_gejala_training
                VALUES 
                ('','$id_rm','$batuk','$pilek','$demam','$sakit_kepala','$nyeri_menelan','$nyeri_lambung','$perut_kembung','$muntah','$sakit_perut','$gangguan_saluran_pencernaan','$feses_cair','$tidak_nafsu_makan','$darah_pada_feses','$kulit_ruam_kemerahan_gatal','$lepuh_berisi_air','$kulit_membengkak','$sakit_dada','$gelisa','$mudah_lelah','$jantung_berdebar','$kulit_gatal','$kulit_kering_bersisik_pecah')";    
    mysqli_query($conn, $query4);

    return mysqli_affected_rows($conn);
}

//Data Menu
if (isset($_POST["tambah"])) {

    if (tambah_rekammedis($_POST) > 0) {
        $_SESSION['status'] = "Data Rekam Medis";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../rekammedis.php");
    } else {
        $_SESSION['status'] = "Data Rekam Medis";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../rekammedis.php");
    }
}