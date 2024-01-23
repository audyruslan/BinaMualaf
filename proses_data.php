<?php
$title = "Proses Algoritma - Puskesmas Bahodopi";
$menu = "Proses Algoritma";
require 'layouts/header.php';
require 'layouts/sidebar_mobile.php';
require 'layouts/sidebar.php';
require 'hitung.php'; 

foreach ($jaraks as $jarak => $value) {
    $kuadrat = sqrt($jaraks[$jarak]);
    $sqlInput = "UPDATE tb_training SET distance = '$kuadrat' WHERE id_rm = '$jarak'";
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

    <!-- Data Gejala Training -->
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Data Gejala Training
                    </h2>
                </div>
                <div class="p-5">
                    <table id="gejalaTrainingTable" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Nama Pasien</th>
                                <?php
                                for ($i = 1; $i <= 22; $i++) {
                                ?>
                                <th class="text-center"><?= $i; ?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = mysqli_query($conn, "SELECT * FROM tb_gejala_training 
                            INNER JOIN tb_training ON tb_gejala_training.id_rm = tb_training.id_rm
                            INNER JOIN tb_pasien ON tb_training.id_pasien = tb_pasien.id");
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                            <tr class="intro-x">
                                <td><?= $row['nama_lengkap']; ?></td>
                                <td><?= $row[1]; ?></td>
                                <td><?= $row[2]; ?></td>
                                <td><?= $row[3]; ?></td>
                                <td><?= $row[4]; ?></td>
                                <td><?= $row[5]; ?></td>
                                <td><?= $row[6]; ?></td>
                                <td><?= $row[7]; ?></td>
                                <td><?= $row[8]; ?></td>
                                <td><?= $row[9]; ?></td>
                                <td><?= $row[10]; ?></td>
                                <td><?= $row[11]; ?></td>
                                <td><?= $row[12]; ?></td>
                                <td><?= $row[13]; ?></td>
                                <td><?= $row[14]; ?></td>
                                <td><?= $row[15]; ?></td>
                                <td><?= $row[16]; ?></td>
                                <td><?= $row[18]; ?></td>
                                <td><?= $row[19]; ?></td>
                                <td><?= $row[20]; ?></td>
                                <td><?= $row[21]; ?></td>
                                <td><?= $row[22]; ?></td>
                                <td><?= $row[23]; ?></td>
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

    <!-- Data Gejala Testing -->
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Data Gejala Testing
                    </h2>
                </div>
                <div class="p-5">
                    <table id="gejalaTestingTable" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Nama Pasien</th>
                                <?php
                                for ($i = 1; $i <= 22; $i++) {
                                ?>
                                <th class="whitespace-nowrap"><?= $i; ?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = mysqli_query($conn, "SELECT * FROM tb_gejala_testing 
                            INNER JOIN tb_testing ON tb_gejala_testing.id_rm = tb_testing.id_rm
                            INNER JOIN tb_pasien ON tb_testing.id_pasien = tb_pasien.id");
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                            <tr class="intro-x">
                                <td><?= $row['nama_lengkap']; ?></td>
                                <td><?= $row[1]; ?></td>
                                <td><?= $row[2]; ?></td>
                                <td><?= $row[3]; ?></td>
                                <td><?= $row[4]; ?></td>
                                <td><?= $row[5]; ?></td>
                                <td><?= $row[6]; ?></td>
                                <td><?= $row[7]; ?></td>
                                <td><?= $row[8]; ?></td>
                                <td><?= $row[9]; ?></td>
                                <td><?= $row[10]; ?></td>
                                <td><?= $row[11]; ?></td>
                                <td><?= $row[12]; ?></td>
                                <td><?= $row[13]; ?></td>
                                <td><?= $row[14]; ?></td>
                                <td><?= $row[15]; ?></td>
                                <td><?= $row[16]; ?></td>
                                <td><?= $row[18]; ?></td>
                                <td><?= $row[19]; ?></td>
                                <td><?= $row[20]; ?></td>
                                <td><?= $row[21]; ?></td>
                                <td><?= $row[22]; ?></td>
                                <td><?= $row[23]; ?></td>
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
                            <input class="form-control" placeholder="Masukkan Nilai K" type="number" id="nilai_k"
                                name="nilai_k" min="1"
                                value="<?php if (isset($_POST['nilai_k'])) {
                                                                                                                                                    echo $_POST['nilai_k'];
                                                                                                                                                } ?>"
                                autocomplete="off" autofocus required>
                        </form>
                    </div>
                </div>
                <div class="p-5">
                    <table id="distanceTable" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pasien</th>
                                <th>Gejala/Keluhan</th>
                                <th>Penyakit</th>
                                <th>Distance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            $sql = mysqli_query($conn, "SELECT * FROM tb_training
                            INNER JOIN tb_pasien ON tb_training.id_pasien = tb_pasien.id
                            INNER JOIN tb_penyakit ON tb_training.id_penyakit = tb_penyakit.id");
                            while ($row = mysqli_fetch_assoc($sql)) {
                                $id_rm = $row["id_rm"];
                                $no++;
                            ?>
                            <tr class="intro-x">
                                <td><?= $no; ?></td>
                                <td><?= $row["nama_lengkap"]; ?></td>
                                <td>
                                    <?php
                                        $query = mysqli_query($conn, "SELECT * FROM tb_gejala_training WHERE id_rm = '$id_rm'");
                                        while ($data = mysqli_fetch_assoc($query)) {
                                            unset($data['id'], $data['id_rm']);
                                            $id_gejala = array_filter($data);

                                            foreach ($id_gejala as $key => $id) {
                                                $query2 = mysqli_query($conn, "SELECT * FROM tb_gejala WHERE id = '$id'");
                                                while ($gejala = mysqli_fetch_assoc($query2)) {
                                                    echo $gejala["nama_gejala"] . "<br>";
                                                }
                                            }
                                        }
                                        ?>
                                </td>
                                <td><?= $row["nama_penyakit"]; ?></td>
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
            INNER JOIN tb_pasien ON tb_training.id_pasien = tb_pasien.id
            INNER JOIN tb_penyakit ON tb_training.id_penyakit = tb_penyakit.id ORDER BY distance ASC LIMIT $nilai_k");

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
                                <th class="whitespace-nowrap">Nama Pasien</th>
                                <th class="whitespace-nowrap">Penyakit</th>
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
                                <td><?= $row["nama_lengkap"]; ?></td>
                                <td><?= $row["nama_penyakit"]; ?></td>
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
                        INNER JOIN tb_pasien ON tb_testing.id_pasien = tb_pasien.id");
                            $dataTesting = mysqli_fetch_assoc($query1);

                            // Data Training
                            $query2 = mysqli_query($conn, "SELECT * FROM tb_training 
                         INNER JOIN tb_pasien ON tb_training.id_pasien = tb_pasien.id
                         INNER JOIN tb_penyakit ON tb_training.id_penyakit = tb_penyakit.id ORDER BY distance ASC");
                            $dataTraining = mysqli_fetch_assoc($query2);
                            ?>
                    <form action="data/tambah.php" method="POST">
                        <input type="hidden" id="id_penyakit" name="id_penyakit"
                            value="<?= $dataTraining['id_penyakit'] ?>">
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
                    </form>
                </div>
                <div class="p-5">
                    <div class="alert alert-success text-white show mb-2" role="alert">
                        <div class="flex items-center">
                            <div class="font-medium text-lg">
                                Kesimpulan Penyakit untuk Data Baru!</div>
                            <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">Hasil</div>
                        </div>
                        <p class="mt-3">Hasil perhitungan ini mengambil <?= $nilai_k; ?> data terbaik Ascending
                            (K=<?= $nilai_k; ?>) yang menggunakan <b>Klasifikasi Nearest Neighbhor (K-NN)</b>. Adapun
                            kesimpulan dari metode Klasifikasi Nearest Neighbhor (K-NN) adalah : Untuk Data Pasien yang
                            Baru Masuk <b>(Data Testing)</b> dengan Nama <b><?= $dataTesting["nama_lengkap"] ?></b> di
                            Kelompokkan kedalam Penyakit <b><?= $dataTraining["nama_penyakit"] ?></b> dengan Mengambil
                            Nilai <b>Distance / Jarak : <?= $dataTraining["distance"] ?></b> yang paling Kecil dari
                            Semua Data Pasien Sebelumnya <b>(Data Training)</b>.</p>
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