<?php
$inventarios = $db->prepare('SELECT * FROM inventario WHERE borrado = \'0\' LIMIT 1000');
$inventarios->execute([]);

echo '<table id="myTable">';
echo '<thead><tr><th> No. SEP </th><th> No. Inventario </th><th> Area de Trabajo</th><th> Resguardante </th><th> Descripción </th><th> Marca </th><th> Modelo </th><th> Serie </th><th> Valor </th><th> Fecha </th><th></th></tr></thead>';
echo '<tbody>';

$idUltimo;

foreach($inventarios as $inventario) {
    echo '<tr>';
    echo '<td>' . htmlentities($inventario['No SEP']) . '</td>';
    echo '<td>' . htmlentities($inventario['No Inventario']) . '</td>';
    echo '<td>' . htmlentities($inventario['id_area']) . '</td>';
    echo '<td>' . htmlentities($inventario['id_resguardante']) . '</td>';
    echo '<td> <input id="' . htmlentities($inventario['id']) . '" type="text" readonly value="' . htmlentities($inventario['Descripcion']) . '"/></td>';
    echo '<td> <input id="' . htmlentities($inventario['id']) . '" type="text" readonly value="' . htmlentities($inventario['Marca']) . '"/></td>';
    echo '<td> <input id="' . htmlentities($inventario['id']) . '" type="text" readonly value="' . htmlentities($inventario['Modelo']) . '"/></td>';
    echo '<td> <input id="' . htmlentities($inventario['id']) . '" type="text" readonly value="' . htmlentities($inventario['Serie']) . '"/></td>';
    echo '<td> <input id="' . htmlentities($inventario['id']) . '" type="text" readonly value="' . htmlentities($inventario['Valor']) . '"/></td>';
    echo '<td> <input id="' . htmlentities($inventario['id']) . '" type="text" readonly value="' . htmlentities($inventario['Fecha']) . '"/></td>';
    
    echo '<td>';
    echo '<span class="boton" id="editar-' . htmlentities($inventario['id']). '" style="display: inline-block;" onclick="editar(\''. htmlentities($inventario['id']) .'\')">Editar</span>';
    echo '<a class="boton" id="actualizar-' . htmlentities($inventario['id']). '" style="display: none" href="/procesar/'.htmlentities($inventario['id']).'/">Actualizar</a>';
    echo '<span class="boton" style="display: inline-block; background-color: red">Borrar</span>';
    echo '</td>';
    echo '</tr>';
    $idUltimo = $inventario['id'];
}

echo '</tbody>';
echo '</table>';
echo '<script>function editar(id) { for(var i = 1; i <= '.$idUltimo.'; i++) $(\'#\'+i).attr("readonly", true),$(\'#editar-\'+i).css("display", "inline-block"),$(\'#actualizar-\'+i).css("display", "none"); $(\'#\'+id).attr("readonly", false); $(\'#editar-\'+id).css("display", "none"); $(\'#actualizar-\'+id).css("display", "inline-block"); }</script>';
?>