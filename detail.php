<?php 
if(!defined('INDEX')) die("");
require 'config.php';
//ambil data dari url
$id = $_GET['id'];

//query data mahasiswa berdasarkan id
$dfmahasiswa = query("SELECT * FROM akademik WHERE id = $id")[0];
if(isset($_POST["cari"])){
    $dfmahasiswa = cari($_POST["keyword"]);
}
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Data Mahasiswa</title>
</head>
<body>
    <h1 style="text-align:center">Informasi Mahasiswa</h1>
    <div class="container bg-light" style="width: 65%; margin: 0 auto;">
    <div class="row" style="padding:15px 0px 15px 0px">
        <!-- Image -->
        <div class="col-sm-4" style="border-right: 1px solid lightgray; text-align:center">
            <?php echo "<img src='img/$dfmahasiswa[gambar]' width='200' height='250' />";?>
        </div>
        <!-- End Image  -->

        <!-- Detail Informasi -->
        <div class="col-sm-8">
        <table class="table table-borderless" style="margin-top:-17px; color:black; width:480px">
            <tbody>
                <tr>
                    <th width="150px">Nama</th>
                    <td width="50px">:</td>
                    <td width="300px"><?= $dfmahasiswa["nama"]; ?></td>
                </tr>

                <tr>
                    <th scope="row">NIM</th>
                    <td>:</td>
                    <td><?= $dfmahasiswa["nim"]; ?></td>
                </tr>

                <tr>
                    <th>Program Studi</th>
                    <td>:</td>
                        <td><?= $dfmahasiswa["prodi"]; ?></td>
                </tr>

                <tr>
                    <th>Jurusan</th>
                    <td>:</td>
                    <td><?= $dfmahasiswa["jurusan"]; ?></td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td><?= $dfmahasiswa["alamat"]; ?></td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>:</td>
                    <td><?= $dfmahasiswa["email"]; ?></td>
                </tr>

                <tr>
                    <th>Nomor HandPhone</th>
                    <td>:</td>
                    <td><?= $dfmahasiswa["nohp"]; ?></td>
                </tr>

                <tr>
                    <th>Angkatan</th>
                    <td>:</td>
                    <td><?= $dfmahasiswa["peminatan"]; ?></td>
                </tr>

                <tr>
                    <th></th>
                    <td></td>
                    <td>
                    <a class="btn btn-primary" href="?hal=ubah&id=<?= $dfmahasiswa['id']; ?>">Ubah</a>
                    <a class="btn btn-danger" href="?hal=hapus&id=<?= $dfmahasiswa['id']; ?>">Hapus</a>
                   
                </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>