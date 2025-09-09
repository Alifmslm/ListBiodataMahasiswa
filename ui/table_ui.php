<?php
    include('data.php');
?>

<table class="border-collapse border border-gray-400">
    <tr>
        <?php
            foreach ($listMahasiswa as $key => $value) {
                echo "<th class=\"text-start border border-gray-300 px-3\">" . ucfirst($key) . "</th>";
            };
        ?>
    </tr>
    <br>
    <tr>
        <?php
            foreach ($listMahasiswa as $key => $value) {
                foreach ($value as $key2 => $value2) {
                    echo "<td class=\"border border-gray-300 px-2\">" . ucfirst($value2) . "</td>";
                };
            };
        ?>
    </tr>
</table>