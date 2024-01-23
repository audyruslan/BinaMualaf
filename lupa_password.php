<?php 
    $title = "Lupa Password - Puskesmas Bahodopi";
    $menu = "Lupa Password";
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
    <h2 class="intro-y text-lg font-medium mt-10">
        Lupa Password?
    </h2>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 sm:col-span-6">
            <!-- BEGIN: Change Password -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Ubah Password
                    </h2>
                </div>
                <div class="p-5">
                    <?php if (isset($_SESSION['pesan'])) { ?>
                    <div class="alert alert-primary alert-dismissible show flex items-center mb-2" role="alert"> <i
                            data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> <?= $_SESSION['pesan'];  ?> <button
                            type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i
                                data-lucide="x" class="w-4 h-4"></i> </button> </div>
                    <?php unset($_SESSION['pesan']); ?>
                    <?php } ?>
                    <?php if (isset($_SESSION['error'])) { ?>
                    <div class="alert alert-danger alert-dismissible show flex items-center mt-2 mb-2" role="alert"> <i
                            data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> <?= $_SESSION['error'];  ?> <button
                            type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i
                                data-lucide="x" class="w-4 h-4"></i> </button> </div>
                    <?php unset($_SESSION['error']); ?>
                    <?php } ?>
                    <form action="" method="POST">
                        <input type="hidden" name="username" value="<?= $_SESSION["username"]; ?>">
                        <div>
                            <label for="password_lama" class="form-label">Password Lama</label>
                            <input id="password_lama" type="text" name="password_lama" class="form-control"
                                placeholder="Password Lama" autocomplete="off">
                        </div>
                        <div class="mt-3">
                            <label for="password_baru" class="form-label">Password Baru</label>
                            <input id="password_baru" type="text" name="password_baru" class="form-control"
                                placeholder="Password Baru" autocomplete="off">
                        </div>
                        <div class="mt-3">
                            <label for="konfirmasi_password" class="form-label">Konfirmasi Password</label>
                            <input id="konfirmasi_password" type="text" name="konfirmasi_password" class="form-control"
                                placeholder="Konfirmasi Password" autocomplete="off">
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary mt-4">Ubah Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?php 
    require 'layouts/footer.php'
?>