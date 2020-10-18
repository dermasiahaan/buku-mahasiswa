<?php 
if(!defined('INDEX')) die("");
require 'config.php';
//ambil data dari url
$id = $_GET['id'];

//query data mahasiswa berdasarkan id
$dfmahasiswa = query("SELECT * FROM akademik WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekana apa belum    
if (isset($_POST['submit'])) {
/*     
     var_dump($_POST); 
     var_dump($_FILES);
     die;*/
// cek apakah data berhasil diubah 
    if (ubah($_POST) > 0) {
        echo "
            <script>
            alert('Data berhasil diubah!');
            document.location.href ='?hal=bukumahasiswa';
            </script>
        ";
    }else{
        echo "
            <script>
            alert('Data Gagal diubah!');
            document.location.href ='?hal=bukumahasiswa';
            </script>
        ";
    }
}


 ?>


<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1 style="margin-left:10px; color:black;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif 
">Ubah Data Mahasiswa</h1>
<hr>
    <form action="" method="post" style="margin-left:10px; color:black">
        <input type="hidden" name="id" value="<?= $dfmahasiswa["id"];  ?>">
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-4">
                <input type="text" name="nama" id="nama"size="40" required autocomplete="off" value="<?= $dfmahasiswa["nama"]; ?>">            
                </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-4">
                <input type="text" name="nim" id="nim" required autocomplete="off"  value="<?= $dfmahasiswa['nim']; ?>">        
                </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Program Studi</label>
                <div class="col-sm-4">
                <input type="text" name="prodi" id="prodi" required autocomplete="off"  value="<?= $dfmahasiswa['prodi']; ?>">        
                </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-4">
                <input type="text" name="jurusan" id="jurusan" required autocomplete="off"  value="<?= $dfmahasiswa['jurusan']; ?>">        
                </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-4">
                <input type="nama" name="alamat" id="alamat" required autocomplete="off"  value="<?= $dfmahasiswa['alamat']; ?>">        
                </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-4">
                <input type="text" name="email" id="email" required autocomplete="off"  value="<?= $dfmahasiswa['email']; ?>">        
                </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">No. HandPhone</label>
                <div class="col-sm-4">
                <input type="text" name="nohp" id="nohp" required autocomplete="off"  value="<?= $dfmahasiswa['nohp']; ?> " onkeypress="return event.charCode >= 48 && event.charCode <=57">        
                </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Angkatan</label>
                <div class="col-sm-4">
                <input type="text" name="angkatan" id="angkatan" required autocomplete="off"  value="<?= $dfmahasiswa['angkatan']; ?>">        
                </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Peminatan</label>
                <div class="col-sm-4">
                <input type="text" name="peminatan" id="peminatan" required autocomplete="off"  value="<?= $dfmahasiswa['peminatan']; ?>">        
                </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-4">
                <input type="file" name="gambar" id="gambar"  value="<?= $dfmahasiswa['gambar'];  ?>">        
                </div>
        </div>

        <button type="submit" name="submit">Ubah</button>
        
        
   </form>
</body>
</html>