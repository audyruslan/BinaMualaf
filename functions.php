<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_sape");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Hapus Data Dokter
function hapus_dokter($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_dokter WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

// Hapus Data Pasien
function hapus_pasien($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_pasien WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

// Hapus Data Penyakit
function hapus_penyakit($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_penyakit WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

// Hapus Data Gejala
function hapus_gejala($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_gejala WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

// Hapus Data Training
function hapus_training($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_training WHERE id_rm = '$id'");
    return mysqli_affected_rows($conn);
}

// Hapus Data Obat
function hapus_obat($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_obat WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

// Hapus Data Ruangan
function hapus_ruangan($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_ruangan WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

// Hapus Data Blog
function hapus_blog($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_blog WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

// Hapus Data Pegawai
function hapus_pegawai($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_pegawai WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

// Upload Image Blog
function image_blog()
{
    $namaFile = $_FILES['img_blog']['name'];
    $tmpName = $_FILES['img_blog']['tmp_name'];

    move_uploaded_file($tmpName, '../assets/img/blog/' . $namaFile);

    return $namaFile;
}

function avatar($character)
{
    $path = "image/" . time() . ".png";
    $image = imagecreate(200, 200);
    $red = rand(0, 255);
    $green = rand(0, 255);
    $blue = rand(0, 255);
    imagecolorallocate($image, $red, $green, $blue);
    $textcolor = imagecolorallocate($image, 255, 255, 255);

    $font = dirname(__FILE__) . "/assets/font/arial.ttf";

    imagettftext($image, 100, 0, 55, 150, $textcolor, $font, $character);
    imagepng($image, $path);
    imagedestroy($image);
    return $path;
}

// Cari Data Pasien
function cari_pasien($keyword)
{
    $query = "SELECT * FROM tb_pasien
				WHERE
			  nama_lengkap LIKE '%$keyword%' OR
			  no_hp LIKE '%$keyword%' OR
			  jenis_kelamin LIKE '%$keyword%' OR
			  penyakit LIKE '%$keyword%' OR
			  alamat LIKE '%$keyword%'
			";
    return query($query);
}