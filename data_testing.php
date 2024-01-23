<?php
$title = "Data Testing - Puskesmas Bahodopi";
$menu = "Data Testing";
require 'layouts/header.php';
require 'layouts/sidebar_mobile.php';
require 'layouts/sidebar.php';
?>
<div class="content">
    <?php require 'layouts/navbar.php'; ?>
    <form action="data/tambah_testing.php" method="POST">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Data Testing
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <button type="submit" name="tambah" class="btn btn-primary shadow-md mr-2">Diagnosa</button>
            </div>
        </div>
        <div class="intro-y grid grid-cols-12 gap-5 mt-5">
            <div class="col-span-12 lg:col-span-4">
                <label for="id_pasien" class="form-label">Nama Pasien</label>
                <select class="form-control" name="id_pasien" id="id_pasien">
                    <option value="">--Silahkan Pilih--</option>
                    <?php
                        $sql = "SELECT * FROM tb_pasien WHERE id NOT IN (SELECT id_pasien FROM tb_training)";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <option value="<?= $row["id"]; ?>"><?= $row["nama_lengkap"]; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-span-12 lg:col-span-4">
                <label for="id_dokter" class="form-label">Nama Dokter</label>
                <select class="form-control" name="id_dokter" id="id_dokter">
                    <option value="">--Silahkan Pilih--</option>
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM tb_dokter");
                    while ($row = mysqli_fetch_assoc($sql)) {
                    ?>
                    <option value="<?= $row["id"]; ?>"><?= $row["nama_dokter"]; ?></option>
                    <?php } ?>
                </select>
            </div>
            <!-- <div class="col-span-12 lg:col-span-3">
                <label for="id_obat" class="form-label">Obat</label>
                <select class="form-control" name="id_obat" id="id_obat">
                    <option value="">--Silahkan Pilih--</option>
                    <?php
                    // $sql = mysqli_query($conn, "SELECT * FROM tb_obat");
                    // while ($row = mysqli_fetch_assoc($sql)) {
                    ?>
                        <option value="<?= $row["id"]; ?>"><?= $row["nama_obat"]; ?></option>
                    <?php
                    //}
                    ?>
                </select>
            </div> -->
            <div class="col-span-12 lg:col-span-4">
                <label for="id_ruangan" class="form-label">Ruangan</label>
                <select class="form-control" name="id_ruangan" id="id_ruangan">
                    <option value="">--Silahkan Pilih--</option>
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM tb_ruangan");
                    while ($row = mysqli_fetch_assoc($sql)) {
                    ?>
                    <option value="<?= $row["id"]; ?>"><?= $row["nama_ruangan"]; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="intro-y grid grid-cols-12 gap-5 mt-5">
            <div class="col-span-12">
                <h3 class="text-center mt-2">Gejala Keluhan</h3>
                <div class="grid grid-cols-12 gap-5 pt-5">
                    <!-- Batuk -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="batuk" name="batuk" value="0">
                        <input id="batuk" class="form-check-input" type="checkbox" name="batuk" value="1">
                        <label class="form-check-label" for="batuk">Batuk</label>
                    </div>

                    <!-- Pilek -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="pilek" name="pilek" value="0">
                        <input id="pilek" class="form-check-input" type="checkbox" name="pilek" value="2">
                        <label class="form-check-label" for="pilek">Pilek</label>
                    </div>

                    <!-- Demam -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="demam" name="demam" value="0">
                        <input id="demam" class="form-check-input" type="checkbox" name="demam" value="3">
                        <label class="form-check-label" for="demam">Demam</label>
                    </div>

                    <!-- Sakit kepala -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="sakit_kepala" name="sakit_kepala" value="0">
                        <input id="sakit_kepala" class="form-check-input" type="checkbox" name="sakit_kepala" value="4">
                        <label class="form-check-label" for="sakit_kepala">Sakit Kepala</label>
                    </div>

                    <!-- Nyeri Menelan -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="nyeri_menelan" name="nyeri_menelan" value="0">
                        <input id="nyeri_menelan" class="form-check-input" type="checkbox" name="nyeri_menelan"
                            value="5">
                        <label class="form-check-label" for="nyeri_menelan">Nyeri Menelan</label>
                    </div>

                    <!-- Nyeri Lambung -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="nyeri_lambung" name="nyeri_lambung" value="0">
                        <input id="nyeri_lambung" class="form-check-input" type="checkbox" name="nyeri_lambung"
                            value="6">
                        <label class="form-check-label" for="nyeri_lambung">Nyeri Lambung</label>
                    </div>

                    <!-- Perut Kembung -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="perut_kembung" name="perut_kembung" value="0">
                        <input id="perut_kembung" class="form-check-input" type="checkbox" name="perut_kembung"
                            value="7">
                        <label class="form-check-label" for="perut_kembung">Perut Kembung</label>
                    </div>

                    <!-- Muntah -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="muntah" name="muntah" value="0">
                        <input id="muntah" class="form-check-input" type="checkbox" name="muntah" value="8">
                        <label class="form-check-label" for="muntah">Muntah</label>
                    </div>

                    <!-- Sakit Perut -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="sakit_perut" name="sakit_perut" value="0">
                        <input id="sakit_perut" class="form-check-input" type="checkbox" name="sakit_perut" value="9">
                        <label class="form-check-label" for="sakit_perut">Sakit Perut</label>
                    </div>

                    <!-- Ganguan Saluran Pencernaah -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="gangguan_saluran_pencernaan" name="gangguan_saluran_pencernaan"
                            value="0">
                        <input id="gangguan_saluran_pencernaan" class="form-check-input" type="checkbox"
                            name="gangguan_saluran_pencernaan" value="10">
                        <label class="form-check-label" for="gangguan_saluran_pencernaan">Gangguan Saluran
                            Pencernaan</label>
                    </div>

                    <!-- Feses Cair -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="feses_cair" name="feses_cair" value="0">
                        <input id="feses_cair" class="form-check-input" type="checkbox" name="feses_cair" value="11">
                        <label class="form-check-label" for="feses_cair">Feses Cair</label>
                    </div>

                    <!-- Tidak Nafsu Makan -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="tidak_nafsu_makan" name="tidak_nafsu_makan" value="0">
                        <input id="tidak_nafsu_makan" class="form-check-input" type="checkbox" name="tidak_nafsu_makan"
                            value="12">
                        <label class="form-check-label" for="tidak_nafsu_makan">Tidak Nafsu Makan</label>
                    </div>

                    <!-- Darah Pada Feses -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="darah_pada_feses" name="darah_pada_feses" value="0">
                        <input id="darah_pada_feses" class="form-check-input" type="checkbox" name="darah_pada_feses"
                            value="13">
                        <label class="form-check-label" for="darah_pada_feses">Darah Pada Feses</label>
                    </div>

                    <!-- Kulit Ruam Kemerahan Gatal -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="kulit_ruam_kemerahan_gatal" name="kulit_ruam_kemerahan_gatal"
                            value="0">
                        <input id="kulit_ruam_kemerahan_gatal" class="form-check-input" type="checkbox"
                            name="kulit_ruam_kemerahan_gatal" value="14">
                        <label class="form-check-label" for="kulit_ruam_kemerahan_gatal">Kulit Ruam Kemerahan</label>
                    </div>

                    <!-- Lepuh Berisi Air -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="lepuh_berisi_air" name="lepuh_berisi_air" value="0">
                        <input id="lepuh_berisi_air" class="form-check-input" type="checkbox" name="lepuh_berisi_air"
                            value="15">
                        <label class="form-check-label" for="lepuh_berisi_air">Kulit Lepuh berisi Air</label>
                    </div>

                    <!-- Kulit Membengkak -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="kulit_membengkak" name="kulit_membengkak" value="0">
                        <input id="kulit_membengkak" class="form-check-input" type="checkbox" name="kulit_membengkak"
                            value="16">
                        <label class="form-check-label" for="kulit_membengkak">Kulit Membengkak</label>
                    </div>

                    <!-- Kulit Gatal -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="kulit_gatal" name="kulit_gatal" value="0">
                        <input id="kulit_gatal" class="form-check-input" type="checkbox" name="kulit_gatal" value="17">
                        <label class="form-check-label" for="kulit_gatal">Kulit Gatal</label>
                    </div>

                    <!-- Kulit Kering Bersisik Pecah -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="kulit_kering_bersisik_pecah" name="kulit_kering_bersisik_pecah"
                            value="0">
                        <input id="kulit_kering_bersisik_pecah" class="form-check-input" type="checkbox"
                            name="kulit_kering_bersisik_pecah" value="18">
                        <label class="form-check-label" for="kulit_kering_bersisik_pecah">Kulit Kering Bersisik
                            Pecah</label>
                    </div>

                    <!-- Sakit Dada -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="sakit_dada" name="sakit_dada" value="0">
                        <input id="sakit_dada" class="form-check-input" type="checkbox" name="sakit_dada" value="19">
                        <label class="form-check-label" for="sakit_dada">Sakit Dada</label>
                    </div>

                    <!-- Gelisa -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="gelisa" name="gelisa" value="0">
                        <input id="gelisa" class="form-check-input" type="checkbox" name="gelisa" value="20">
                        <label class="form-check-label" for="gelisa">Gelisa</label>
                    </div>

                    <!-- Mudah Lelah -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="mudah_lelah" name="mudah_lelah" value="0">
                        <input id="mudah_lelah" class="form-check-input" type="checkbox" name="mudah_lelah" value="21">
                        <label class="form-check-label" for="mudah_lelah">Mudah Lelah</label>
                    </div>

                    <!-- Jantung Berdebar -->
                    <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-3 2xl:col-span-3">
                        <input type="hidden" id="jantung_berdebar" name="jantung_berdebar" value="0">
                        <input id="jantung_berdebar" class="form-check-input" type="checkbox" name="jantung_berdebar"
                            value="22">
                        <label class="form-check-label" for="jantung_berdebar">Jantung Berdebar</label>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>
<?php
require 'layouts/footer.php'
?>