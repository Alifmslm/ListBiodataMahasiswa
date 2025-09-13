<?php
    session_start();
    include("data.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        # code...
        $listMahasiswa[] =[
            "nama" => $_POST["name_input"],
            "umur" => $_POST["age_input"],
            "jurusan" => $_POST["jurusan_input"],
            "hobby" => $_POST["hobby_input"],
        ];

        $_SESSION['mahasiswa'] = $listMahasiswa;

        header('Location: index.php');
        exit();
    }
?>