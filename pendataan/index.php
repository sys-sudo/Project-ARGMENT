<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPB->(SISTEM PENDATAAN BARANG)</title>
    <meta name="description" content="APLIKASI PENDATAAN BARANG SMKS FARMASI BINTANG HARAPAN 2024">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="SPB, SISTEM PENDATAAN BARANG">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="module/module_database/style.css">
    <link rel="stylesheet" href="module/module_check_koneksi/style.css">
    <link rel="stylesheet" href="module/module_realtime_jam/style.css">
    <link rel="stylesheet" href="module/module_center/style.css">
    <link rel="stylesheet" href="module/module_garis/style.css">
    <link rel="stylesheet" href="module/module_pengukur_layar/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<script src="module/module_unsupport_layar/script.js"></script>
<?php
include "module/module_database/index.php";
include "module/module_check_koneksi/index.php";
?>
<p>
<div class="garis"></div>
</p>
<div class="container_tengah">
<span class="info-database">Status DATABASE:&nbsp;</span>
<span id="status_database" class="status-database" style="color: <?php echo $color_database; ?>;"><?php echo $status_database; ?></span>
<script src="module/module_check_koneksi/script.js"></script>
&nbsp; | &nbsp;
<span class="info-internet">Status INTERNET:&nbsp;</span>
<span id="status_internet" class="status-internet"></span>
<script src="module/module_check_koneksi/script.js"></script>
&nbsp; | &nbsp;
<span class="info_jam">WAKTU:&nbsp;</span>
<span id="info_jam" class="status_jam"></span>
<script src="module/module_realtime_jam/script.js"></script>
&nbsp; | &nbsp;
<span class="info_layar">Ukuran LAYAR:&nbsp;</span>
<span id="ukuran-layar" class="status_layar"></span>
<script src="module/module_pengukur_layar/script.js"></script>
</div>
<p>
<div class="garis"></div>
</p>
<div class="container_tengah">
<i class="fas fa-globe"></i>
<?php
    $ip = file_get_contents('https://api.ipify.org');
    echo "IP PUBLIK: " . $ip;
?>
&nbsp;|&nbsp;
<i class="fas fa-globe"></i>
<?php
$ip_lokal = $_SERVER['SERVER_ADDR'];

echo "IP LOKAL: " . $ip_lokal;
?>
&nbsp;|&nbsp;
<?php
// Ganti dengan alamat IP yang ingin Anda deteksi
$ipAddress = file_get_contents('https://api.ipify.org');

// Bangun URL untuk kueri ke ipinfo.io API
$url = "https://ipinfo.io/$ipAddress/json";

// Lakukan kueri HTTP
$response = file_get_contents($url);

// Konversi respons JSON ke array
$data = json_decode($response, true);

// Menampilkan informasi negara
echo 'Negara: ' . $data['country'] . "\n";
echo '[ ' . $data['loc'] . ' ]' . "\n";
?>
</div>
<p>
<div class="garis"></div>
</p>
<script src="module/module_bahasa/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.js" integrity="sha256-1PYCpx/EXA36KN1NKrK7auaTylVyk01D98R7Ccf04Bc=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/color/jquery.color-2.2.0.js" integrity="sha256-gvMJWDHjgDrVSiN6eBI9h7dRfQmsTTsGU/eTT8vpzNg=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/pep/0.4.3/pep.js" integrity="sha256-yZpZULjaPllFSRFfS6JsDvucyRd3yNo7yKc/YsMQAsk=" crossorigin="anonymous"></script>
</body>
</html>