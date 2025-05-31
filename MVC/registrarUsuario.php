<h1>Reguistrar Usuario</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type='text' name='username' placeholder='Usuario'><br>
    <input type='password' name='password' placeholder='Contraseña'><br>
    <input type='nombres' name='nombres' placeholder='Nombres'><br>
    <input type='apellidos' name='apellidos' placeholder='Apellidos'><br>
    <select>
        <option value='estudiante'>estudiante</option>
        <option value='profesor'>profesor</option>
    <select><br>
    <input type='text' name='escuela' placeholder='Escuela'><br>
    <input type='email' name='Email' placeholder='email'><br>
    <input type='submit' value='Guardar'><br>
</form>
<?php
require_once "controladores/UsuarioController.php";
if (!mepty($_POST)) {
    $uc = new UsuarioController();
    echo $uc->guardar($_POST);
}