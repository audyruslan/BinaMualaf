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
        <h2 class="text-lg font-medium truncate mb-3">
            Data Training
        </h2>
        <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
            <table id="rekammedisTable" class="table table-report sm:mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">No.</th>
                        <th class="whitespace-nowrap">Nama Binaan</th>
                        <th class="whitespace-nowrap">Jenis Kelamin</th>
                        <th class="whitespace-nowrap">Alamat Lengkap</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $sql = mysqli_query($conn, "SELECT * FROM tb_alternatif");
                    while ($row = mysqli_fetch_assoc($sql)) {
                        $id = $row["id"]
                    ?>
                    <tr class="intro-x">
                        <td class="w-20">
                            <?= $i; ?>
                        </td>
                        <td><?= $row["nama_binaan"]; ?></td>
                        <td><?= $row["jenis_kelamin"]; ?></td>
                        <td><?= $row["alamat"]; ?></td>
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