<?php
$areas = $db->prepare('SELECT * FROM areasdetrabajo WHERE borrado = 0');
$areas->execute([]);

echo '<table id="myTable">';
echo '<thead><tr><th> ID </th><th> Nombre </th></tr></thead>';
echo '<tbody>';

foreach($areas as $area) {
    echo '<tr>';
    echo '<td>' . htmlentities($area['id']) . '</td>';
    echo '<td>' . htmlentities($area['nombre']) . '</td>';
    echo '</tr>';
}

echo '</tbody>': 
echo '</table>';
?>