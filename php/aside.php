<?php
if ($_SERVER['REQUEST_URI'] != '/' && $_SERVER['REQUEST_URI'] != '/index.php') {
    echo '<div id="asideFuera" onclick="menu()"></div>';
    echo '<aside id="aside" style="display:inline-block">';
    echo '<a href="/" id="logo">Sistema de Inventarios</a>';
    echo '<ul>';
    echo '<a href="/inventario/"><li>π Inventario</li></a>';
    echo '<a href="/areas/"><li>π’ Γreas de trabajo</li></a>';
    echo '<a href="/resguardantes/"><li>π₯ Resguardantes</li></a>';
    echo '</ul>';
    echo '<ul>';
    echo '<a href="/usuarios/"><li>π€ Usuarios</li></a>';
    echo '<a href="/historial/"><li>π Historial</li></a>';
    echo '<a href="/reportes/"><li id="reportes">π Generar Reporte</li></a>';
    echo '</ul>';
    echo '</aside>';
}
?>