<?php
require_once "controladores/UsuarioController.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    $uc = new UsuarioController();
    $uc->eliminar($id);
    echo "Usuario eliminado correctamente.";
} else {
    echo "ID de usuario no válido.";
}
?>