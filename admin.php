<?php
$title = "Tambah Admin - Puskesmas Bahodopi";
$menu = "Tambah Admin";
require 'layouts/header.php';
require 'layouts/sidebar_mobile.php';
require 'layouts/sidebar.php';
?>
<div class="content">
    <?php require 'layouts/navbar.php'; ?>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 xl:col-span-6 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Pengaturan Administrator
                        </h2>
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <form action="admin/tambah.php" method="POST">
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 xl:col-span-12">
                                    <div>
                                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                        <input id="nama_lengkap" type="text" name="nama_lengkap" class="form-control"
                                            placeholder="Nama Lengkap" autocomplete="off">
                                    </div>
                                    <div class="mt-3">
                                        <label for="username" class="form-label">Masukkan Username</label>
                                        <input id="username" type="text" name="username" class="form-control"
                                            placeholder="Masukkan Username" autocomplete="off">
                                    </div>
                                    <div class="mt-3">
                                        <label for="password" class="form-label">Masukkan Password</label>
                                        <input id="password" type="text" name="password" class="form-control"
                                            placeholder="Konfirmasi Password" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="tambah" class="btn btn-primary w-20 mt-3">Tambah</button>
                        </form>
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-6 mt-6">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Semua Akun Administrator
                        </h2>
                    </div>
                    <div class="mt-5">
                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM tb_user");
                        while ($row = mysqli_fetch_assoc($sql)) {
                        ?>
                        <div class="intro-y">
                            <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                    <img alt="Profile" src="admin/<?= $row["img_dir"]; ?>">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium"><?= $row["nama_lengkap"]; ?></div>
                                    <div class="text-slate-500 text-xs mt-0.5">29 September 2021</div>
                                </div>
                                <div
                                    class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">
                                    Administrator</div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <a href=""
                            class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
require 'layouts/footer.php'
?>