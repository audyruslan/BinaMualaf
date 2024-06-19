<?php
$title = "Tambah Kriteria";
$menu = "Tambah Kriteria";
require 'layouts/header.php';
require 'layouts/sidebar_mobile.php';
require 'layouts/sidebar.php';
?>
<div class="content">
    <?php require 'layouts/navbar.php'; ?>
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8 mb-5">
        <h2 class="text-lg font-medium mr-auto">
            Tambah Data Kriteria
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="data-training.php" class="btn btn-dark shadow-md mr-2">Kembali</a>
        </div>
    </div>
    <form action="training/tambah.php" method="POST">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Vertical Form -->
            <div class="intro-y box">
                <div
                    class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Form Data Training
                    </h2>
                </div>
                <div id="vertical-form" class="p-5">
                    <div class="intro-y grid grid-cols-12 gap-5">
                        <div class="col-span-12 lg:col-span-4">
                            <div class="mb-3">
                                <label for="alternatif_id" class="form-label">Pilih Binaan</label>
                                <select class="form-select" name="alternatif_id" id="alternatif_id">
                                    <option value="">--Silahkan Pilih--</option>
                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM tb_alternatif WHERE id NOT IN (SELECT alternatif_id FROM tb_training)");
                                    while ($row = mysqli_fetch_assoc($sql)) {
                                    ?>
                                    <option value="<?= $row["id"]; ?>"><?= $row["nama_binaan"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="intro-y grid grid-cols-12 gap-5 mt-5">
                        <div class="col-span-12 lg:col-span-4">
                            <div class="mb-3">
                                <label for="status_binaan" class="form-label">Status Binaan</label>
                                <select class="form-select" name="status_binaan" id="status_binaan">
                                    <option value="">--Silahkan Pilih--</option>
                                    <option value="4">Sangat Aktif</option>
                                    <option value="3">Aktif</option>
                                    <option value="2">Cukup Aktif</option>
                                    <option value="1">Kurang Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="status_pekerjaan" class="form-label">Status Pekerjaan</label>
                                <select class="form-select" name="status_pekerjaan" id="status_pekerjaan">
                                    <option value="">--Silahkan Pilih--</option>
                                    <option value="1">Bekerja</option>
                                    <option value="0">Tidak Bekerja</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-4">
                            <div class="mb-3">
                                <label for="nilai_ujian" class="form-label">Nilai Ujian</label>
                                <input type="number" class="form-control" id="nilai_ujian" name="nilai_ujian"
                                    autocomplete="off" placeholder="Nilai Ujian">
                            </div>
                            <div class="mb-3">
                                <label for="jmlh_tanggungan" class="form-label">Jumlah Tanggungan</label>
                                <input type="number" class="form-control" id="jmlh_tanggungan" name="jmlh_tanggungan"
                                    autocomplete="off" placeholder="Jumlah Tanggungan">
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-4">
                            <div class="mb-3">
                                <label for="mualaf" class="form-label">Status Mualaf</label>
                                <select class="form-select" name="mualaf" id="mualaf">
                                    <option value="">--Silahkan Pilih--</option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="kelayakan" class="form-label">Status Kelayakan</label>
                                <select class="form-select" name="kelayakan" id="kelayakan">
                                    <option value="">--Silahkan Pilih--</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                            <button type="submit" name="tambah" class="btn btn-primary float-right mt-5">Tambah
                                Data</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Vertical Form -->
        </div>
    </form>
    <?php
    require 'layouts/footer.php'
    ?>