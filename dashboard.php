<?php

session_start();
    if(!defined('INDEX')) die("");
?>

<h1>Selamat Datang</h1> 
<?php 
echo $_SESSION ['nama_lengkap']
?>