<?php

if (!isset($_SESSION['mahasiswa'])) {
    $_SESSION['mahasiswa'] = [
        [
            "id" => 1,
            "nama" => "Gattuzo",
            "umur" => 19,
            "jurusan" => "Sistem Informasi",
            "hobby" => "Nonton TV"
        ]
    ];
}

$listMahasiswa = $_SESSION['mahasiswa'];
?>