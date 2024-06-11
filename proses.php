<?php
include "koneksi.php";

if (isset($_POST["proses"])) {
    $nama_mhs = $_POST['input1'];
    $prodi = $_POST['input2'];
    $npm = $_POST['input3'];
    $proses = mysqli_query($koneksi, "INSERT INTO mahasiswa (nama_mhs, prodi, npm) VALUES ('$nama_mhs', '$prodi', '$npm')") or die(mysqli_error($koneksi));
    $huruf_mutu = '';

    if ($proses) {
        echo "<script>
        alert('SUKSES: Data berhasil ditambahkan');
        window.location.assign('index.php');
        </script>";
    } else {
        echo "<script>alert('gagal')</script>";
    }

}
?>