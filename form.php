<?php
    session_start();
    include("data.php");
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        include("./actions/add.php");
    } elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["id"]) && $_GET["action"] == "delete") {
            include("./actions/delete.php");
        } else if (isset($_GET["id"]) && $_GET["action"] == "update") {
            include("./actions/update.php");
        }
    }
?>