<?php

include '../../controllers/userController.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET["id"];
    $usuario = buscarUsuarioPorId($id);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $datos = $_POST;
    $id = $_GET["id"];
    $resultado = editarRegistro($id,$datos);

    if ($resultado) {
        header("Location: UsuariosView.php");
        exit();
    } else {
        echo "ALGO SALIO MAL";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <title> USUARIOS </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary" data-bs-theme="dark">
        <div class="container-fluid d-flex justify-content-around">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="UsuariosView.php" class="nav-link active" aria-current="page"> USUARIOS </a>
                    </li>
                </ul>
            </div>
            <div>
                <a href="UsuariosView.php" class="nav-link active" aria-current="page"><i class="bi bi-person-circle">  </i>Perfil</a>
            </div>
        </div>
    </nav>
  </header>
  <main>
    <section class="d-flex justify-content-center m-3">
        <form method="POST" action="UsuariosEdit.php?id=<?= $usuario["id"]?>" class="w-50">
            <div class="input-group mb-3">
                <span class="input-group-text" id="usuario">Usuario</span>
                <input type="text" required class="form-control" placeholder="Usuario" aria-label="Usuario" aria-describedby="usuario" name="usuario" value='<?= $usuario["usuario"]?>'>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="password">Contraseña</span>
                <input type="password" required class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="password" name="password" value='<?= $usuario["password"] ?>'>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="nombre">Nombre</span>
                <input type="text" required class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="nombre" name="nombre" value='<?= $usuario["nombre"] ?>'>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="email">Correo</span>
                <input type="email" required class="form-control" placeholder="Correo" aria-label="Email" aria-describedby="correo" name="correo" value='<?= $usuario["correo"] ?>'>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="edad">Usuario</span>
                <input type="number" min="1" max="70" required class="form-control" placeholder="Edad" aria-label="Edad" aria-describedby="edad" name="edad" value='<?= $usuario["edad"] ?>'>
            </div>

            <div class="d-flex m-5 justify-content-center">

                <button type="submit" required class="btn btn-warning fs-5">
                    <i class="bi bi-pen-fill">  </i>
                    EDITAR USUARIO
                </button>
            </div>
        </form>
    </section>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>