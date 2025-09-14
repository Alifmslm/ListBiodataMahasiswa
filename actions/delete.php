<?php
$idMahasiswa = null;
if (isset($_GET['id'])) {
    # code...
    $idMahasiswa = $_GET['id'];
}

if ($idMahasiswa != null) {
    # code...
    foreach ($listMahasiswa as $key => $value) {
        if ($idMahasiswa === $listMahasiswa[$key]['id']) {
            unset($listMahasiswa[$key]);
            break;
        }
    }
    $_SESSION['mahasiswa'] = $listMahasiswa;
    header('Location:' . $_SERVER['PHP_SELF']);
    exit;
}
?>