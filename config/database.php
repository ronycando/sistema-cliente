<?php

class Conectar
{
    protected $dbh;

    protected function conexion()
    {
        try {

            $conectar = $this->dbh = new PDO(
                "mysql:host=localhost;dbname=integradora",
                "root",
                "cynerisai"
            );

            $conectar->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            $conectar->setAttribute(
                PDO::ATTR_DEFAULT_FETCH_MODE,
                PDO::FETCH_ASSOC
            );

            return $conectar;

        } catch (PDOException $e) {

            die("Error de conexión a la base de datos: " . $e->getMessage());

        }
    }

    public function set_names()
    {
        return $this->dbh->query("SET NAMES 'utf8mb4'");
    }
}

?>