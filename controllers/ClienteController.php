<?php

require_once __DIR__ . "/../models/Cliente.php";

$cliente = new Cliente();

$accion = isset($_GET["accion"]) ? $_GET["accion"] : "";

if ($accion == "registrar") {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombre = isset($_POST["nombre"])
            ? trim($_POST["nombre"])
            : "";

        $cedula = isset($_POST["cedula"])
            ? trim($_POST["cedula"])
            : "";

        $correo = isset($_POST["correo"])
            ? trim($_POST["correo"])
            : "";

        $telefono = isset($_POST["telefono"])
            ? trim($_POST["telefono"])
            : "";

        $edad = isset($_POST["edad"])
            ? trim($_POST["edad"])
            : "";

        if (
            $nombre == "" ||
            $cedula == "" ||
            $correo == "" ||
            $telefono == "" ||
            $edad == ""
        ) {

            header(
                "Location: ../views/clientes/crear.php?mensaje=campos"
            );

            exit;
        }

        $resultado = $cliente->registrarCliente(
            $nombre,
            $cedula,
            $correo,
            $telefono,
            $edad
        );

        if ($resultado) {

            header(
                "Location: ../views/clientes/crear.php?mensaje=ok"
            );

            exit;

        } else {

            header(
                "Location: ../views/clientes/crear.php?mensaje=error"
            );

            exit;
        }
    }
}

?>