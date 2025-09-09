<?php

    if(!isset($_SESSION['mahaiswa'])) {
        $_SESSION['mahaiswa'] = [
            "id" => [1],
            "nama" => ["Gattuzo"],
            "umur" => ["19"],
            "jurusan" => ["Sistem Informasi"],
            "hobby" => ["Nonton TV"]
        ];
    }

    $listMahasiswa = $_SESSION['mahaiswa'];
?>