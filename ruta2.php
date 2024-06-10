<!DOCTYPE html>
<html>
<head>
    <title>Cotización de Envíos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 15px; /* Ajustamos el valor del margen */
            padding: 0;
        }

        .header {
            background-color: black;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            margin-left: 30px; /* Espacio entre la imagen y el texto */
            color: yellow;
        }

        .content {
            padding: 20px;
        }

        /* Estilos para el formulario */
        form {
            margin-top: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr; /* Dos columnas */
            grid-gap: 10px; /* Espacio entre elementos */
            border-radius: 10px; /* Bordes redondeados */
            padding: 20px; /* Espacio interno */
            background-color: #f9f9f9; /* Color de fondo */
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="date"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: black;
            color: white;
            padding: 6px 12px; /* Tamaño más pequeño */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px; /* Tamaño de texto */
        }

        /* Estilos para el resultado */
        #resultado {
            margin-top: 20px;
        }

        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 10px; /* Bordes redondeados */
            overflow: hidden; /* Evitar bordes cuadrados */
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <a href="login.php"><img src="C:/Users/rodry/Documents/Hackathon/carrito.png" height="30px" sizes="30px"></a>
            <div class="logo">FlexPorts</div>
        </div>
    </header>

    <div class="content">
        <h2>Cotizacion</h2>
        <form action="mar2.php" method="post">

            <label for="tipo_ruta">Tipo de Ruta:</label>
            <select id="tipo_ruta" name="tipo_ruta">
                <option value="Maritimas">Terrestre</option>
                <option value="Transporte">Maritima</option>
                <option value="Transporte mercantil">Mercantil</option>
            </select>

            <input type="submit" value="Calcular">
        </form>

        <div id="resultado"></div> <!-- Aquí se mostrará el precio estimado -->
        <?php
            // Verificar si se ha enviado el formulario
            if (isset($_POST['submit'])) {
                // Conexión a la base de datos
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "gailea";

                // Crear conexión
                $conn = new mysqli($servername, $username, $password, $database);

                // Verificar conexión
                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                // Aquí puedes realizar operaciones con la base de datos según los datos del formulario
                // Por ejemplo:
                $puerto_salida = $_POST['puerto_salida'];
                $puerto_llegada = $_POST['puerto_llegada'];
                $fecha_registro = $_POST['fecha_registro'];
                $tipo_ruta = $_POST['tipo_ruta'];

                // Puedes imprimir un mensaje o realizar cualquier otra acción aquí
                echo "Conexión exitosa a la base de datos MySQL.";
                
                // Cierra la conexión
                $conn->close();
            }
        ?>
    </div>
</body>
</html>
