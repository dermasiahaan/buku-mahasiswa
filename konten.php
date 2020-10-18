<?php
    if(!defined('INDEX')) die("");
    $halaman = array("datamasuk", "dashboard", "bukumahasiswa", "tambahdata", "ubah", "hapus", "cetak", "detail", );
    if(isset($_GET['hal'])) $hal = $_GET['hal'];
    else $hal = "datamasuk";
    foreach($halaman as $h){
        if($hal == $h){
            include "$h.php";
            break;
        }
    }
?>