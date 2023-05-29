<?php

include '../../controllers/userController.php';

$usuarios = obtenerUsuarios();

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

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.6/dist/sweetalert2.min.css" rel="stylesheet">
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
        <section class="m-5 table-responsive">
            <table class="table table-dark table-striped table-bordered table-responsive border-white">
                <thead class ="text-center">
                    <tr class="fs-4">
                        <th scope="col">id</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">contraseña</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider text-center align-middle">
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <th scope="row"><?= $usuario["id"] ?></th>
                        <td><?= $usuario["usuario"] ?></td>
                        <td><?= $usuario["password"] ?></td>
                        <td><?= $usuario["correo"] ?></td>
                        <td><?= $usuario["nombre"] ?></td>
                        <td><?= $usuario["edad"] ?></td>
                        <td class="d-grid gap-1 col-12 mx-auto">
                            <a href="UsuariosEdit.php?id=<?= $usuario['id'] ?>" class="nav-link active" aria-current="page">
                                <button type="button" class="btn btn-warning ">
                                    <i class="bi bi-pen-fill"></i>
                                </button>
                            </a>
                        </td>
                        <td class="d-grid gap-1 col-12 mx-auto">
                            <a class="nav-link active" aria-current="page">
                                <button type="button" class="btn btn-danger eliminar" data="<?= $usuario["id"] ?>">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </section>
        <section class="d-flex m-5 justify-content-center">
            <a href="UsuariosCreate.php" class="nav-link">
                <button type="button" class="btn btn-success fs-5">
                    <i class="bi bi-plus-circle-fill">  </i>
                    CREAR USUARIO
                </button>
            </a>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../assets/js/eliminarUsuario.js"></script>
</body>
