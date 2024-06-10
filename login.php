<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./css/login.css" />
    <style>.contenedor {
        display: flex; /* Usamos flexbox para organizar los elementos */
        justify-content: center; /* Centramos los elementos horizontalmente */
        align-items: center; /* Centramos los elementos verticalmente */
        height: 100vh; /* Ocupa todo el alto de la ventana */
        margin: 20px; /* Margen exterior para separar del borde */
      }
      .header {
        background-color: black;
        color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
    }

    .header .logo-container {
        display: flex;
        align-items: center;
        font-size: 24px;
        font-weight: bold;
        margin-left: 30px; /* Espacio entre la imagen y el texto */
        color: yellow;
    }
.logo-container img {
    width: 50px; /* Tamaño de la imagen */
    margin-right: 10px; /* Espacio entre la imagen y el texto */}

  /* Estilo del primer div */
  .div-izquierdo,.div-derecho {
    flex: 1; /* Ambos divs ocupan el mismo espacio disponible */
    padding: 20px; /* Espacio interno */
    border: 1px solid #fff6f6; /* Borde */
    border-radius: 10px; /* Bordes redondeados */
    box-sizing: border-box; /* Incluimos el borde en el tamaño total */
    background-color: #f2f2f2; 
    font-family: Georgia, Times, 'Times New Roman', serif; /* Fuente del texto */
  }

  /* Estilo específico del primer div */
  .div-izquierdo {
    margin-right: 20px; /* Espacio entre los divs */
    display: flex;
    flex-direction: column;
    align-items: center;
    input[type="text"],
    input[type="password"] {
        margin-bottom: 10px; /* Espacio inferior */
    }

    label {
        margin-bottom: 5px; /* Espacio inferior */
    }
  }
  
#mail, #password, #submit, #user, #cellphone {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

#login{
    width: 20%;
    padding: 10px;
    margin: 10px;
    border: none;
    border-radius: 5px;
    background-color: #FFD045;
    color: #000000;
    cursor: pointer;
}

#signin{
    width: 20%;
    padding: 10px;
    margin: 10px;
    border: none;
    border-radius: 5px;
    background-color: #FFD045;
    color: #000000;
    cursor: pointer;

}
  /* Estilo específico del segundo div */
  .div-derecho {
    margin-left: 20px; /* Espacio entre los divs */
    display: flex;
    flex-direction: column;
    align-items: center;
    padding:10px;
    input[type="text"],
    input[type="password"] {
  margin-bottom: 10px; /* Espacio inferior */
    width: 50%; /* Ancho del input */
}
}

label {
  margin-bottom: 5px; /* Espacio inferior */
}</style>

  </head>

  <header class="header">
    <div class="logo-container">
        <img src="./img/carrito (1).png" height="60px" sizes="60px">
        <div class="logo">FlexPorts</div>
    </div>
  </header>

  <body>
    <div class="contenedor">
      <div class="div-izquierdo">
        <label for="mail">Correo</label>
        <input id="mail" type="text" placeholder="Correo..." />

        <label for="password">Contraseña</label>
        <input id="password" type="text" placeholder="Contraseña..." />

        <button id="login" onclick="login()">Iniciar sesión</button>
        <a href="ruta.php"> 
        
        <div class="registro">
         
        </div>
      </div>

      <div class="div-derecho">
        <label for="mail">Correo</label>
        <input id="mail" type="text" placeholder="Ingresa correo" />

        <label for="user">Nombre completo</label>
        <input id="user" type="text" placeholder="Ingresa nombre completo" />

        <label for="cellphone">Celular</label>
        <input
          id="cellphone"
          type="text"
          placeholder="Ingresa número de celular"
        />

        <label for="password">Contraseña</label>
        <input id="password" type="text" placeholder="Ingresa tu contraseña" />

        <button id="signin" onclick="registrar()">Registrar</button>

        <a href="ruta.php">¿Ya tienes cuenta? Inicia sesión</a>
      </div>
    </div>

    <script>
        // Aquí está el script JavaScript
        // Define la función registrar()
        function registrar() {
            // Recuperar los valores de los campos del formulario
            let mail = document.getElementById("mail").value;
            let user = document.getElementById("user").value;
            let cellphone = document.getElementById("cellphone").value;
            let password = document.getElementById("password").value;

            // Puedes agregar lógica para validar los campos del formulario aquí

            // Por ahora, simplemente redireccionaremos a otra página
            window.location.replace("ruta.php");
        }

        function login() {
    // Recuperar los valores de los campos de correo y contraseña
    let correo = document.getElementById("mail").value;
    let contraseña = document.getElementById("password").value;

    // Aquí puedes agregar la lógica para verificar la autenticación del usuario
    // Por ejemplo, puedes hacer una solicitud AJAX a tu servidor para verificar las credenciales

    // Una vez que la autenticación se ha verificado correctamente, redirigir a la página "ruta.php"
    window.location.href = "ruta.php";
}

    </script>
  </body>
</html>