<?php
if ($_SERVER['REQUEST_URI'] != '/') {
    echo '<header id="header" style="width: calc(100% - 240px)">';
    echo '<nav>';
    echo '<ul>';
    echo '<span href="#" onclick="menu()"><li style="float: left; cursor:pointer"><span style="font-size: 80%">☰ </span>&nbsp;';
    if ($_GET['accion'] == 'inventario') {
        echo 'Inventario';
    } else if ($_GET['accion'] == 'areas') {
        echo 'Áreas de trabajo';
    } else if ($_GET['accion'] == 'resguardantes') {
        echo 'Resguardantes';
    } else if ($_GET['accion'] == 'usuarios') {
        echo 'Usuarios';
    } else if ($_GET['accion'] == 'historial') {
        echo 'Historial';
    } else if ($_GET['accion'] == 'reportes') {
        echo 'Generar Reporte';
    } else if ($_GET['accion'] == 'perfil') {
        echo 'Perfil de usuario';
    }
    echo '</li></span>';
    echo '<a href="/salir/"><li>Salir</li></a>';
    echo '<a href="/perfil/"><li>'.$_SESSION['usuario'].'</li></a>';
    echo '</ul>';
    echo '</nav>';
    echo '</header>';
}
?>