<?php

class Servicio
{
    public string $servicio_id = "";
    public string $servicio_nombre = "";
    public string $servicio_imagen = "";
    public string $servicio_descripcion = "";
    public string $servicio_last = "";
    public string $servicio_created = "";
    public function __construct(
        string $servicio_id,
        string $servicio_nombre,
        string $servicio_imagen,
        string $servicio_descripcion,
        string $servicio_last,
        string $servicio_created
    ) {
        $this->servicio_id = $servicio_id;
        $this->servicio_nombre = $servicio_nombre;
        $this->servicio_imagen = $servicio_imagen;
        $this->servicio_descripcion = $servicio_descripcion;
        $this->servicio_last = $servicio_last;
        $this->servicio_created = $servicio_created;
    }
}


class ServicioDao
{
    private MysqlAdapter $mysqlAdapter;
    public function __construct(MysqlAdapter $mysqlAdapter)
    {
        $this->mysqlAdapter = $mysqlAdapter;
    }

    /** Retorna una lista de servicios
     * @return Servicio[]
     */
    public function select(): array
    {
        $resultset = ($this->mysqlAdapter)->query("SELECT * FROM servicios");
        $servicios = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $servicio = new Servicio(
                $row['servicio_id'],
                $row['servicio_nombre'],
                $row['servicio_imagen'],
                $row['servicio_descripcion'],
                $row['servicio_last'],
                $row['servicio_created']
            );
            $servicios[] = $servicio;
        }
        return $servicios;
    }

    /** Retorna una lista de servicios
     * @return Servicio[]
     */
    public function selectLimit($limit): array
    {
        $resultset = ($this->mysqlAdapter)->query("SELECT * FROM servicios LIMIT $limit");
        $servicios = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $servicio = new Servicio(
                $row['servicio_id'],
                $row['servicio_nombre'],
                $row['servicio_imagen'],
                $row['servicio_descripcion'],
                $row['servicio_last'],
                $row['servicio_created']
            );
            $servicios[] = $servicio;
        }
        return $servicios;
    }
}
