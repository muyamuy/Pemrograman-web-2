<?php
if (isset($_GET['submit'])) {

    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $praktik = $_GET['praktik'];

    echo "Nama: $nama <br>";
    echo "Mata Kuliah : $matkul <br>";
    echo "Nilai UTS: $uts <br>";
    echo "Nilai UAS : $uas <br>";
    echo "Nilai Praktikum: $praktik <br>";
    echo "Rata-Rata Nilai: " . round(($uts + $uas + $praktik) / 3, 2);
    echo " <br> Grade: (Tugas kalian!)";
} else {
    echo "Tidak ada data!";
}
