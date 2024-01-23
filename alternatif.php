<?php
$title = "Alternatif";
$menu = "Alternatif";
require 'layouts/header.php';
require 'layouts/sidebar_mobile.php';
require 'layouts/sidebar.php';
?>
<div class="content">
    <?php require 'layouts/navbar.php'; ?>
    <div class="col-span-12 mt-6">
        <h2 class="text-lg font-medium truncate mb-3">
            Data Alternatif
        </h2>
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="add_alternatif.php" data-tw-toggle="modal" data-tw-target="#modalTambah"
                class="btn btn-primary shadow-md mr-2"><i data-lucide="plus-circle" class="mr-2"></i>Tambah Data</a>
        </div>

        <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
            <table id="rekammedisTable" class="table table-report sm:mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">No.</th>
                        <th class="whitespace-nowrap">Nama Binaan</th>
                        <th class="whitespace-nowrap">Jenis Kelamin</th>
                        <th class="whitespace-nowrap">Alamat Lengkap</th>
                        <th class="text-center whitespace-nowrap">Aksi</th>
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
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center text-success mr-3"
                                    href="edit_alternatif.php?id=<?= $row["id"]; ?>"> <i data-lucide="edit"
                                        class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#modalHapus<?= $row["id"]; ?>"> <i data-lucide="trash-2"
                                        class="w-4 h-4 mr-1"></i> Hapus </a>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal Hapus -->
                    <div id="modalHapus<?= $row["id"]; ?>" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center">
                                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Anda Yakin Ingin Menghapus?</div>
                                        <div class="text-slate-500 mt-2">Data Alternatif dengan Nama Binaan <br>
                                            <span><?= $row["nama_binaan"]; ?></span>,
                                            akan
                                            diHapus.
                                        </div>
                                    </div>
                                    <div class="px-5 pb-8 text-center">
                                        <button type="button" data-tw-dismiss="modal"
                                            class="btn btn-outline-secondary w-24 mr-1">Batal</button>
                                        <a href="alternatif/hapus.php?id=<?= $row["id"]; ?>"
                                            class="btn btn-dark w-24">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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