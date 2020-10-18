<?php
    if(!defined('INDEX')) die("");
    require 'config.php';
    $daftartamu = mysqli_query($conn, "SELECT * FROM akademik");
    if(isset($_POST["cari"])){
        $daftartamu = cari($_POST["keyword"]);
    }
?>

<h2 class="judul" style="    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif 
; margin-left:10px">Data Mahaisiswa</h2>
<div class="pencarian">
<form action="" method="post" class="d-sm-inline-block form-inline ml-md-3 navbar-search">
    <div class="input-group">
        <input type="text" class="form-control" name="keyword" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" autofocus>
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit" name="cari">Cari</button>
        </div>
    </div>
    </form>
    </div>
    <a href="?hal=tambahdata" class="btn btn-success" style="margin-left:10px">Tambah Data</a>
    <div class="table-responsive">

    <!-- <?php 
        // if(isset($_GET['cari'])){
        //     $cari = $_GET['cari'];
        //     echo"<b> Hasil Pencarian : ".$cari."</b>";
        // }
    ?> -->
    <table class="table table-hover" style="width:75%; margin-left:10px; color:black">
    <thead>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">NIM</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Foto</th>
        <th scope="col">Aksi</th>
    </thead>
    <tbody>
    <?php 
        $i = 1;
    ?>
    <?php foreach ($daftartamu as $row) { ?>
			<tr>
				<td scope="col"><?= $i;  ?></td>
				<td scope="col"><?= $row["nama"]; ?></td>
				<td scope="col"><?= $row["jurusan"]; ?></td>
                <td scope="col"><?= $row["nim"]; ?></td>
                <td scope="col"><img src="img/<?= $row["gambar"]; ?>" width="40px"></td>
                <td scope="col">
                <a  class="btn btn-primary" href="?hal=detail&id=<?= $row['id']; ?>">Detail</a>
				<a  class="btn btn-danger" href="?hal=hapus&id=<?= $row['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php  $i++; ?>
    <?php } ?>
    </tbody>
  </table>
</div>