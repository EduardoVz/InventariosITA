<?php
include 'php/config.php';
session_start();
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<title>Sistema de Inventarios</title>';
echo '<meta name="viewport" content="width=device-width, user-scalable=no"/>';
echo '<meta charset="utf-8"/>';
echo '<link rel="icon" type="image/png" href="/img/favicon.png"/>';
echo '<link type="text/css" rel="stylesheet" href="/css/style.css"/>';
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>';
echo '<link type="text/css" rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>';
echo '<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>';
echo '</head>';
echo '<body>';
echo '<script>$(document).ready( function () { $("#myTable").DataTable(); } );</script>';
echo '</body>';
echo '</html>';
?>