<!DOCTYPE html>
<html>
<head>
    <title>Cotización de Envíos</title>
    <style>
        /* Estilos CSS aquí */
        body {
            font-family: Arial, sans-serif;
            margin: 15px; /* Ajustamos el valor del margen */
            padding: 0;
             /* Alinear el texto dentro del body al centro */
        }

        h1 {
            font-size: 22px;
        }

        h2 {
            font-size: 16px;
            text-align: center;
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

        .registro-cotizacion {
            font-size: 24px;
            font-weight: bold;
            margin: 0 auto; /* Centrar horizontalmente */
            text-align: center; /* Alinear el texto al centro */
        }

        .precio {
            margin: 0 auto; /* Centrar horizontalmente */
            text-align: center; /* Alinear el texto al centro */
        }

        .grafica {
            margin: 0 auto; /* Centrar horizontalmente */
            text-align: center; /* Alinear el texto al centro */
        }

        .todo {
            text-align: center; /* Alinear el texto al centro */
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="logo-container">
            <a href="ruta.php"><img src="carrito.png" height="30px" sizes="30px"></a>
            <div class="logo">FlexPorts</div>
        </div>
    </header>

    <!-- Título de la página -->
    <h1>Cotización</h1>

    <!-- Div contenedor de todos los elementos -->
    <div class="todo">
        <!-- Texto que muestra la información de la entrega -->
        <div class="registro-cotizacion">
            <h2>
                Ruta: Marítima
                De: Prizna  
                A: Apia  
                Para: 25/06/2024  
               
            </h2>
        </div>

        <!-- Texto del precio estimado -->
        <div class="precio">
            <h2>El precio estimado de la entrega es de $5 000.00 MXN</h2>
        </div>

        <!-- Contenedor de la gráfica o cualquier otro elemento -->
        <div class="grafica">


        </div>
    </div>

    <?php
    // Código PHP aquí si es necesario
    ?>
</body>
</html>
