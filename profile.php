<?php
$title = "Halaman Profile - Puskesmas Bahodopi";
$menu = "Halaman Profile";
require 'layouts/header.php';
require 'layouts/sidebar_mobile.php';
require 'layouts/sidebar.php';

if (isset($_POST["ubah"])) {

    $username = $_POST["username"];
    $password_lama = $_POST["password_lama"];
    $password_baru = $_POST["password_baru"];
    $konfirmasi_password = $_POST["konfirmasi_password"];


    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password_lama, $row["password"])) {
        if ($password_baru == $konfirmasi_password) {
            // enkripsi password
            $password_baru = password_hash($password_baru, PASSWORD_DEFAULT);
            $query = "UPDATE tb_user SET password = '$password_baru' WHERE username = '$username' ";
            mysqli_query($conn, $query);
            $_SESSION['pesan'] = "<strong>Password Berhasil Diubah!</strong>";
        } else {
            $_SESSION['error'] = "<strong>Konfirmasi Password Salah!</strong>";
        }
    } else {
        $_SESSION['error'] = "<strong>Password Lama Salah!</strong>";
    }


    $error = true;
}
?>
<div class="content">
    <?php require 'layouts/navbar.php'; ?>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Halaman Profile
        </h2>
        <div class="col-span-4">
            <?php if (isset($_SESSION['pesan'])) { ?>
            <div class="alert alert-primary alert-dismissible show flex items-center mb-2" role="alert"> <i
                    data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>
                <?= $_SESSION['pesan'];  ?> <button type="button" class="btn-close text-white" data-tw-dismiss="alert"
                    aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
            <?php unset($_SESSION['pesan']); ?>
            <?php } ?>
            <?php if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger alert-dismissible show flex items-center mt-2 mb-2" role="alert"> <i
                    data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i>
                <?= $_SESSION['error'];  ?> <button type="button" class="btn-close text-white" data-tw-dismiss="alert"
                    aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button> </div>
            <?php unset($_SESSION['error']); ?>
            <?php } ?>
        </div>
    </div>
    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img data-action="zoom" alt="Profile" class="rounded-full" src="admin/<?= $admin["img_dir"]; ?>">
                    <div
                        class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-primary rounded-full p-2">
                        <i class="w-4 h-4 text-white" data-lucide="camera"></i>
                    </div>
                </div>
                <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">
                        <?= $admin["nama_lengkap"]; ?></div>
                    <div class="text-slate-500">Administrator</div>
                </div>
            </div>
            <div
                class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-3">Contact Details</div>
                <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                    <div class="truncate sm:whitespace-normal flex items-center"> <i data-lucide="phone-call"
                            class="w-4 h-4 mr-2"></i> +62 859-5131-4901 </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-lucide="facebook"
                            class="w-4 h-4 mr-2"></i> Mualaf Center Sulteng </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-lucide="instagram"
                            class="w-4 h-4 mr-2"></i> Mualaf Center Sulteng
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5">
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <img data-action="zoom" alt="Profile" class="rounded-full"
                            src="admin/<?= $admin["img_dir"]; ?>">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base"><?= $admin["nama_lengkap"]; ?></div>
                        <div class="text-slate-500">Administrator</div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"
                            data-tw-toggle="dropdown"> <i data-lucide="more-horizontal"
                                class="w-5 h-5 text-slate-500"></i> </a>
                        <div class="dropdown-menu w-56">
                            <ul class="dropdown-content">
                                <li>
                                    <h6 class="dropdown-header">
                                        Export Options
                                    </h6>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="layout" class="w-4 h-4 mr-2"></i>
                                        English </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="sidebar" class="w-4 h-4 mr-2"></i>
                                        Indonesia </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <div class="flex p-1">
                                        <button type="button" class="btn btn-primary py-1 px-2">Settings</button>
                                        <button type="button" class="btn btn-secondary py-1 px-2 ml-auto">View
                                            Profile</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center text-primary font-medium" href=""> <i data-lucide="activity"
                            class="w-4 h-4 mr-2"></i> Personal Information </a>
                    <a class="flex items-center mt-5" href="admin.php"> <i data-lucide="user-plus"
                            class="w-4 h-4 mr-2"></i>
                        Tambah
                        Admin </a>
                    <a class="flex items-center mt-5" href="javascript:;" data-tw-toggle="modal"
                        data-tw-target="#ubahPasswordModal"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Ubah
                        Password </a>

                    <!-- Modal Ubah Password -->
                    <div id="ubahPasswordModal" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- BEGIN: Modal Header -->
                                <div class="modal-header">
                                    <h2 class="font-medium text-base mr-auto">Ubah Password</h2> <button type="button"
                                        data-tw-dismiss="modal" class="btn btn-secondary"><i class="w-5 h-5"
                                            data-lucide="x"></i></button>

                                </div>
                                <!-- END: Modal Header -->
                                <!-- BEGIN: Modal Body -->
                                <form action="" method="POST">
                                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                        <input type="hidden" name="username" value="<?= $_SESSION["username"]; ?>">
                                        <div class="col-span-12">
                                            <label for="password_lama" class="form-label">Password Lama</label>
                                            <input id="password_lama" type="text" name="password_lama"
                                                class="form-control" placeholder="Password Lama" autocomplete="off">
                                        </div>
                                        <div class="col-span-12">
                                            <label for="password_baru" class="form-label">Password Baru</label>
                                            <input id="password_baru" type="text" name="password_baru"
                                                class="form-control" placeholder="Password Baru" autocomplete="off">
                                        </div>
                                        <div class="col-span-12">
                                            <label for="konfirmasi_password" class="form-label">Konfirmasi
                                                Password</label>
                                            <input id="konfirmasi_password" type="text" name="konfirmasi_password"
                                                class="form-control" placeholder="Konfirmasi Password"
                                                autocomplete="off">
                                            <!-- BEGIN: Modal Footer -->
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" data-tw-dismiss="modal"
                                            class="btn btn-outline-secondary w-20 mr-1">Batal</button> <button
                                            type="submit" name="ubah" class="btn btn-primary w-20">Ubah</button>
                                    </div>
                                    <!-- END: Modal Footer -->
                                </form>
                            </div>
                        </div>
                    </div>

                    <a class="flex items-center mt-5" href="javascript:;" data-tw-toggle="modal"
                        data-tw-target="#controlMenuModal"> <i data-lucide="layout" class="w-4 h-4 mr-2"></i>
                        Control Menu </a>

                    <!-- Modal Control Menu -->
                    <div id="controlMenuModal" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- BEGIN: Modal Header -->
                                <div class="modal-header">
                                    <h2 class="font-medium text-base mr-auto">Control Menu</h2> <button type="button"
                                        data-tw-dismiss="modal" class="btn btn-secondary"><i class="w-5 h-5"
                                            data-lucide="x"></i></button>

                                </div>
                                <!-- END: Modal Header -->
                                <!-- BEGIN: Modal Body -->
                                <form action="pengaturan/ubah_menu.php" method="POST">
                                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                        <div class="col-span-12">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">Menu</th>
                                                        <th class="whitespace-nowrap">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql = mysqli_query($conn, "SELECT * FROM tb_menu");
                                                    while ($control = mysqli_fetch_assoc($sql)) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $control["menu"]; ?></td>
                                                        <td>
                                                            <div class="form-check form-switch justify-content-center">
                                                                <input id="checkbox-switch-7" name="status"
                                                                    class="form-check-input" type="checkbox" value="1"
                                                                    <?php if ($control["status"] == "1") echo 'checked'; ?>>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" data-tw-dismiss="modal"
                                            class="btn btn-outline-secondary w-20 mr-1">Batal</button> <button
                                            type="submit" name="control" class="btn btn-primary w-20">Ubah</button>
                                    </div>
                                    <!-- END: Modal Footer -->
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Detail Data Administrator
                    </h2>
                </div>
                <div class="p-5">
                    <div class="flex flex-col-reverse xl:flex-row flex-col">
                        <div class="flex-1 mt-6 xl:mt-0">
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 2xl:col-span-6">
                                    <div>
                                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                        <input id="nama_lengkap" type="text" class="form-control"
                                            placeholder="Input text" value="<?= $admin["nama_lengkap"]; ?>" disabled>
                                    </div>
                                    <div class="mt-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input id="username" type="text" class="form-control" placeholder="Input text"
                                            value="<?= $admin["username"]; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                            <div
                                class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    <img data-action="zoom" class="rounded-md" alt="Profle"
                                        src="admin/<?= $admin["img_dir"]; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Display Information -->
        </div>
    </div>
    <!-- END: Profile Info -->
</div>
<?php
require 'layouts/footer.php'
?>