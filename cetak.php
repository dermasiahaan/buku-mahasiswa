<?php
require_once __DIR__ . '/vendor/autoload.php';
require 'config.php';
$daftartamu = mysqli_query($conn, "SELECT * FROM datamasuk");
$mpdf = new \Mpdf\Mpdf();
$html = '<html>
<head><title>Data Tamu</title></head>
<body>
<table class="table" style="color: black; margin-left:10px">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Tanggal Masuk</th>
        <th>Tujuan</th>
        <th>Universitas</th>
        <th>Alamat</th>
        <th>Nomor Hp</th>
        <th>Foto</th>
        <th>Aksi</th>
    </thead>
    </table>
    </body>
</html>';
$mpdf->WriteHTML('$html');
$mpdf->Output();
