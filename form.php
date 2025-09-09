<?php

    include("data.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        # code...
        $listMahasiswa['nama'][] = $_POST['name_input'];
        $listMahasiswa['umur'][] = $_POST['age_input'];
        $listMahasiswa['jurusan'][] = $_POST['jurusan_input'];
        $listMahasiswa['hobby'][] = $_POST['hobby_input'];

        $_SESSION['mahaiswa'] = $listMahasiswa;

        header('Location: index.php');
        exit();
    }
?>