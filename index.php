<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SHOP Computer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <!--css-->
    <link rel="stylesheet" href="public/css/style.css">
    <!--intl tel input-->
    <link rel="stylesheet" href="public/intl_tel_input/css/intlTelInput.css">
</head>
<body>
    <!--navBar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="index.php">Tienda De <span>Tecnologia</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><ion-icon name="home-outline"></ion-icon>Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <ion-icon name="pricetags-outline"></ion-icon>
                            Tienda
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">
                                    <ion-icon name="headset-outline"></ion-icon>
                                    Accesorios</a>
                            </li>
                            <li><a class="dropdown-item" href="#">
                                    <ion-icon name="laptop-outline"></ion-icon>
                                    Computadores</a>
                            </li>
                            <li><a class="dropdown-item" href="#">
                                    <ion-icon name="extension-puzzle-outline"></ion-icon>
                                    Tienda de partes
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <ion-icon name="construct-outline"></ion-icon>
                            Servicios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Mantenimiento de hardware</a></li>
                            <li><a class="dropdown-item" href="#">Mantenimiento de software</a></li>
                            <li><a class="dropdown-item" href="#">Programacion de paginas web</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Mejoras a equipos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <ion-icon name="newspaper-outline"></ion-icon>
                            Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Iniciar sesion
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Iniciar sesion</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">
                                                    <ion-icon name="mail-outline"></ion-icon>
                                                    Correo electronico
                                                </label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@example.com">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">
                                                    <ion-icon name="lock-closed-outline"></ion-icon>
                                                    Contraseña
                                                </label>
                                                <input type="password" class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Guardar contraseña</label>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-success">Ingresar</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalRegister">
                            Registrarse
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Cuenta</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">
                                                    <ion-icon name="person-circle-outline"></ion-icon>
                                                    Nombre completo
                                                </label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombres Apellidos">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">
                                                    <ion-icon name="phone-portrait-outline"></ion-icon>
                                                    Numero de telefono
                                                </label>
                                                <br>
                                                <input type="number" class="form-control" name="phone" id="phone" placeholder="305 636 0000">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">
                                                    <ion-icon name="mail-outline"></ion-icon>
                                                    Correo electronico
                                                </label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@example.com">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">
                                                    <ion-icon name="lock-closed-outline"></ion-icon>
                                                    Contraseña
                                                </label>
                                                <input type="password" class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">
                                                    <ion-icon name="lock-closed-outline"></ion-icon>
                                                    Confirmar Contraseña
                                                </label>
                                                <input type="password" class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-success">Crear Cuenta</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2 col-lg" type="search" placeholder="Buscar elemento" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <!--jquery-->
    <script src="public/js/jquery.js"></script>
    <!--intl_tel_input-->
    <script src="public/intl_tel_input/js/intlTelInput.js"></script>
    <!--Javascript-->
    <script src="public/js/main.js"></script>
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
    <!--icons-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>