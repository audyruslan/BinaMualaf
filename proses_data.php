<?php
$title = "Proses Klasifikasi";
$menu = "Proses Klasifikasi";
require 'layouts/header.php';
require 'layouts/sidebar_mobile.php';
require 'layouts/sidebar.php';
require 'hitung.php';

foreach ($jaraks as $jarak => $value) {
    $kuadrat = sqrt($jaraks[$jarak]);
    $sqlInput = "UPDATE tb_training SET distance = '$kuadrat' WHERE alternatif_id = '$jarak'";
    $conn->query($sqlInput);
}

?>
<div class="content">
    <?php require 'layouts/navbar.php'; ?>
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Proses Algoritma K-NN
        </h2>
    </div>

    <!-- Data Training -->
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Data Training
                    </h2>
                </div>
                <div class="p-5">
                    <table id="gejalaTrainingTable" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Nama Binaan</th>
                                <?php
                                $sql = mysqli_query($conn, "SELECT * FROM tb_kriteria");
                                while ($row = mysqli_fetch_assoc($sql)) {
                                ?>
                                    <th class="text-center"><?= $row["kriteria"]; ?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = mysqli_query($conn, "SELECT * FROM tb_training
                                                INNER JOIN tb_alternatif
                                                ON tb_training.alternatif_id = tb_alternatif.id");
                            while ($row = mysqli_fetch_assoc($sql)) {
                            ?>
                                <tr class="intro-x">
                                    <td><?= $row["nama_binaan"]; ?></td>
                                    <td><?= $row["status_binaan"]; ?></td>
                                    <td><?= $row["nilai_ujian"]; ?></td>
                                    <td><?= $row["mualaf"]; ?></td>
                                    <td><?= $row["status_pekerjaan"]; ?></td>
                                    <td><?= $row["jmlh_tanggungan"]; ?></td>
                                    <td><?= $row["kelayakan"]; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Testing -->
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Data Testing
                    </h2>
                </div>
                <div class="p-5">
                    <table id="gejalaTestingTable" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Nama Binaan</th>
                                <?php
                                $sql = mysqli_query($conn, "SELECT * FROM tb_kriteria WHERE kriteria != 'kelayakan'");
                                while ($row = mysqli_fetch_assoc($sql)) {
                                ?>
                                    <th class="text-center"><?= $row["kriteria"]; ?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = mysqli_query($conn, "SELECT * FROM tb_testing
                                                INNER JOIN tb_alternatif
                                                ON tb_testing.alternatif_id = tb_alternatif.id");
                            while ($row = mysqli_fetch_assoc($sql)) {
                            ?>
                                <tr class="intro-x">
                                    <td><?= $row["nama_binaan"]; ?></td>
                                    <td><?= $row["status_binaan"]; ?></td>
                                    <td><?= $row["nilai_ujian"]; ?></td>
                                    <td><?= $row["mualaf"]; ?></td>
                                    <td><?= $row["status_pekerjaan"]; ?></td>
                                    <td><?= $row["jmlh_tanggungan"]; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Eucliden Distance -->
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Eucliden Distance
                    </h2>
                    <div class="col-span-3 sm:col-span-2">
                        <form action="" method="POST">
                            <input class="form-control" placeholder="Masukkan Nilai K" type="number" id="nilai_k" name="nilai_k" min="1" value="<?php if (isset($_POST['nilai_k'])) {
                                                                                                                                                    echo $_POST['nilai_k'];
                                                                                                                                                } ?>" autocomplete="off" autofocus required>
                        </form>
                    </div>
                </div>
                <div class="p-5">
                    <table id="distanceTable" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th class="text-center">Nama Binaan</th>
                                <?php
                                $sql = mysqli_query($conn, "SELECT * FROM tb_kriteria WHERE kriteria != 'kelayakan'");
                                while ($row = mysqli_fetch_assoc($sql)) {
                                ?>
                                    <th class="text-center"><?= $row["kriteria"]; ?></th>
                                <?php } ?>
                                <th>Distance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            $sql = mysqli_query($conn, "SELECT * FROM tb_training
                                                INNER JOIN tb_alternatif
                                                ON tb_training.alternatif_id = tb_alternatif.id");
                            while ($row = mysqli_fetch_assoc($sql)) {
                                $alternatif_id = $row["alternatif_id"];
                                $no++;
                            ?>
                                <tr class="intro-x">
                                    <td><?= $no; ?></td>
                                    <td><?= $row["nama_binaan"]; ?></td>
                                    <td><?= $row["status_binaan"]; ?></td>
                                    <td><?= $row["nilai_ujian"]; ?></td>
                                    <td><?= $row["mualaf"]; ?></td>
                                    <td><?= $row["status_pekerjaan"]; ?></td>
                                    <td><?= $row["jmlh_tanggungan"]; ?></td>
                                    <td><?= $row["distance"]; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['nilai_k'])) {
        $nilai_k = $_POST['nilai_k'];
        // Jumlah Data Training
        $totTraining = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_training"));

        // Ambil Data Training
        $sql = mysqli_query($conn, "SELECT * FROM tb_training
                                INNER JOIN tb_alternatif
                                ON tb_training.alternatif_id = tb_alternatif.id ORDER BY distance ASC LIMIT $nilai_k");

        // Jika Jumlah Data Training > Nilai K
        if ($totTraining >= $nilai_k) {
    ?>

            <!-- Perangkingan -->
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12">
                    <div class="intro-y box lg:mt-5">
                        <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                            <h2 class="font-medium text-base mr-auto">
                                Perangkingan
                            </h2>
                        </div>
                        <div class="p-5">
                            <table id="rangkingTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Rangking</th>
                                        <th class="whitespace-nowrap">Nama Binaan</th>
                                        <th class="whitespace-nowrap">Kelayakan</th>
                                        <th class="whitespace-nowrap">Distance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    while ($row = mysqli_fetch_assoc($sql)) {
                                        $no++;
                                    ?>
                                        <tr class="intro-x">
                                            <td class="text-center"><?= $no; ?></td>
                                            <td><?= $row["nama_binaan"]; ?></td>
                                            <td><?= $row["kelayakan"]; ?></td>
                                            <td><?= $row["distance"]; ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kesimpulan -->
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12">
                    <div class="intro-y box lg:mt-5">
                        <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                            <h2 class="font-medium text-base mr-auto">
                                Kesimpulan
                            </h2>
                            <?php
                            // Data Testing
                            $query1 = mysqli_query($conn, "SELECT * FROM tb_testing 
                                                INNER JOIN tb_alternatif
                                                ON tb_testing.alternatif_id = tb_alternatif.id");
                            $dataTesting = mysqli_fetch_assoc($query1);

                            // Data Training
                            $query2 = mysqli_query($conn, "SELECT * FROM tb_training 
                                INNER JOIN tb_alternatif
                                ON tb_training.alternatif_id = tb_alternatif.id ORDER BY distance ASC");
                            $dataTraining = mysqli_fetch_assoc($query2);
                            ?>
                            <form action="proses/tambah.php" method="POST">
                                <input type="hidden" id="kelayakan" name="kelayakan" value="<?= $dataTraining['kelayakan'] ?>">
                                <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
                            </form>
                        </div>
                        <div class="p-5">
                            <div class="alert alert-success text-white show mb-2" role="alert">
                                <div class="flex items-center">
                                    <div class="font-medium text-lg">
                                        Kesimpulan Status Binaan untuk Data Baru!</div>
                                    <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">Hasil</div>
                                </div>
                                <p class="mt-3">Hasil perhitungan ini mengambil <?= $nilai_k; ?> data terbaik Ascending
                                    (K=<?= $nilai_k; ?>) yang menggunakan <b>Klasifikasi Nearest Neighbhor (K-NN)</b>. Adapun
                                    kesimpulan dari metode Klasifikasi Nearest Neighbhor (K-NN) adalah : Untuk Data Binaan
                                    <b>(Data Testing)</b> dengan Nama <b><?= $dataTesting["nama_binaan"] ?></b> di
                                    Kelompokkan kedalam Status <b><?= $dataTraining["kelayakan"] ?></b> dengan Mengambil
                                    Nilai <b>Distance / Jarak : <?= $dataTraining["distance"] ?></b> yang paling Kecil dari
                                    Semua Data Binaan Sebelumnya <b>(Data Training)</b>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php } else { ?>

            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 mt-5">
                    <div class="alert alert-danger show mb-2" role="alert">
                        <div class="flex items-center">
                            <div class="font-medium text-lg">Peringatan</div>
                        </div>
                        <div class="mt-3">Nilai K yang dimasukkan <strong>Melebihi (>)</strong> dari Jumlah Data Training
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>

    <?php } ?>
</div>

<?php
require 'layouts/footer.php'
?>