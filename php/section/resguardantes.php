<?php
$resguardantes = $db->prepare('SELECT * FROM resguardantes WHERE borrado = \'0\'');
$resguardantes->execute([]);

echo '<table>';
echo '<thead><tr><th> ID </th><th> Nombre </th><th>Opciones</th></tr></thead>';
echo '<tbody>';

$contador = 0;

foreach($resguardantes as $resguardante) {
    $contador++;
    echo '<tr onclick="editar(\''. $contador .'\')">';
    echo '<form method="post" action="/procesar/">';
    echo '<input type="text" style="display:none" name="procesar" value="actualizar"/>';
    echo '<td> <input type="text" readonly name="id" value="' . htmlentities($resguardante['id']) . '"/></td>';
    echo '<td> <input name="nombre" id="' . $contador . '" type="text" readonly value="' . htmlentities($resguardante['nombre']) . '"/></td>';
    echo '<input type="text" style="display:none" name="tabla" value="resguardantes"/>';
    echo '<td class="centrado">';
    echo '<span class="boton" id="editar-' . $contador. '" style="display: inline-block;" onclick="editar(\''. $contador .'\')">🖊</span>';
    echo '<input type="submit" class="boton" id="actualizar-' . $contador. '" style="display: none; background-color: green" value="✔"/>';
    echo '</form>';
    echo '<form method="post" action="/procesar/">';
    echo '<input type="text" style="display:none" name="procesar" value="borrar"/>';
    echo '<input type="text" style="display:none" name="id" value="' . htmlentities($resguardante['id']) .'"/>';
    echo '<input type="text" style="display:none" name="nombre" value="' . htmlentities($resguardante['nombre']) .'"/>';
    echo '<input type="text" style="display:none" name="tabla" value="resguardantes"/>';
    echo '<input type="submit" class="boton" style="display: inline-block; background-color: red" value="✖"/>';
    echo '</form>';
    echo '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
echo '<script>';
echo 'function editar(id) {';
echo 'for(var i = 1; i <= '.$contador.'; i++) {';
echo 'document.getElementById(""+i).readOnly = true;';
echo 'document.getElementById("editar-"+i).style.display =  "inline-block";';
echo 'document.getElementById("actualizar-"+i).style.display = "none";';
echo '} ';
echo 'document.getElementById(""+id).readOnly = false;';
echo 'document.getElementById("editar-"+id).style.display = "none";';
echo 'document.getElementById("actualizar-"+id).style.display = "inline-block";';
echo '}';
echo '</script>';
?>