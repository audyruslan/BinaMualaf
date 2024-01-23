<?php
$title = "Tambah Alternatif - Puskesmas Bahodopi";
$menu = "Tambah Alternatif";
require 'layouts/header.php';
require 'layouts/sidebar_mobile.php';
require 'layouts/sidebar.php';
?>
<div class="content">
    <?php require 'layouts/navbar.php'; ?>
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8 mb-5">
        <h2 class="text-lg font-medium mr-auto">
            Tambah Data Alternatif
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="alternatif.php" class="btn btn-dark shadow-md mr-2">Kembali</a>
        </div>
    </div>
    <form action="alternatif/tambah.php" method="POST">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Vertical Form -->
            <div class="intro-y box">
                <div
                    class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Form Data Alternatif
                    </h2>
                </div>
                <div id="vertical-form" class="p-5">
                    <div class="intro-y grid grid-cols-12 gap-5 mt-5">
                        <div class="col-span-12 lg:col-span-6">
                            <div>
                                <label for="nama_binaan" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_binaan" name="nama_binaan"
                                    autocomplete="off" placeholder="Nama Lengkap Binaan">
                            </div>
                            <div class="mt-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="">--Silahkan Pilih--</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <label for="alamat" class="form-label">Alamat Lengkap</label>
                            <textarea class="form-control" name="alamat" id="alamat" autocomplete="off"
                                placeholder="Alamat Lengkap Binaan" cols="30" rows="5"></textarea>
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