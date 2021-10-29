<?php
$id=$_REQUEST['id'];

require_once 'config.php';
require_once 'conexion.php';

echo "<table border=1px bgcolor=#108589>";
    echo "<tr bgcolor=#08bbc1>";
        echo "<th>ID</th>";
        echo "<th>Nombre</th>";
        echo "<th>Edad</th>";
    echo "</tr>";

foreach ($listaPersonas as $persona) {
    echo "<tr bgcolor=#7df2f6>";
        echo "<form action=actualizar.php?id=$registro[id] method=post>";
        echo "<td><p><input type=text name=nombre size=20 value='$registro[id]'></p></td>";
        echo "<td><p><input type=text name=nombre size=20 value='$registro[name]'></p></td>";
        echo "<td><p><input type=text name=apellido size=20 value='$registro[age]'></p></td>";
        echo "<td><input type=submit name=aniadir value=Guardar></td>";
        echo "<td><a href='vista.php'>Cancelar</a></td>";
    echo "</tr>";
};