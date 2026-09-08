<?php
// Sistema de Clientes
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema de Clientes</title>

    <link rel="stylesheet" href="public/css/styles.css">
</head>

<body>

    <header class="encabezado">
        <div class="contenedor">
            <h1>Sistema de Clientes</h1>
            <p>Registro y administración de clientes</p>
        </div>
    </header>

    <nav class="navegacion">
        <div class="contenedor menu">
            <a href="index.php">Inicio</a>
            <a href="#">Registrar Cliente</a>
            <a href="#">Consultar Clientes</a>
        </div>
    </nav>

    <main>

        <section class="inicio">

            <div class="contenedor">

                <h2>Bienvenido al Sistema de Clientes</h2>

                <p>
                    Esta aplicación permite registrar y consultar información
                    de clientes mediante una estructura basada en el patrón
                    Modelo - Vista - Controlador (MVC).
                </p>

                <div class="opciones">

                    <article class="tarjeta">
                        <h3>Registrar Cliente</h3>

                        <p>
                            Permite ingresar la información de un nuevo cliente
                            en el sistema.
                        </p>

                        <a href="#" class="boton">
                            Registrar
                        </a>
                    </article>

                    <article class="tarjeta">
                        <h3>Consultar Clientes</h3>

                        <p>
                            Permite visualizar los clientes registrados
                            en el sistema.
                        </p>

                        <a href="#" class="boton">
                            Consultar
                        </a>
                    </article>

                </div>

            </div>

        </section>

    </main>

    <footer class="pie-pagina">
        <p>
            &copy; 2026 Sistema de Clientes
        </p>
    </footer>

</body>

</html>