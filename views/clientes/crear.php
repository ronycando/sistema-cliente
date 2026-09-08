<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrar Cliente | Sistema de Clientes</title>

    <link rel="stylesheet" href="../../public/css/styles.css">
</head>

<body>

    <header class="encabezado">

        <div class="contenedor">

            <h1>Sistema de Clientes</h1>

            <p>
                Registro y administración de clientes
            </p>

        </div>

    </header>

    <nav class="navegacion">

        <div class="contenedor menu">

            <a href="../../index.php">
                Inicio
            </a>

            <a href="crear.php">
                Registrar Cliente
            </a>

            <a href="#">
                Consultar Clientes
            </a>

        </div>

    </nav>

    <main>

        <section class="seccion-formulario">

            <div class="contenedor">

                <div class="encabezado-formulario">

                    <h2>
                        Registrar Cliente
                    </h2>

                    <p>
                        Complete la siguiente información para registrar
                        un nuevo cliente en el sistema.
                    </p>

                </div>

                <div
                    id="mensajeError"
                    class="mensaje-error"
                ></div>

                <form
                    id="formularioCliente"
                    class="formulario-cliente"
                    method="POST"
                    action="#"
                    novalidate
                >

                    <div class="campo">

                        <label for="nombre">
                            Nombre completo
                        </label>

                        <input
                            type="text"
                            id="nombre"
                            name="nombre"
                            placeholder="Ingrese el nombre completo"
                        >

                    </div>

                    <div class="campo">

                        <label for="cedula">
                            Cédula
                        </label>

                        <input
                            type="text"
                            id="cedula"
                            name="cedula"
                            maxlength="10"
                            placeholder="Ingrese la cédula"
                        >

                    </div>

                    <div class="campo">

                        <label for="correo">
                            Correo electrónico
                        </label>

                        <input
                            type="email"
                            id="correo"
                            name="correo"
                            placeholder="correo@ejemplo.com"
                        >

                    </div>

                    <div class="campo">

                        <label for="telefono">
                            Teléfono
                        </label>

                        <input
                            type="text"
                            id="telefono"
                            name="telefono"
                            maxlength="10"
                            placeholder="Ingrese el teléfono"
                        >

                    </div>

                    <div class="campo">

                        <label for="edad">
                            Edad
                        </label>

                        <input
                            type="number"
                            id="edad"
                            name="edad"
                            min="18"
                            max="100"
                            placeholder="Ingrese la edad"
                        >

                    </div>

                    <div class="acciones-formulario">

                        <a
                            href="../../index.php"
                            class="boton-secundario"
                        >
                            Cancelar
                        </a>

                        <button
                            type="submit"
                            class="boton"
                        >
                            Guardar Cliente
                        </button>

                    </div>

                </form>

            </div>

        </section>

    </main>

    <footer class="pie-pagina">

        <p>
            &copy; 2026 Sistema de Clientes
        </p>

    </footer>

    <script src="../../public/js/validaciones.js"></script>

</body>

</html>