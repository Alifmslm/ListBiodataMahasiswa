<?php
include('data.php');
?>
<table class="border-collapse border border-gray-400">
    <tr>
        <?php
        foreach ($listMahasiswa as $key => $value) {
            if ($key == 0) {
                # code...
                echo "<th class=\"text-start border border-gray-300 px-3\">ID</th>";
                foreach ($value as $key2 => $value2) {
                    echo "<th class=\"text-start border border-gray-300 px-3\">" . ucfirst($key2) . "</th>";
                }
            } else {
                # code...
                break;
            }
        }
        ;
        ?>
    </tr>
    <br>
    <?php
    foreach ($listMahasiswa as $key => $value) {
        echo "<tr>";
        echo "<td class=\"border border-gray-300 px-2\">" . ($key + 1) . "</td>";
        echo "<td class=\"border border-gray-300 px-2\">" . ucfirst($value['nama']) . "</td>";
        echo "<td class=\"border border-gray-300 px-2\">" . $value['umur'] . "</td>";
        echo "<td class=\"border border-gray-300 px-2\">" . ucfirst($value['jurusan']) . "</td>";
        echo "<td class=\"border border-gray-300 px-2\">" . ucfirst($value['hobby']) . "</td>";
        echo "</tr>";
    }
    ?>
</table>