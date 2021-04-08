<?php
$areas = $db->prepare('SELECT * FROM areasdetrabajo WHERE borrado = \'0\'');
$areas->execute([]);

echo '<table>';
echo '<thead><tr><th> ID </th><th> Nombre </th><th>Opciones</th></tr></thead>';
echo '<tbody>';

$contador = 0;

foreach($areas as $area) {
    $contador++;
    echo '<tr onclick="editar(\''. $contador .'\')">';
    echo '<form method="post" action="/procesar/">';
    echo '<input type="text" style="display:none" name="procesar" value="actualizar"/>';
    echo '<td> <input type="text" readonly name="id" value="' . htmlentities($area['id']) . '"/></td>';
    echo '<td> <input name="nombre" id="' . $contador . '" type="text" readonly value="' . htmlentities($area['nombre']) . '"/></td>';
    echo '<td class="centrado">';
    echo '<span class="boton" id="editar-' . $contador. '" style="display: inline-block;" onclick="editar(\''. $contador .'\')">🖊</span>';
    echo '<a class="boton" id="actualizar-' . $contador. '" style="display: none; background-color: green" href="/procesar/'.htmlentities($area['id']).'/">✔</a>';
    echo '</form>';
    echo '<form method="post" action="/procesar/">';
    echo '<input type="text" style="display:none" name="procesar" value="borrar"/>';
    echo '<input type="text" style="display:none" name="id" value="' . htmlentities($area['id']) .'"/>';
    echo '<input type="text" style="display:none" name="tabla" value="areasdetrabajo"/>';
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