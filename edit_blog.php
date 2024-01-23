<?php
$title = "Ubah Blog/Berita - Puskesmas Bahodopi";
$menu = "Ubah Content Blog/Berita";
require 'layouts/header.php';
require 'layouts/sidebar_mobile.php';
require 'layouts/sidebar.php';

$id = $_GET["id"];
// Ambil Blog dengan id = id
$query = mysqli_query($conn, "SELECT * FROM tb_blog WHERE id = '$id'");
$blog = mysqli_fetch_assoc($query);
?>
<div class="content">
    <?php require 'layouts/navbar.php'; ?>
    <form action="blog/ubah.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $row["id"]; ?>">
        <input type="hidden" name="imgLama" value="<?= $row["img_blog"]; ?>">
        <div class="flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Blog/Berita
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <button type="submit" name="ubah" class="btn btn-primary shadow-md mr-2">Ubah Data</button>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <!-- BEGIN: Classic Editor -->
            <div class="col-span-12">
                <div class="box">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Blog/Berita
                        </h2>
                        <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        </div>
                    </div>
                    <div class="p-5" id="classic-editor">
                        <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-6">
                                <label for="judul_blog" class="form-label">Judul Blog</label>
                                <input type="text" class="form-control" id="judul_blog" name="judul_blog"
                                    autocomplete="off" value="<?= $blog["judul_blog"]; ?>" placeholder="Judul Blog">
                            </div>
                            <div class="col-span-6">
                                <label for="img_blog" class="form-label">Image Blog</label>
                                <input type="file" class="form-control" id="img_blog" name="img_blog">
                            </div>
                        </div>
                        <div class="preview mt-5">
                            <textarea class="editor" name="content" id="content">
                                    <p><?= $blog["content"]; ?></p>
                                </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Classic Editor -->
</div>
</form>
</div>
<?php
require 'layouts/footer.php'
?>