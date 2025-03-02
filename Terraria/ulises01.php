<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulises Segura</title>

    <!-- Agregar jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- Bootstrap para el diseño básico -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <!-- Fuente personalizada Roboto Slab -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">

    <!-- Estilos para una apariencia más formal y elegante -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="custom-navbar">
        <div class="container-nav">
            <a class="navbar-brand" href="index.html">INICIO</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">UNIDAD 1</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="ulises01.php">Tabla NPC 1</a>
                            <a class="dropdown-item" href="ulises02.php">Tabla NPC 2</a>
                            <a class="dropdown-item" href="ulises03.php">Insertar Datos</a>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">UNIDAD 2</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="ulises04.php">Practica 4</a>
                            <a class="dropdown-item" href="ulises05.php">Practica 5</a>
                            <a class="dropdown-item" href="ulises06.php">Practica 6</a>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">UNIDAD 3</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="ulises07.php">Practica 7</a>
                            <a class="dropdown-item" href="ulises08.php">Practica 8</a>
                            <a class="dropdown-item" href="ulises09.php">Practica 9</a>
                            <a class="dropdown-item" href="ulises10.php">Practica Final</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="jumbotron">
        <h1 class="display-4">MOSTRAR DATOS</h1>
        <?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "terraria";
        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("La conexion fallo:" . $conexion->connect_error);
        }
        $sql = "SELECT * FROM npc";
        $resultado = $conexion->query($sql);
        ?>
        <div class="container">
            <h1>Datos de la tabla de NPC</h1>
            <?php if ($resultado->num_rows > 0): ?>
                <table class="table-1">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Felicidad</th>
                    <th>Descripcion</th>
                    <th>Condicion de aparicion</th>
                    <th>Imagen</th>
                    </tr>
                    <?php while ($fila = $resultado->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $fila['NPC_ID']; ?></td>
                            <td><?php echo $fila['Nombre']; ?></td>
                            <td><?php echo $fila['Felicidad']; ?></td>
                            <td><?php echo $fila['Descripcion']; ?></td>
                            <td><?php echo $fila['CondicionesDeAparicion']; ?></td>
                            <td><img src="data:image/jpeg;base64,<?php echo base64_encode($fila['Imagen']); ?>"
                                    alt="Imagen del NPC"
                                    style="width: 72px; height: auto; filter: drop-shadow(10px 10px 1px rgba(0, 0, 0, 0.5));">

                            </td>
                        </tr>
                    <?php endwhile; ?>
                </table>
            <?php else: ?>
                <p
                    style="text-align: center; color:#333; font-family: 'so this is it', sans-serif; text-shadow: 0 1 1 black; ">
                    No se encontraron registro en la base de datos</p>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>