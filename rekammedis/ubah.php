<?php
session_start();
require '../functions.php';

function ubah_rekammedis($data)
{
    global $conn;
    $id = $data["id_rm"];

    $id_pasien = $data['id_pasien'];
    $id_penyakit = $data['id_penyakit'];
    $id_dokter = $data['id_dokter'];
    $id_obat = $data['id_obat'];
    $id_ruangan = $data['id_ruangan'];

    $query1 = "UPDATE tb_rekammedis
                SET
                id_pasien = '$id_pasien',
                id_penyakit = '$id_penyakit',
                id_dokter = '$id_dokter',
                id_obat = '$id_obat',
                id_ruangan = '$id_ruangan'
                WHERE id_rm = $id";

    mysqli_query($conn, $query1);

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


    // Tabel Gejala Rekammedis
    $query2 = "UPDATE tb_gejala_rm
                SET 
                gejala_01 = '$batuk',
                gejala_02 = '$pilek',
                gejala_03 = '$demam',
                gejala_04 = '$sakit_kepala',
                gejala_05 = '$nyeri_menelan',
                gejala_06 = '$nyeri_lambung',
                gejala_07 = '$perut_kembung',
                gejala_08 = '$muntah',
                gejala_09 = '$sakit_perut',
                gejala_10 = '$gangguan_saluran_pencernaan',
                gejala_11 = '$feses_cair',
                gejala_12 = '$tidak_nafsu_makan',
                gejala_13 = '$darah_pada_feses',
                gejala_14 = '$kulit_ruam_kemerahan_gatal',
                gejala_15 = '$lepuh_berisi_air',
                gejala_16 = '$kulit_membengkak',
                gejala_17 = '$sakit_dada',
                gejala_18 = '$gelisa',
                gejala_19 = '$mudah_lelah',
                gejala_20 = '$jantung_berdebar',
                gejala_21 = '$kulit_gatal',
                gejala_22 = '$kulit_kering_bersisik_pecah'
                WHERE id_rm = $id";

    mysqli_query($conn, $query2);

    $query3 = "UPDATE tb_training
                SET
                id_pasien = '$id_pasien',
                id_penyakit = '$id_penyakit',
                id_dokter = '$id_dokter',
                id_obat = '$id_obat',
                id_ruangan = '$id_ruangan'
                WHERE id_rm = $id";

    mysqli_query($conn, $query3);

    //Tabel Gejala Training
    $query4 = "UPDATE tb_gejala_training
                SET 
                gejala_01 = '$batuk',
                gejala_02 = '$pilek',
                gejala_03 = '$demam',
                gejala_04 = '$sakit_kepala',
                gejala_05 = '$nyeri_menelan',
                gejala_06 = '$nyeri_lambung',
                gejala_07 = '$perut_kembung',
                gejala_08 = '$muntah',
                gejala_09 = '$sakit_perut',
                gejala_10 = '$gangguan_saluran_pencernaan',
                gejala_11 = '$feses_cair',
                gejala_12 = '$tidak_nafsu_makan',
                gejala_13 = '$darah_pada_feses',
                gejala_14 = '$kulit_ruam_kemerahan_gatal',
                gejala_15 = '$lepuh_berisi_air',
                gejala_16 = '$kulit_membengkak',
                gejala_17 = '$sakit_dada',
                gejala_18 = '$gelisa',
                gejala_19 = '$mudah_lelah',
                gejala_20 = '$jantung_berdebar',
                gejala_21 = '$kulit_gatal',
                gejala_22 = '$kulit_kering_bersisik_pecah'
                WHERE id_rm = $id";

    mysqli_query($conn, $query4);

    return mysqli_affected_rows($conn);
}


// Ubah Data
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah_rekammedis($_POST) > 0) {
        $_SESSION['status'] = "Data Rekam Medis";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Diubah";
        header("Location: ../rekammedis.php");
    } else {
        $_SESSION['status'] = "Data Rekam Medis";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Diubah";
        header("Location: ../rekammedis.php");
    }
}