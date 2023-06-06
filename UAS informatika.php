<?php
echo "UAS INFORMATIKA";
echo "<br>";
echo "Nama : MOHAMMAD ZAKY BAHTYAR ARIFIANTO ";
echo "<br>";
echo "Kelas : X RPL 1";
echo "<br>";
echo "No Absen : 18";
echo "<br>";
echo "<br>";
echo "KALKULASI JUMLAH KALORI";
echo "<hr>";

$kaloriPerMakanan = 2500;

$jumlahMakanPerHari = array(
    'Jika Senin Fu Makan Sebangak 3×, Maka Fu Akan Mendapatkan Kalori Sebanyak ' => 3,
    'Jika Selasa Fu Makan Sebangak 2×, Maka Fu Akan Mendapatkan Kalori Sebanyak' => 2,
    'Jika Rabu Fu Makan Sebanyak 2×, Maka Fu Akan Mendapatkan Kalori Sebanyak' => 2,
    'Jika Kamis Makan Sebanyak 3×, Maka Fu Akan Mendapatkan Kalori Sebanyak ' => 3,
    'Jika Jumat Makan Sebangak 3×, Maka Fu Akan Mendapatkan Kalori Sebanyak ' => 3,
    'Sabtu Makan Sebanyak 2×, Maka Fu Akan Mendapatkan Kalori Sebanyak' => 2,
    'Minggu Makan Sebanyak 1×, Maka Fu Akan Mendapatkan Kalori Sebanyak' => 1
);

$jumlahKaloriPerHari = array();
$jumlahKaloriPerMinggu = 0;

foreach ($jumlahMakanPerHari as $hari => $jumlahMakan) {
    $kaloriHariIni = $jumlahMakan * $kaloriPerMakanan;
    $jumlahKaloriPerHari[$hari] = $kaloriHariIni;
    $jumlahKaloriPerMinggu += $kaloriHariIni;
}

echo "Jumlah kalori per hari :<br>";
foreach ($jumlahKaloriPerHari as $hari => $jumlahKalori) {
    echo $hari . ": " . $jumlahKalori . " kalori<br>";
}

echo "<br>Jumlah kalori per minggu Yang Didapatkan Fu Sebangak: " . $jumlahKaloriPerMinggu . " kalori <br>";

echo"<br>";
echo"KALKULASI WAKTU ISTIRAHAT";
echo"<hr>";

$waktuIstirahatPerHari = array(
    'Senin Fu Istirahat Selama' => 5,
    'Selasa Fu Istirahat Selama' => 6,
    'Rabu Fu Istirahat Selama' => 8,
    'Kamis Fu Istirahat Selama' => 8,
    'Jumat Fu Istirahat Selama' => 5,
    'Sabtu Fu Istirahat Selama' => 6,
    'Minggu Fu Istirahat Selama' => 4
);

$waktuIstirahatPerMinggu = 0;

foreach ($waktuIstirahatPerHari as $hari => $waktuIstirahat) {
    $waktuIstirahatPerMinggu += $waktuIstirahat;
}

echo "Jumlah waktu istirahat per hari:<br>";
foreach ($waktuIstirahatPerHari as $hari => $waktuIstirahat) {
    echo $hari . ": " . $waktuIstirahat . " jam<br>";
}

echo "<br>Jumlah waktu istirahat Fu per minggu: " . $waktuIstirahatPerMinggu . " jam<br>";

echo"<br>";
echo"MENCARI TAU APAKAH FU SAKIT ATAU SEMBUH";
echo"<hr>";

function hitungStatusKesehatan($kalori, $istirahat) {
    $kaloriMaksimum = 2500; // Jumlah kalori maksimum per hari
    $istirahatMinimum = 8; // Jumlah jam istirahat minimum per hari

    $totalKalori = array_sum($kalori);
    $totalIstirahat = array_sum($istirahat);

    if ($totalKalori / count($kalori) > $kaloriMaksimum || $totalIstirahat / count($istirahat) < $istirahatMinimum) {
        return "sakit";
    } else {
        return "sembuh";
    }
}

// Contoh data kalori dan istirahat dalam seminggu
$kalori = array(7500, 5000, 5000, 7500, 7500, 5000, 2500);
$istirahat = array(5, 6, 8, 8, 5, 6, 4);

$statusKesehatan = hitungStatusKesehatan($kalori, $istirahat);
echo "Jadi Status kesehatan Fu Sekarang: " . $statusKesehatan;
?>
