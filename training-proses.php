<?php
$title = "Proses Data Training - Puskesmas Bahodopi";
$menu = "Proses Data Training";
require 'layouts/header.php';
require 'layouts/sidebar_mobile.php';
require 'layouts/sidebar.php';
?>
<div class="content">
    <?php require 'layouts/navbar.php'; ?>

    <form action="data/tambah_training.php" method="POST">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Data Training
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <button type="submit" name="tambah" class="btn btn-primary shadow-md mr-2">Tambah Data</button>
            </div>
        </div>
        <div class="intro-y grid grid-cols-12 gap-5 mt-5">
            <div class="col-span-12 lg:col-span-3">
                <div class="col-span-12">
                    <label for="id_pasien" class="form-label">Nama Pasien</label>
                    <select class="form-control" name="id_pasien" id="id_pasien">
                        <option value="">--Silahkan Pilih--</option>
                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM tb_pasien");
                        while ($row = mysqli_fetch_assoc($sql)) {
                        ?>
                            <option value="<?= $row["id"]; ?>"><?= $row["nama_lengkap"]; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
                <h3 class="text-center mt-2">Gejala Keluhan</h3>
                <div class="grid grid-cols-12 gap-5 pt-5">
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM tb_gejala");
                    while ($row = mysqli_fetch_assoc($sql)) {
                    ?>
                        <div class="form-check mt-2 intro-y block col-span-12 sm:col-span-6 2xl:col-span-3">
                            <input id="<?= $row["id"]; ?>" class="form-check-input" type="checkbox" name="gejala[]" value="<?= $row["id"]; ?>">
                            <label class="form-check-label" for="<?= $row["id"]; ?>"><?= $row["nama_gejala"]; ?></label>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-3">
                <div class="col-span-12">
                    <label for="id_penyakit" class="form-label">Nama Penyakit</label>
                    <select class="form-control" name="id_penyakit" id="id_penyakit">
                        <option value="">--Silahkan Pilih--</option>
                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM tb_penyakit");
                        while ($row = mysqli_fetch_assoc($sql)) {
                        ?>
                            <option value="<?= $row["id"]; ?>"><?= $row["nama_penyakit"]; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
    </form>
</div>
<?php
require 'layouts/footer.php'
?>