<?php
    include("form.php");
?>
<form action="form.php" method="post" class="flex flex-col w-[500px]">
    <label for="" class="w-fit">Nama Mahasiswa: </label>
    <input type="text" name="name_input" id="" class="px-3 py-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="masukan nama mahasiswa...">

    <br>

    <label for="" class="w-fit">Umur Mahasiswa: </label>
    <input type="text" name="age_input" id="" class="px-3 py-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="masukan umur mahasiswa...">

    <br>

    <label for="" class="w-fit">Jurusan Mahasiswa: </label>
    <input type="text" name="jurusan_input" id="" class="px-3 py-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="masukan Jurusan mahasiswa...">

    <br>

    <label for="" class="w-fit">Hobby Mahasiswa: </label>
    <input type="text" name="hobby_input" id="" class="px-3 py-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="masukan Hobby mahasiswa...">

    <br>

    <button type="submit" class="w-fit py-2 px-5 font-bold text-white bg-blue-500 rounded">Submit Biodata</button>
</form>