<?php
$title = "Kriteria";
$menu = "Kriteria";
require 'layouts/header.php';
require 'layouts/sidebar_mobile.php';
require 'layouts/sidebar.php';
?>
<div class="content">
    <?php require 'layouts/navbar.php'; ?>
    <div class="col-span-12 mt-6">
        <h2 class="text-lg font-medium truncate mb-3">
            Data Kriteria
        </h2>
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#modalTambah"
                class="btn btn-primary shadow-md mr-2"><i data-lucide="plus-circle" class="mr-2"></i>Tambah
                Data</a>

            <!-- Modal Tambah -->
            <div id="modalTambah" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- BEGIN: Modal Header -->
                        <div class="modal-header">
                            <h2 class="font-medium text-base mr-auto">Tambah Data Kriteria</h2> <button type="button"
                                data-tw-dismiss="modal" class="btn btn-secondary"><i class="w-5 h-5"
                                    data-lucide="x"></i></button>

                        </div> <!-- END: Modal Header -->
                        <!-- BEGIN: Modal Body -->
                        <form action="kriteria/tambah.php" method="POST">
                            <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                <div class="col-span-12">
                                    <label for="kriteria" class="form-label">Nama Kriteria</label>
                                    <input id="kriteria" type="text" name="kriteria" class="form-control"
                                        autocomplete="off" placeholder="Nama Kriteria">
                                </div>
                            </div> <!-- END: Modal Body -->
                            <!-- BEGIN: Modal Footer -->
                            <div class="modal-footer"> <button type="button" data-tw-dismiss="modal"
                                    class="btn btn-outline-secondary w-20 mr-1">Kembali</button> <button type="submit"
                                    name="tambah" class="btn btn-primary w-20">Tambah</button>
                            </div>
                            <!-- END: Modal Footer -->
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
            <table id="gejalaTable" class="table table-report sm:mt-2">
                <thead>
                    <tr>
                        <th class="text-center whitespace-nowrap">No.</th>
                        <th class="text-center whitespace-nowrap">Kriteria</th>
                        <th class="text-center whitespace-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = mysqli_query($conn, "SELECT * FROM tb_kriteria");
                    while ($row = mysqli_fetch_assoc($sql)) {
                    ?>
                    <tr class="intro-x">
                        <td class="text-center"><?= $no++; ?></td>
                        <td class="text-center"><?= $row["kriteria"]; ?></td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center text-success mr-3" href="javascript:;"
                                    data-tw-toggle="modal" data-tw-target="#modalEdit<?= $row["kriteria_id"]; ?>"> <i
                                        data-lucide="edit" class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#modalHapus<?= $row["kriteria_id"]; ?>"> <i data-lucide="trash-2"
                                        class="w-4 h-4 mr-1"></i> Hapus </a>
                            </div>
                        </td>
                    </tr>
                    <!-- Modal Edit -->
                    <div id="modalEdit<?= $row["kriteria_id"]; ?>" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- BEGIN: Modal Header -->
                                <div class="modal-header">
                                    <h2 class="font-medium text-base mr-auto">Edit Data Kriteria</h2>
                                    <div class="dropdown sm:hidden"> <a class="dropdown-toggle w-5 h-5 block"
                                            href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i
                                                data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                                        <div class="dropdown-menu w-40">
                                            <ul class="dropdown-content">
                                                <li> <a href="javascript:;" class="dropdown-item"> <i data-lucide="file"
                                                            class="w-4 h-4 mr-2"></i> Download Docs </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> <!-- END: Modal Header -->
                                <!-- BEGIN: Modal Body -->
                                <form action="kriteria/ubah.php" method="POST">
                                    <input type="hidden" id="kriteria_id" name="kriteria_id"
                                        value="<?= $row["kriteria_id"]; ?>">
                                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                        <div class="col-span-12">
                                            <label for="kriteria" class="form-label">Nama Kriteria</label>
                                            <input id="kriteria" name="kriteria" type="text" class="form-control"
                                                value="<?= $row["kriteria"]; ?>" placeholder="Nama Kriteria">
                                        </div>
                                    </div> <!-- END: Modal Body -->
                                    <!-- BEGIN: Modal Footer -->
                                    <div class="modal-footer"> <button type="button" data-tw-dismiss="modal"
                                            class="btn btn-outline-secondary w-20 mr-1">Kembali</button> <button
                                            type="submit" name="ubah"
                                            class="btn btn-success w-20 text-white">Ubah</button>
                                    </div>
                                    <!-- END: Modal Footer -->
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Hapus -->
                    <div id="modalHapus<?= $row["kriteria_id"]; ?>" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center">
                                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Anda Yakin Ingin Menghapus?</div>
                                        <div class="text-slate-500 mt-2">Data Kriteria <?= $row["kriteria"]; ?>,
                                            akan
                                            diHapus.
                                        </div>
                                    </div>
                                    <div class="px-5 pb-8 text-center">
                                        <button type="button" data-tw-dismiss="modal"
                                            class="btn btn-outline-secondary w-24 mr-1">Batal</button>
                                        <a href="kriteria/hapus.php?kriteria_id=<?= $row["kriteria_id"]; ?>"
                                            class="btn btn-dark w-24">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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