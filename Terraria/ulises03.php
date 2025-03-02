<?php
// Conexión a la base de datos
$username = "root";
$password = "";
$servername = "localhost";
$database = "terraria";
$conexion = new mysqli($servername, $username, $password, $database);

if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

// Procesar el formulario si se envió
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $Nombre = $_POST["Nombre"];
    $Felicidad = $_POST["Felicidad"];
    $Descripcion = $_POST["Descripcion"];
    $CondicionesDeAparicion = $_POST["CondicionesDeAparicion"];

    // Procesar la imagen subida
    if (isset($_FILES["Imagen"]) && $_FILES["Imagen"]["error"] == 0) {
        $imagenTmp = $_FILES["Imagen"]["tmp_name"];
        $imagenData = addslashes(file_get_contents($imagenTmp)); // Convertir imagen a formato binario

        // Insertar datos en la base de datos
        $sql = "INSERT INTO npc (Nombre, Felicidad, Descripcion, CondicionesDeAparicion, Imagen) 
                VALUES ('$Nombre', '$Felicidad', '$Descripcion', '$CondicionesDeAparicion', '$imagenData')";

        if ($conexion->query($sql) === TRUE) {
            // Redirigir al usuario para evitar reenvío del formulario
            header("Location: " . $_SERVER['PHP_SELF']);
            exit(); // Asegúrate de salir del script después de redirigir
        } else {
            $error_message = "Error al agregar el personaje: " . $conexion->error;
        }
    } else {
        $error_message = "No se ha subido ninguna imagen.";
    }
}
?>

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
                            <a class="dropdown-item" href="ulises01.php">Tabla NPC 1</a>
                            <a class="dropdown-item" href="ulises02.php">Tabla NPC 2</a>
                            <a class="dropdown-item" href="ulises03.php">Insertar Datos</a>
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
        <div class="container">
            <h1>Insertar Datos</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="formulario"
                enctype="multipart/form-data">

                <label for="Nombre">Nombre:</label>
                <input type="text" id="Nombre" name="Nombre" required><br><br>

                <label for="Felicidad">Felicidad:</label>
                <textarea id="Felicidad" name="Felicidad" rows="4" required></textarea><br><br>

                <label for="Descripcion">Descripción:</label>
                <textarea id="Descripcion" name="Descripcion" rows="4" required></textarea><br><br>

                <label for="CondicionesDeAparicion">Condiciones de Aparición:</label>
                <textarea id="CondicionesDeAparicion" name="CondicionesDeAparicion" rows="4"
                    required></textarea><br><br>

                <div id="preview-container">
                    <img id="preview" src="" alt="Previsualización de la imagen">
                </div>

                <label for="Imagen" class="file-label">📁 Seleccionar imagen</label>
                <input type="file" id="Imagen" name="Imagen" accept="image/*" required>

                <input type="submit" value="Agregar al registro">
            </form>
        </div>




        <?php
        // Mostrar mensajes de error o éxito
        if (isset($error_message)) {
            echo "<p class='error'>$error_message</p>";
        }
        ?>

        <div class="container" style="margin-top: 32px;">
            <?php
            // Mostrar los registros de la base de datos
            $sql = "SELECT * FROM npc";
            $resultado = $conexion->query($sql);
            if ($resultado->num_rows > 0) {
                echo "<table class='table-2'>";
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
                </tr>";
                }
                echo "</table>";
            } else {
                echo "No se encontraron registros en la base de datos";
            }
            $conexion->close();
            ?>
        </div>
    </div>

    <script>
        document.getElementById('Imagen').addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const previewContainer = document.getElementById('preview-container');
                    const preview = document.getElementById('preview');
                    preview.src = e.target.result;
                    previewContainer.style.visibility = 'visible';
                    previewContainer.style.opacity = '1';
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>

</html>