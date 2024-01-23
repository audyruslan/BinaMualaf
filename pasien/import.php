<?php 
session_start();
require '../functions.php';

if(isset($_POST["import"])){
    print_r($_FILES);
    $fileName = $_FILES["import"]["name"];
    $fileExtension = explode('.', $fileName);
    $fileExtension = strtolower(end($fileExtension));
    $newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

    $targetDirectory = "dist/document/pasien/" . $newFileName;
    move_uploaded_file($_FILES['import']['tmp_name'], $targetDirectory);

    error_reporting(0);
    ini_set('display_errors', 0);

    require 'dist/excelReader/excel_reader2.php';
    require 'dist/excelReader/SpreadsheetReader.php';

    $reader = new SpreadsheetReader($targetDirectory);
    foreach($reader as $key => $row){
        $nama_lengkap = $row[0];
        $no_hp = $row[1];
        $jenis_kelamin = $row[2];
        $penyakit = $row[3];
        $alamat = $row[4];
        
        mysqli_query($conn, "INSERT INTO tb_pasien VALUES('', '$nama_lengkap', '$no_hp', '$jenis_kelamin','$penyakit','$alamat')");
    }

    echo
    "
    <script>
    alert('Succesfully Imported');
    document.location.href = 'pasien.php';
    </script>
    ";
}
?>