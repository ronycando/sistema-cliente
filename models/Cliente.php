<?php

require_once __DIR__ . "/../config/database.php";

class Cliente extends Conectar
{
    public function registrarCliente($nombre, $cedula, $correo, $telefono, $edad)
    {
        try {

            $conectar = parent::conexion();

            $sql = "INSERT INTO clientes
                    (nombre, cedula, correo, telefono, edad)
                    VALUES (?, ?, ?, ?, ?)";

            $stmt = $conectar->prepare($sql);

            $stmt->execute([
                $nombre,
                $cedula,
                $correo,
                $telefono,
                $edad
            ]);

            return true;

        } catch (PDOException $e) {

            return false;
        }
    }

    public function listarClientes()
    {
        try {

            $conectar = parent::conexion();

            $sql = "SELECT
                        id,
                        nombre,
                        cedula,
                        correo,
                        telefono,
                        edad
                    FROM clientes
                    ORDER BY id DESC";

            $stmt = $conectar->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();

        } catch (PDOException $e) {

            return [];
        }
    }
}

?>