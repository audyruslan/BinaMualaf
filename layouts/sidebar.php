<!-- BEGIN: Side Menu -->
<nav class="side-nav">
    <a href="home.php" class="intro-x flex items-center pl-5 pt-4 mt-3">
        <img alt="Logo" class="w-12" src="assets/img/logo.png">
        <span class="hidden xl:block text-white text-lg ml-3"> MCI PEDULI </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="home.php" class="side-menu <?php if ($menu == "Dashboard") echo "side-menu--active"; ?>">
                <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="side-menu__title">
                    Dashboard
                </div>
            </a>
        </li>
        <li>
            <a href="alternatif.php" class="side-menu <?php if ($menu == "Alternatif") echo "side-menu--active"; ?>">
                <div class="side-menu__icon"> <i data-lucide="plus-square"></i> </div>
                <div class="side-menu__title"> Alternatif </div>
            </a>
        </li>

        <?php
        $sql = mysqli_query($conn, "SELECT * FROM tb_menu WHERE menu = 'Algoritma'");
        $menuControl = mysqli_fetch_assoc($sql);
        if ($menuControl["status"] != 0) {
        ?>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="code"></i> </div>
                <div class="side-menu__title"> Algoritma-KNN </div>
                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="data_training.php" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Data Training </div>
                    </a>
                </li>
                <li>
                    <a href="data_testing.php" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Data Testing </div>
                    </a>
                </li>
            </ul>
        </li>
        <?php } ?>
        <li class="side-nav__devider my-6"></li>
        <li>
            <a href="profile.php" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="settings"></i> </div>
                <div class="side-menu__title"> Pengaturan </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-modal-preview" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="log-out"></i> </div>
                <div class="side-menu__title">
                    Keluar
                </div>
            </a>
        </li>

        <!-- BEGIN: Modal Content -->
        <div id="delete-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="p-5 text-center">
                            <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                            <div class="text-3xl mt-5">Anda Yakin Ingin Keluar?</div>
                            <div class="text-slate-500 mt-2">Jika anda keluar, semua aktivitas akan berakhir.
                            </div>
                        </div>
                        <div class="px-5 pb-8 text-center">
                            <button type="button" data-tw-dismiss="modal"
                                class="btn btn-outline-secondary w-24 mr-1">Batal</button>
                            <a href="logout.php" class="btn btn-dark w-24">Keluar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Modal Content -->
    </ul>
</nav>
<!-- END: Side Menu -->