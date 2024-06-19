<?php
$B1 = 0;
$B2 = 0;
$B3 = 0;
$B4 = 0;
$B5 = 0;
$sql = "SELECT*FROM tb_testing";
$hasil = $conn->query($sql);
if ($hasil->num_rows > 0) {
    while ($row = $hasil->fetch_row()) {
        $B1 = $row[2];
        $B2 = $row[3];
        $B3 = $row[4];
        $B4 = $row[5];
        $B5 = $row[6];
    }
}

$sql = "SELECT*FROM tb_training";
$hasil = $conn->query($sql);
$jaraks = array();
sort($jaraks);
while ($row = $hasil->fetch_row()) {
    $jaraks[$row[1]] = pow($B1 - $row[2], 2) +
        pow($B2 - $row[3], 2) +
        pow($B3 - $row[4], 2) +
        pow($B4 - $row[5], 2) +
        pow($B5 - $row[6], 2);
}
