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
                            Administrator
                        </h2>
                        <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw"
                                class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="plus-square" class="report-box__icon text-primary"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer"
                                                title="33% Higher than last month"> 33% <i data-lucide="chevron-up"
                                                    class="w-4 h-4 ml-0.5"></i> </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"><?= $totDokter; ?> Tenaga</div>
                                    <div class="text-base text-slate-500 mt-1">Dokter</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="users" class="report-box__icon text-pending"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-danger tooltip cursor-pointer"
                                                title="2% Lower than last month"> 2% <i data-lucide="chevron-down"
                                                    class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"><?= $totPasien; ?> Data</div>
                                    <div class="text-base text-slate-500 mt-1">Pasien</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="monitor" class="report-box__icon text-warning"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer"
                                                title="12% Higher than last month"> 12% <i data-lucide="chevron-up"
                                                    class="w-4 h-4 ml-0.5"></i> </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"><?= $totPenyakit; ?> Data</div>
                                    <div class="text-base text-slate-500 mt-1">Penyakit</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="user" class="report-box__icon text-success"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer"
                                                title="22% Higher than last month"> 22% <i data-lucide="chevron-up"
                                                    class="w-4 h-4 ml-0.5"></i> </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"><?= $totAdmin; ?> Data</div>
                                    <div class="text-base text-slate-500 mt-1">Administrator</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->

                <!-- Data Penyakit -->
                <div class="col-span-12 sm:col-span-6 lg:col-span-6 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Tabel Penyakit
                        </h2>
                    </div>
                    <div class="intro-y box p-5 mt-5">
                        <table id="penyakitTable" class="table table-report sm:mt-2">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Nama Penyakit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 1;
                                    $sql = mysqli_query($conn, "SELECT * FROM tb_penyakit");
                                    while ($row = mysqli_fetch_assoc($sql)) {
                                    ?>
                                <tr class="intro-x">
                                    <td class="text-center w-20">
                                        <?= $i; ?>
                                    </td>
                                    <td class="text-center"><?= $row["nama_penyakit"]; ?></td>
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

                <!-- Chart Penyakit -->
                <div class="col-span-12 sm:col-span-6 lg:col-span-6 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Diagram Penyakit
                        </h2>
                    </div>
                    <div class="intro-y box p-5 mt-5">
                    <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
                <!-- END: Sales Report -->

            </div>
        </div>
    </div>
</div>
<?php 
    require 'layouts/footer.php'
?>