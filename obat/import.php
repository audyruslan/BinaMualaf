<?php 
session_start();
require '../functions.php';

if(isset($_POST["import"])){
    $fileName = $_FILES["import"]["name"];
    $fileExtension = explode('.', $fileName);
    $fileExtension = strtolower(end($fileExtension));
    $newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

    $targetDirectory = "dist/document/penyakit/" . $newFileName;
    move_uploaded_file($_FILES['import']['tmp_name'], $targetDirectory);

    error_reporting(0);
    ini_set('display_errors', 0);

    require 'dist/excelReader/excel_reader2.php';
    require 'dist/excelReader/SpreadsheetReader.php';

    $reader = new SpreadsheetReader($targetDirectory);
    foreach($reader as $key => $row){
        $nama_penyakit = $row[0];
        mysqli_query($conn, "INSERT INTO tb_penyakit VALUES('', '$nama_penyakit')");
    }

    echo
    "
    <script>
    alert('Succesfully Imported');
    document.location.href = 'penyakit.php';
    </script>
    ";
}
?>