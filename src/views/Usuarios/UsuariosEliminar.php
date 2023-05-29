<?php
    include '../../controllers/userController.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $id = $_POST["id"];
        $resultado = eliminarRegistro($id);
    }
?>