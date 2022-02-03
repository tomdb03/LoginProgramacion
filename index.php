<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Login y Registro - Tomás Dalla Bona</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2? family = Roboto: ital, wght @ 0,100; 0,300; 0,400; 0,500; 0,700; 0,900; 1,300; 1,400; 1,500; 1,900 & display = swap " rel=" stylesheet ">
</head>

<body>
    <main>
        <!-- etiquetas -->

        <div class="contenedor__todo">
            <!--contenedor, creando objetos -->

            <div class="caja__trasera">
                <!-- cuadro azul de atras -->
                <div class="caja__trasera-login">
                    <!-- caja para iniciar sesión-->
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesión">Iniciar Sesión</button>
                    <!--Botón con id para controlar en javascript-->
                </div>
                <div class="caja__trasera-register">
                    <!-- caja para registrarse-->
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                    <!--Botón con id para controlar en javascript-->
                </div>
            </div>
            <!-- Formulario de Login y Registro -->
            <div class="contenedor__login-register">
                <!-- Login -->
                <form action="" class="formulario__login">
                    <h2>Iniciar Sesión </h2>
                    <input type="text" placeholder="Correo electrónico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>
                <!-- Registro-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electrónico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>

    </main>
    <script src="assets/js/script.js"></script>
    <!--vinculamos al archivo java script-->
</body>

</html>