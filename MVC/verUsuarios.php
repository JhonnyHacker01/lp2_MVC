<?php
    require_once "controladores/UsuarioController.php"; 
    require_once "layouts/header.php";

    $uc = new UsuarioController();
    $usuarios = $uc->mostrar();

?>
<h1 class="mt-4">Usuarios del Sistema</h1>
<table class="table">
    <thead>
    <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Tipo</th>
        <th>&nbsp</th>
        <th>&nbsp</th>
    </tr>
    </thead>
    <tbody>
<?php
    foreach($usuarios as $usuario){
        echo "<tr>
                <td>".$usuario ["nombres"]."</td>
                <td>".$usuario["apellidos"]."</td>
                <td>".$usuario["tipo"]."</td>
                <td><a href='eliminarUsuario.php?id=".$usuario["id"]."' class='btn btn-outline-success btn btn-sm'>Eliminar</a></td>
                <td><a href='actualizarUsuario.php?id=".$usuario["id"]."'class='btn-outline-info btn btn-sm'>Actualizar</a></td>
            </tr>";
    }
    ?>
        </tbody>
    </table>
    <a href="registrarUsuario.php" class="btn-primary">Registrar Usuario</a>
    <?php
    require_once "layouts/footer.php";