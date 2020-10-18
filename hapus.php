<?php 
require 'config.php';
if(!defined('INDEX')) die("");

$id = $_GET["id"];
if (hapus($id) > 0 ) {
	echo "
            <script>
            alert('Data berhasil dihapus!');
            document.location.href ='?hal=bukumahasiswa';
            </script>
        ";
  }else{
		echo "
            <script>
            alert('Data gagal Dihapus!');
            document.location.href ='?hal=bukumahasiswa';
            </script>
          ";
	}



 ?>