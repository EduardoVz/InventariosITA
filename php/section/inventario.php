
<?php
$inventario = $db->prepare('SELECT * FROM inventario WHERE borrado = \'0\' LIMIT 100');
$inventario->execute([]);

echo '<table>';
echo '<thead><tr><th> No. SEP </th><th> No. Inventario </th><th>Área de trabajo</th><th>Resguardante</th><th>Descripción</th><th>Marca</th><th>Modelo</th><th>Serie</th><th>Valor</th><th>Fecha</th><th></th></tr></thead>';
echo '<tbody>';

$contador = 0;

foreach($inventario as $inv) {
    $contador++;
    echo '<tr onclick="editar(\''. $contador .'\')">';
    echo '<form method="post" action="/procesar/">';
    echo '<input type="text" style="display:none" name="procesar" value="actualizar"/>';
    echo '<input type="text" style="display:none" name="id" value="' . htmlentities($inv['id']) . '"/>';
    echo '<td> <input type="text" id="nosep-' . $contador . '" readonly name="nosep" value="' . htmlentities($inv['No SEP']) . '"/></td>';
    echo '<td> <input name="noinventario" id="noinventario-' . $contador . '" type="text" readonly value="' . htmlentities($inv['No Inventario']) . '"/></td>';

    $areas = $db->prepare('SELECT * FROM areas WHERE borrado = \'0\'');
    $areas->execute([]);

    echo '<td>';
    echo '<select name="id_area" id="id_area-' . $contador . '">';
    foreach ($areas as $area)
        if ($inv['id_area'] == $area['id']) echo '<option selected value="'.$area['id'].'">'.$area['nombre'].'</option>';
        else echo '<option value="'.$area['id'].'">'.$area['nombre'].'</option>';
    echo '</select>';
    echo '</td>';
    
    
    $resguardantes = $db->prepare('SELECT * FROM resguardantes WHERE borrado = \'0\'');
    $resguardantes->execute([]);

    echo '<td>';
    echo '<select name="id_resguardante" id="id_resguardante-' . $contador . '">';
    foreach ($resguardantes as $resguardante)
        if ($inv['id_resguardante'] == $resguardante['id']) echo '<option selected value="'.$resguardante['id'].'">'.$resguardante['nombre'].'</option>';
        else echo '<option value="'.$resguardante['id'].'">'.$resguardante['nombre'].'</option>';
    echo '</select>';
    echo '</td>';


    echo '<td> <input name="descripcion" id="descripcion-' . $contador . '" type="text" readonly value="' . htmlentities($inv['Descripcion']) . '"/></td>';
    echo '<td> <input name="marca" id="marca-' . $contador . '" type="text" readonly value="' . htmlentities($inv['Marca']) . '"/></td>';
    echo '<td> <input name="modelo" id="modelo-' . $contador . '" type="text" readonly value="' . htmlentities($inv['Modelo']) . '"/></td>';
    echo '<td> <input name="serie" id="serie-' . $contador . '" type="text" readonly value="' . htmlentities($inv['Serie']) . '"/></td>';
    echo '<td> <input name="valor" id="valor-' . $contador . '" type="text" readonly value="' . htmlentities($inv['Valor']) . '"/></td>';
    echo '<td> <input name="fecha" id="fecha-' . $contador . '" type="text" readonly value="' . htmlentities($inv['Fecha']) . '"/></td>';
    echo '<input type="text" style="display:none" name="tabla" value="inventario"/>';
    echo '<td class="centrado">';
    echo '<span class="boton" id="editar-' . $contador. '" style="display: inline-block;" onclick="editar(\''. $contador .'\')">🖊</span>';
    echo '<input type="submit" class="boton" id="actualizar-' . $contador. '" style="display: none; background-color: green" value="✔"/>';
    echo '</form>';
    echo '<form method="post" action="/procesar/">';
    echo '<input type="text" style="display:none" name="procesar" value="borrar"/>';
    echo '<input type="text" style="display:none" name="id" value="' . htmlentities($inv['id']) .'"/>';
    echo '<input type="text" style="display:none" name="nombre" value="' . htmlentities($inv['nombre']) .'"/>';
    echo '<input type="text" style="display:none" name="tabla" value="inventario"/>';
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