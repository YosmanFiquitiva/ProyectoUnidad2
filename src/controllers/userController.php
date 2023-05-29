<?php
    include '../../../database/conexion.php';
    include '../../models/Usuario.php';

function obtenerUsuarios() {
    global $conn;

    $query = "SELECT * FROM usuario";
    $result = $conn->query($query);

    $registros = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $registros[] = $row;
        }
    }

    return $registros;
}

function crearRegistro($datos) {
    global $conn;

    $valores = "'" . implode("', '", $datos) . "'";

    $query = "INSERT INTO usuario (usuario, password, correo, nombre, edad) VALUES ($valores)";

    if ($conn->query($query) === TRUE) {
        return true;
    } else {
        return false;
    }
}

function eliminarRegistro($id) {
    global $conn;

    $id = $conn->real_escape_string($id);

    $query = "DELETE FROM usuario WHERE id = '$id'";

    if ($conn->query($query) === TRUE) {
        return true;
    } else {
        return false;
    }
}

function buscarUsuarioPorId($id) {
    global $conn;

    $query = "SELECT * FROM usuario WHERE id = $id";
    $result = $conn->query($query);

    $registros = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $registros[] = $row;
        }
    }

    return $registros[0];
}


function editarRegistro($id, $datos) {
    global $conn;

    $usuario = $datos["usuario"];
    $password = $datos["password"];
    $nombre = $datos["nombre"];
    $correo = $datos["correo"];
    $edad = $datos["edad"];

    $query = "UPDATE usuario SET
        usuario = '$usuario',
        password = '$password',
        nombre = '$nombre',
        correo = '$correo',
        edad = '$edad'
        WHERE id = '$id'";

    if ($conn->query($query) === TRUE) {
        return true;
    } else {
        return false;
    }
}

?>