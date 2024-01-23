<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Tinker admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Tinker Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Daftar - Puskesmas Bahodopi</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="dist/css/app.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Register Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="index.php" class="-intro-x flex items-center pt-5">
                    <img alt="Logo" class="w-6" src="assets/img/logo.png">
                    <span class="text-white text-lg ml-3"> Puskesmas Bahodopi </span>
                </a>
                <div class="my-auto">
                    <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="dist/images/medical.svg">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        Sistem Informasi Klasifikasi
                        <br>
                        Pada Penyakit Pasien.
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Klasifikasi
                        Data Penyakit Pasien dalam Satu Tempat.
                    </div>
                </div>
            </div>
            <!-- END: Register Info -->
            <!-- BEGIN: Register Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                        Silahkan Daftar
                    </h2>
                    <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">Sistem Informasi <br>
                        Klasifikasi Pada Penyakit Pasien.</div>
                    <div class="intro-x mt-8">
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block"
                            placeholder="Nama Lengkap" autocomplete="off">
                        <input type="email" class="intro-x login__input form-control py-3 px-4 block mt-4"
                            placeholder="Masukkan Email" autocomplete="off">
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4"
                            placeholder="Masukkan Password" autocomplete="off">
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4"
                            placeholder="Konfirmasi Password" autocomplete="off">
                    </div>
                    <div class="intro-x flex items-center text-slate-600 dark:text-slate-500 mt-4 text-xs sm:text-sm">
                        <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                        <label class="cursor-pointer select-none" for="remember-me">I agree to the Envato</label>
                        <a class="text-primary dark:text-slate-200 ml-1" href="">Privacy Policy</a>.
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Daftar</button>
                        <a href="login.php"
                            class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Masuk</a>
                    </div>
                </div>
            </div>
            <!-- END: Register Form -->
        </div>
    </div>

    <!-- BEGIN: JS Assets-->
    <script src="dist/js/app.js"></script>
    <!-- END: JS Assets-->
</body>

</html>