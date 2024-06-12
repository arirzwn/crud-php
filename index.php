<?php
include_once("tampil.php");
include_once('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="library/assets/styles.css" rel="stylesheet" media="screen">
    <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
<div class="container">
    <div class="container-fluid">
        <nav class="navbar navbar-inverse">
            <div class="navbar-inner">
                <a class="brand" href="#">Data Mahasiswa</a>
            </div>
        </nav>
        <div class="span9" id="content">
            <div class="row-fluid">
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Tambah Data Baru</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <form action="proses.php" method="POST">
                                <fieldset>
                                    <legend>INPUT DATA MAHASISWA</legend>
                                    <div class="control-group">
                                        <label for="npm">NAMA</label>
                                        <div class="controls">
                                            <input type="text" name="input1" value="" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label for="npm">PRODI</label>
                                        <div class="controls">
                                            <input type="text" name="input2" value="" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label for="npm">NPM</label>
                                        <div class="controls">
                                            <input type="text" name="input3" value="" required>
                                        </div>
                                    </div>

                                    <div class="form_action">
                                        <button type="submit" class="btn btn-success" name="proses">Tambah</button>
                                        <button type="reset" class="btn">Reset</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="control-group" style="margin-bottom: 90px">
                <label for="npm">CARI DATA MAHASISWA</label>

                <form action="" class="navbar-search" method="POST">

                    <div class="controls">
                        <input type="text" name="cari" placeholder="Masukan npm" required>
                    </div>

                    <button type="submit" class="btn btn-success">Cari</button>
                    <a href="index.php" class="btn">Reset</a>
                </form>
            </div>

            <div class="row-fluid">
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Tabel Data Mahasiswa</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>NPM</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Prodi</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($result as $data) {
                                    ?>
                                    <tr>
                                        <td><?php echo $data['npm']; ?></td>
                                        <td><?php echo $data['nama_mhs']; ?></td>
                                        <td><?php echo $data['prodi']; ?></td>
                                        <td><a href="edit.php?id=<?php echo $data['id']; ?>">EDIT</a>
                                            | <a href="hapus.php?id=<?php echo $data['id']; ?>">HAPUS</a></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>