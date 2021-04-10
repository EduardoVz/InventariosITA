<?php
$resguardantes = $db->prepare('SELECT * FROM historial');
$resguardantes->execute([]);

echo '<table>';
echo '<thead><tr><th> ID </th><th> Descripción </th><th>Fecha</th></tr></thead>';
echo '<tbody>';


foreach($resguardantes as $resguardante) {
    echo '<tr>';
    echo '<td>' . htmlentities($resguardante['id']) . '</td>';
    echo '<td>' . htmlentities($resguardante['descripcion']) . '</td>';
    echo '<td>' . htmlentities($resguardante['fecha']) . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
?>