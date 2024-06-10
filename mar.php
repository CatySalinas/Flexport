
<!DOCTYPE html>
<html>
<head>
    <title>Cotización de Envíos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 15px;
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
            margin-left: 30px;
            color: yellow;
        }

        .content {
            padding: 20px;
        }

        form {
            margin-top: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 10px;
            border-radius: 10px;
            padding: 20px;
            background-color: #f9f9f9;
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
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        #resultado {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
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
            <a href="ruta.php"><img src="carrito1.png" height="60px" width="60px"></a>
            <div class="logo">FlexPorts</div>
        </div>
    </header>


    <div class="content">
        <h2>Cotización</h2>
        <form method="post">
            <label for="tipo_ruta">Tipo de Ruta:</label>
            <select id="tipo_ruta" name="tipo_ruta" disabled>
                <option value="MAR">MAR</option>
                <!-- Agrega otras opciones aquí si es necesario -->
            </select>

            <label for="puerto_salida">Puerto de Salida:</label>
            <select id="puerto_salida" name="puerto_salida">
            <?php
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

                // Consulta para obtener los puertos de llegada
                $sql = "SELECT name_port FROM ports";
                $result = $conn->query($sql);

                // Construir las opciones del menú desplegable
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['name_port'] . "'>" . $row['name_port'] . "</option>";
                    }
                }

                // Cierra la conexión
                $conn->close();
                ?>
                <!-- Agrega más opciones según sea necesario -->
            </select>

            <label for="puerto_llegada">Puerto de Llegada:</label>
            <select id="puerto_llegada" name="puerto_llegada">
                <?php
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

                // Consulta para obtener los puertos de llegada
                $sql = "SELECT name_port FROM ports";
                $result = $conn->query($sql);

                // Construir las opciones del menú desplegable
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['name_port'] . "'>" . $row['name_port'] . "</option>";
                    }
                }

                // Cierra la conexión
                $conn->close();
                ?>
            </select>

            <label for="fecha_registro">Fecha de Registro:</label>
            <input type="date" id="fecha_registro" name="fecha_registro">

            <input type="submit" name="submit" value="Calcular">
        </form>

        <div id="resultado"></div>
    </div>
</body>
</html>
