<?php
    session_start();
    include("form.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pertama</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="mx-10 my-10">
    <h1 class="text-3xl font-bold">Home</h1>
    <h2 class="text-lg">Selamat Datang di Web Biodata Mahasiswa</h2>
    <?php
        include_once("./ui/table_ui.php");
        echo"<br>
        <hr>
        <br>";
        include_once("./ui/form_ui.php");
    ?>
</body>
</html>