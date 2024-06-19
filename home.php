<?php
$title = "Dashboard - Puskesmas Bahodopi";
$menu = "Dashboard";
require 'layouts/header.php';
require 'layouts/sidebar_mobile.php';
require 'layouts/sidebar.php';
?>
<div class="content">
    <?php require 'layouts/navbar.php'; ?>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Dashboard Administrator
                        </h2>
                        <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw"
                                class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="text-3xl font-medium leading-8 mt-6"><?= $totAlternatif; ?> Data</div>
                                    <div class="text-base text-slate-500 mt-1">Alternatif</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="text-3xl font-medium leading-8 mt-6"><?= $totKriteria; ?> Data</div>
                                    <div class="text-base text-slate-500 mt-1">Kriteria</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="text-3xl font-medium leading-8 mt-6"><?= $totTraining; ?> Data</div>
                                    <div class="text-base text-slate-500 mt-1">Training</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="text-3xl font-medium leading-8 mt-6"><?= $totAdmin; ?> Data</div>
                                    <div class="text-base text-slate-500 mt-1">Administrator</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->

                <!-- Data Kriteria -->
                <div class="col-span-12 sm:col-span-6 lg:col-span-6 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Tabel Data Kriteria
                        </h2>
                    </div>
                    <div class="intro-y box p-5 mt-5">
                        <table id="penyakitTable" class="table table-report sm:mt-2">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Kriteria</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $sql = mysqli_query($conn, "SELECT * FROM tb_kriteria");
                                while ($row = mysqli_fetch_assoc($sql)) {
                                ?>
                                <tr class="intro-x">
                                    <td class="text-center w-20">
                                        <?= $i; ?>
                                    </td>
                                    <td class="text-center"><?= $row["kriteria"]; ?></td>
                                </tr>

                                <?php $i++; ?>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END: Weekly Top Seller -->

            </div>
        </div>
    </div>
</div>
<?php
require 'layouts/footer.php'
?>