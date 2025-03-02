<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marc Junior</title>

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
<nav class="navbar navbar-light">
        <div class="contener" style="font-family: 'Unbounded', sans-serif; background-color: #081042;">
            <a class="navbar-brand" href="index.html" style="color: #eef0f2; font-size: 21px;">Inicio</a>
            <!-- Un boton de inicio que lleva a si mismo, de color blanco, aqui pueden poner el color que quieran dependiendo de su estilo -->

            <!-- A continuacion es el menu dropdown para poner las ligas a las practicas -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav"
                    style="font-family: 'Vazirmatn', sans-serif; background-color: none; font-size: 18px;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">Unidad 1</a>
                        <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="marc01.php">Mostrar Datos 1</a><br>
                            <a class="dropdown-item" href="marc02.php">Mostrar Datos 2</a><br>
                            <a class="dropdown-item" href="marc03.php">Mostrar Datos 3</a><br>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">
                            Unidad 2
                        </a>
                        <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a href="dropdown-item" href="marc04.php">Practica 4</a><br>
                            <a href="dropdown-item" href="marc05.php">Practica 5</a><br>
                            <a href="dropdown-item" href="marc06.php">Practica 6</a><br>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">
                            Unidad 3
                        </a>
                        <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a href="dropdown-item" href="marc01.php">Practica 7</a><br>
                            <a href="dropdown-item" href="marc08.php">Practica 8</a><br>
                            <a href="dropdown-item" href="marc09.php">Practica 9</a><br>
                            <a href="dropdown-item" href="marc10.php">Practica 10</a><br>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
            <h1>TABLA DE RESULTADOS 2</h1>
            <?php
            if ($resultado->num_rows > 0) {
            echo "<table>";
                echo "<tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Felicidad</th>
                    <th>Descripcion</th>
                    <th>Condicion de aparicion</th>
                    <th>Imagen</th>
                </tr>";
                while ($row = $resultado->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["NPC_ID"] . "</td>
                    <td>" . $row["Nombre"] . "</td>
                    <td>" . $row["Felicidad"] . "</td>
                    <td>" . $row["Descripcion"] . "</td>
                    <td>" . $row["CondicionesDeAparicion"] . "</td>
                    <td><img src='data:image/jpeg;base64," . base64_encode($row["Imagen"]) . "'
                            alt='Imagen de " . $row["Nombre"] . "'
                            style='width: 72px; height: auto; filter: drop-shadow(10px 10px 1px rgba(0, 0, 0, 0.5));'>
                    </td>
                <tr>";
                    }
                    echo "
            </table>";
            } else {
            echo "no se encontraron registro en la base de datos";
            }
            $conexion->close();
            ?>
        </div>
    </div>
    <div class="row" style="center">
</body>

</html>