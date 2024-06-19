<?php
$title = "Data Training";
$menu = "Data Training";
require 'layouts/header.php';
require 'layouts/sidebar_mobile.php';
require 'layouts/sidebar.php';
?>
<div class="content">
    <?php require 'layouts/navbar.php'; ?>
    <div class="col-span-12 mt-6">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Data Training
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <a href="add_training.php" class="btn btn-primary shadow-md mr-2">Tambah Data</a>
            </div>
        </div>
        <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
            <table id="rekammedisTable" class="table table-report sm:mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">No.</th>
                        <th class="whitespace-nowrap">Nama Binaan</th>
                        <th class="whitespace-nowrap">Status</th>
                        <th class="whitespace-nowrap">Pekerjaan</th>
                        <th class="whitespace-nowrap">Pekerjaan Suami</th>
                        <th class="whitespace-nowrap">Keterampilan</th>
                        <th class="whitespace-nowrap">Jumlah Anak/Tanggungan</th>
                        <th class="whitespace-nowrap">Kelayakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $sql = mysqli_query($conn, "SELECT * FROM tb_training
                                                INNER JOIN tb_alternatif
                                                ON tb_training.alternatif_id = tb_alternatif.id");
                    while ($row = mysqli_fetch_assoc($sql)) {
                    ?>
                        <tr class="intro-x">
                            <td class="w-20">
                                <?= $i; ?>
                            </td>
                            <td><?= $row["nama_binaan"]; ?></td>
                            <td><?= $row["status_binaan"]; ?></td>
                            <td><?= $row["nilai_ujian"]; ?></td>
                            <td><?= $row["mualaf"]; ?></td>
                            <td><?= $row["status_pekerjaan"]; ?></td>
                            <td><?= $row["jmlh_tanggungan"]; ?></td>
                            <td><?= $row["kelayakan"]; ?></td>
                            <?php $i++; ?>
                        <?php
                    }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
require 'layouts/footer.php'
?>