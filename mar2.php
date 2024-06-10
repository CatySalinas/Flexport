<!DOCTYPE html>
<html>
<head>

<body>
    <header class="header">
        <div class="logo-container">
            <a href="ruta.php"><img src="carrito1.png" height="30px" sizes="30px"></a>
            <div class="logo">FlexPorts</div>
        </div>
    </header>

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
        <!-- Contenido del encabezado aquí -->
    </header>

    <div class="content">
        <h2>Cotizacion</h2>
        <form id="cotizacionForm" action="cotizacion.php" method="post">
            <!-- Campos del formulario aquí -->
            <label for="tipo_ruta">Tipo de Ruta:</label>
            <select id="tipo_ruta" name="tipo_ruta">
                <option value="marina">Marina</option>
            </select>

            <label for="puerto_salida">Puerto de Salida:</label>
            <select id="puerto_salida" name="puerto_salida">
                <option value="puerto1">Puerto 1</option>
                <option value="puerto2">Puerto 2</option>
                <!-- Agrega más opciones según sea necesario -->
            </select>

            <label for="puerto_llegada">Puerto de Llegada:</label>
            <select id="puerto_llegada" name="puerto_llegada">
                <option value="puerto1">Puerto 1</option>
                <option value="puerto2">Puerto 2</option>
                <!-- Agrega más opciones según sea necesario -->
            </select>

            <label for="fecha_registro">Fecha de Registro:</label>
            <input type="date" id="fecha_registro" name="fecha_registro">
            
            
            <button id="calcularButton">Calcular</button>
        <a href="cotizacion.php"> 
        </form>
    </div>

    <script>
        // Obtener el formulario y el botón de calcular
        var cotizacionForm = document.getElementById('cotizacionForm');
        var calcularButton = document.getElementById('calcularButton');

        // Agregar un evento de clic al botón de calcular
        calcularButton.addEventListener('click', function(event) {
            // Prevenir el comportamiento predeterminado del botón
            event.preventDefault();

            // Redirigir al usuario a cotizacion.php
            window.location.href = 'cotizacion.php';
        });
    </script>
</body>
</html>
