<?php
    require_once "layouts/header.php";
?>
<h1>Reguistrar Usuario</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input class="form-control" type="text"   name="username"  placeholder="Usuario"><br>
    <input class="form-control" type="password" name="password" placeholder="Contraseña"><br>
    <input class="form-control" type="text"   name="nombres"   placeholder="Nombres"><br>
    <input class="form-control" type="text"   name="apellidos" placeholder="Apellidos"><br>
    <select name="tipo" class="form-select">
        <option value="estudiante">estudiante</option>
        <option value="profesor">profesor</option>
    </select><br>
    <input class="form-control" type="text"   name="escuela"   placeholder="Escuela"><br>
    <input class="form-control" type="email"  name="email"     placeholder="Email"><br>
    <input class="form-control" type="submit" value="Guardar" class="btn btn-primary"><br>
</form>

<?php
    require_once "controladores/UsuarioController.php";
    require_once "layouts/footer.php";
    if (!empty($_POST)) {
        $uc = new UsuarioController();
        echo $uc->guardar($_POST);
}