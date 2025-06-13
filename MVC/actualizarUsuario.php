<?php
    require_once "controladores/UsuarioController.php";
    require_once "layouts/header.php";

    if(!empty($_GET)){
        $id = $_GET["id"];
    }else{
        $id = $_POST["id"];
    }
    $uc = new UsuarioController();
    $usuarios = $uc->buscar($id);
    foreach($usuarios as $usuario) {
        $nombres = $usuario["nombres"];
        $apellidos = $usuario["apellidos"];
        $tipo = $usuario["tipo"];

    }

?>
<h1 class="mt-4">Actualizar Usuario</h1>
<form method="post" action="<?= $_SERVER["PHP_SELF"]; ?>">
    <input class="form-control" type="text" name="nombres" placeholder="Nombres" value="<?= $nombres ?>"><br>
    <input class="form-control" type="text" name="apellidos" placeholder="Apellidos"value="<?= $apellidos ?>"><br>
    <select name="tipo" class="form-select">
        <option value="estudiante"<?php if($tipo=="estudiante"){echo "selected";}?>>estudiante</option>
        <option value="profesor"<?php if($tipo=="profesor"){echo "selected";}?>>profesor</option>
    </select><br>
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="submit" value="Actualizar" class="btn btn-primary"><br>
</form>

<?php
    require_once "controladores/UsuarioController.php";
    require_once "layouts/footer.php";
    if (!empty($_POST)){
        $uc ->actualizar($_POST);
}