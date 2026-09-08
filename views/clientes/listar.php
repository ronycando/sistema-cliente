<?php

require_once __DIR__ . "/../../models/Cliente.php";

$cliente = new Cliente();

$clientes = $cliente->listarClientes();

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Consultar Clientes | Sistema de Clientes</title>

    <link
        rel="stylesheet"
        href="../../public/css/styles.css"
    >

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

            <a href="listar.php">
                Consultar Clientes
            </a>

        </div>

    </nav>

    <main>

        <section class="seccion-listado">

            <div class="contenedor">

                <div class="encabezado-listado">

                    <h2>
                        Clientes Registrados
                    </h2>

                    <p>
                        A continuación se muestran los clientes
                        registrados en la base de datos.
                    </p>

                </div>

                <div class="acciones-listado">

                    <a
                        href="crear.php"
                        class="boton"
                    >
                        Registrar nuevo cliente
                    </a>

                </div>

                <div class="contenedor-tabla">

                    <table class="tabla-clientes">

                        <thead>

                            <tr>

                                <th>ID</th>

                                <th>Nombre</th>

                                <th>Cédula</th>

                                <th>Correo</th>

                                <th>Teléfono</th>

                                <th>Edad</th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php if (count($clientes) > 0) { ?>

                                <?php foreach ($clientes as $item) { ?>

                                    <tr>

                                        <td>
                                            <?php echo htmlspecialchars($item["id"]); ?>
                                        </td>

                                        <td>
                                            <?php echo htmlspecialchars($item["nombre"]); ?>
                                        </td>

                                        <td>
                                            <?php echo htmlspecialchars($item["cedula"]); ?>
                                        </td>

                                        <td>
                                            <?php echo htmlspecialchars($item["correo"]); ?>
                                        </td>

                                        <td>
                                            <?php echo htmlspecialchars($item["telefono"]); ?>
                                        </td>

                                        <td>
                                            <?php echo htmlspecialchars($item["edad"]); ?>
                                        </td>

                                    </tr>

                                <?php } ?>

                            <?php } else { ?>

                                <tr>

                                    <td
                                        colspan="6"
                                        class="sin-registros"
                                    >
                                        No existen clientes registrados.
                                    </td>

                                </tr>

                            <?php } ?>

                        </tbody>

                    </table>

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