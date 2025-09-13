<?php

if (!isset($_SESSION['mahasiswa'])) {
    $_SESSION['mahasiswa'] = [
        [
            "nama" => "Gattuzo",
            "umur" => 19,
            "jurusan" => "Sistem Informasi",
            "hobby" => "Nonton TV"
        ]
    ];
}

$listMahasiswa = $_SESSION['mahasiswa'];
?>