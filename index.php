<?php
include 'php/config.php';
session_start();
echo '<!DOCTYPE html>';
echo '<html lang="es-MX">';
echo '<head>';
echo '<title>Sistema de Inventarios</title>';
echo '<meta name="viewport" content="width=device-width, user-scalable=no"/>';
echo '<meta charset="utf-8"/>';
echo '<link rel="icon" type="image/png" href="/img/favicon.png"/>';
echo '<link type="text/css" rel="stylesheet" href="/css/style.css"/>';
echo '</head>';
echo '<body>';
include 'php/aside.php';
echo '<div id="wrapper" style="width: calc(100% - 240px)">';
include 'php/header.php';
include 'php/section.php';
echo '</div>';
echo '</body>';
echo '</html>';
?>
<script>
    function menu() {
        if (document.getElementById("aside").style.display == "none") {
            document.getElementById("aside").style.display = "inline-block",
            document.getElementById("asideFuera").style.display = "inline-block",
            document.getElementById("wrapper").style.width = "calc(100% - 240px)",
            document.getElementById("header").style.width = "calc(100% - 240px)";
        } else if (document.getElementById("aside").style.display == "inline-block") {
            document.getElementById("aside").style.display = "none",
            document.getElementById("asideFuera").style.display = "none",
            document.getElementById("wrapper").style.width = "100%",
            document.getElementById("header").style.width = "100%";
        }
    }
</script>