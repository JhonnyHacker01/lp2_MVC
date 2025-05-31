<?php

require_once "controladores/UsuarioController.php";

$uc = new UsuarioController();
$usuarios = $usuarioController->mostrar();
?>
<table border="1">
    <thead>
    <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Tipo</th>
    </tr>
    </thead>
    <tbody>
<?php
foreach ($usuarios as $usuario)

    echo "<tr>"
    <td>".$usuario['nombres']."</td>
    <td>".$usuario['apellidos']."</td>
    <td>".$usuario['tipo']."</td>
    </tr>";                   

echo "</prex>";

</tbody>
</table>