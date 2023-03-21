<?php

class Hora
{
    public string $hora_id = "";
    public string $hora_hora = "";
    public string $hora_last = "";
    public string $hora_created = "";
    public function __construct(
        string $hora_id,
        string $hora_hora,
        string $hora_last,
        string $hora_created
    ) {
        $this->hora_id = $hora_id;
        $this->hora_hora = $hora_hora;
        $this->hora_last = $hora_last;
        $this->hora_created = $hora_created;
    }
}


class HoraDao
{
    private MysqlAdapter $mysqlAdapter;
    public function __construct(MysqlAdapter $mysqlAdapter)
    {
        $this->mysqlAdapter = $mysqlAdapter;
    }

    /** Retorna una lista de redes sociales
     * @return Hora[]
     */
    public function select(): array
    {
        $resultset = ($this->mysqlAdapter)->query("SELECT * FROM horas");
        $horas = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $hora = new hora(
                $row['hora_id'],
                $row['hora_hora'],
                $row['hora_last'],
                $row['hora_created']
            );
            $horas[] = $hora;
        }
        return $horas;
    }
}
