<?php 
    if(!defined('INDEX')) die("");
    require 'config.php';
    if(isset($_POST["submit"])){
        if (tambah($_POST) > 0) {
            echo "
                <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = '?hal=bukumahasiswa';
                </script>
            ";
        }else{
            echo "
                <script>
                alert('Data Gagal ditambahkan!');
                document.location.href = '?hal=bukumahasiswa';
                </script>
            ";
            echo mysqli_error($conn);
        }
    }
?>

<h2 style="color:black; margin-left:10px;    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif 
">Tambah data</h2>
<hr>
<form action="" method="post" enctype="multipart/form-data" style="margin-left:10px; color:black">
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="nama" name="nama">
    </div>
  </div>

  <div class="form-group row">
    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="nim" name="nim">
    </div>
  </div>

  <div class="form-group row">
    <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="prodi" name="prodi">
    </div>
  </div>

  <div class="form-group row">
    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
    <div class="col-sm-5">
    <textarea class="form-control" id="jurusan" rows="3" name="jurusan"></textarea>
    </div>
    </div>

  <div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="alamat" name="alamat">
    </div>
  </div>

  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="email" name="email">
    </div>
  </div>

  <div class="form-group row">
    <label for="nohp" class="col-sm-2 col-form-label">No. HandPhone</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="nohp" id="nohp" onkeypress="return event.charCode >= 48 && event.charCode <=57">
    </div>
  </div>

  <div class="form-group row">
    <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="angkatan" id="angkatan">
    </div>
  </div>

  <div class="form-group row">
    <label for="peminatan" class="col-sm-2 col-form-label">Peminatan</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="peminatan" id="peminatan">
    </div>
  </div>

  

  <div class="form-group row">
    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
    <div class="col-sm-4">
        <input type="file" class="form-control-file" id="gambar" name="gambar">
    </div>
</div>

<button type="submit" name="submit">Tambah</button>

</form>