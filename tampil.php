<?php
include_once("koneksi.php");

$keyword = "Tabel Data Mahasiswa";
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);

if (isset($_POST["cari"])) {
    $cari = $_POST["cari"];
    if (!is_numeric($cari)) {
        echo "<script>alert('Input harus berupa angka');</script>";
    } else {
        if (strlen($cari) < 13) {
            echo "<script>alert('Digit npm kurang dari 13 angka');</script>";
        } elseif (strlen($cari) > 13) {
            echo "<script>alert('Digit npm lebih dari 13 angka');</script>";
        } else {
            if (!empty($cari)) {
                $keyword = "Hasil Pencarian untuk \"$cari\"";
            }
            $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE  npm LIKE '%$cari%'");
        }
    }
}