<?php
echo '<section>';
if ($_SERVER['REQUEST_URI'] == '/' && isset($_SESSION['id'])) header('Location: /inventario/');
else if (isset($_SESSION['id'])) {
    if ($_GET['accion'] == 'inventario') include 'php/section/inventario.php';
    else if ($_GET['accion'] == 'areas') include 'php/section/areas.php';
    else if ($_GET['accion'] == 'resguardantes') include 'php/section/resguardantes.php';
    else if ($_GET['accion'] == 'usuarios') include 'php/section/usuarios.php';
    else if ($_GET['accion'] == 'historial') include 'php/section/historial.php';
    else if ($_GET['accion'] == 'reportes') include 'php/section/reportes.php';
    else if ($_GET['accion'] == 'perfil') include 'php/section/perfil.php';
    else if ($_GET['accion'] == 'error') header("Location: /");
    else header("Location: /");
} else if(!isset($_SESSION['id']) && $_SERVER['REQUEST_URI'] != '/') header("Location: /");

if ($_SERVER['REQUEST_URI'] == '/' && !isset($_SESSION['id'])) include 'php/section/login.php';

if ($_GET['accion'] == 'procesar') include 'php/section/procesar.php';
else if ($_GET['accion'] == 'salir') {
    include 'php/section/salir.php';
}

echo '</section>';
?>