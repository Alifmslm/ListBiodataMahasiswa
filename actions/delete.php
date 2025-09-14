<?php
$idMahasiswa = null;
if (isset($_GET['id'])) {
    # code...
    $idMahasiswa = $_GET['id'];
}

if ($idMahasiswa !== null) {
    $listMahasiswa = $_SESSION['mahasiswa'];
    # code...
    foreach ($listMahasiswa as $key => $value) {
        if (isset($value['id'])&& $idMahasiswa === (string)$value['id']) {
            unset($listMahasiswa[$key]);
            break;
        }
    }
    $_SESSION['mahasiswa'] = array_values($listMahasiswa);
    header('Location: index.php');
    exit;
}
?>