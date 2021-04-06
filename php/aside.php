<?php
if ($_SERVER['REQUEST_URI'] != '/' && $_SERVER['REQUEST_URI'] != '/index.php') {
    echo '<aside>';
    echo '<a href="/" id="logo">Sistema de Inventarios</a>';
    echo '<ul>';
    echo '<a href="/inventario/"><li>📝 Inventario</li></a>';
    echo '<a href="/areas/"><li>🏢 Áreas de trabajo</li></a>';
    echo '<a href="/resguardantes/"><li>👥 Resguardantes</li></a>';
    echo '</ul>';
    echo '<ul>';
    echo '<a href="/usuarios/"><li>👤 Usuarios</li></a>';
    echo '<a href="/historial/"><li>📄 Historial</li></a>';
    echo '<a href="/reportes/"><li id="reportes">📊 Generar Reporte</li></a>';
    echo '</ul>';
    echo '</aside>';
}
?>