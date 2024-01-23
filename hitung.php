<?php
$B1 = 0;
$B2 = 0;
$B3 = 0;
$B4 = 0;
$B5 = 0;
$B6 = 0;
$B7 = 0;
$B8 = 0;
$B9 = 0;
$B10 = 0;
$B11 = 0;
$B12 = 0;
$B13 = 0;
$B14 = 0;
$B15 = 0;
$B16 = 0;
$B17 = 0;
$B18 = 0;
$B19 = 0;
$B20 = 0;
$B21 = 0;
$B22 = 0;
$B23 = 0;

$sql = "SELECT*FROM tb_gejala_testing";
$hasil = $conn->query($sql);
if ($hasil->num_rows > 0) {
    while ($row = $hasil->fetch_row()) {
        $B1 = $row[2];
        $B2 =$row[3];
        $B3 = $row[4];
        $B4 = $row[5];
        $B5 = $row[5];
        $B6 = $row[6];
        $B7 = $row[7];
        $B8 = $row[8];
        $B9 = $row[9];
        $B10 = $row[9];
        $B11 = $row[11];
        $B12 = $row[12];
        $B13 = $row[13];
        $B14 = $row[14];
        $B15 = $row[15];
        $B16 = $row[16];
        $B17 = $row[17];
        $B18 = $row[18];
        $B19 = $row[19];
        $B20 = $row[20];
        $B21 = $row[21];
        $B22 = $row[22];
        $B23 = $row[23];
    }
}

$sql = "SELECT*FROM tb_gejala_training";
$hasil = $conn->query($sql);
$jaraks = array();
sort($jaraks);
while ($row = $hasil->fetch_row()) {
    $jaraks[$row[1]] = pow($B2 - $row[2], 2) +
        pow($B3 - $row[3], 2) +
        pow($B4 - $row[4], 2) +
        pow($B5 - $row[5], 2) +
        pow($B6 - $row[6], 2) +
        pow($B7 - $row[7], 2) +
        pow($B8 - $row[8], 2) +
        pow($B9 - $row[9], 2) +
        pow($B10 - $row[10], 2) +
        pow($B11 - $row[11], 2) +
        pow($B12 - $row[12], 2) +
        pow($B13 - $row[13], 2) +
        pow($B14 - $row[14], 2) +
        pow($B15 - $row[15], 2) +
        pow($B16 - $row[16], 2) +
        pow($B17 - $row[17], 2) +
        pow($B18 - $row[18], 2) +
        pow($B19 - $row[19], 2) +
        pow($B20 - $row[20], 2) +
        pow($B21 - $row[21], 2) +
        pow($B22 - $row[22], 2) +
        pow($B23 - $row[23], 2);
}