<?php

require_once "controladores/UsuarioController.php";

$uc = new UsuarioController();
$usuarios = $uc->mostrar();

?>
<table border="1">
    <thead>
    <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Tipo</th>
        <th>&nbsp</th>
    </tr>
    </thead>
    <tbody>
<?php
foreach ($usuarios as $usuario)
    echo "<tr>
    <td>".$usuario['nombres']."</td>
    <td>".$usuario['apellidos']."</td>
    <td>".$usuario['tipo']."</td>
    <td><a href='eliminarUsuario.php?id=".$usuario['id_usuario']."'>Eliminar</a></td>
    </tr>";             

}
?>

echo "</prex>";

</tbody>
</table>