<?php

class Info
{
    public string $info_id = "";
    public string $info_nombre = "";
    public string $info_filosofia = "";
    public string $info_resumen = "";
    public string $info_mision = "";
    public string $info_vision = "";
    public string $info_mapa = "";
    public string $info_direccion = "";
    public string $info_ciudad = "";
    public string $info_telefono = "";
    public string $info_celular = "";
    public string $info_email = "";
    public string $info_last = "";
    public function __construct(
        string $info_id,
        string $info_nombre,
        string $info_filosofia,
        string $info_resumen,
        string $info_mision,
        string $info_vision,
        string $info_mapa,
        string $info_direccion,
        string $info_ciudad,
        string $info_telefono,
        string $info_celular,
        string $info_email,
        string $info_last
    ) {
        $this->info_id = $info_id;
        $this->info_nombre = $info_nombre;
        $this->info_filosofia = $info_filosofia;
        $this->info_resumen = $info_resumen;
        $this->info_mision = $info_mision;
        $this->info_vision = $info_vision;
        $this->info_mapa = $info_mapa;
        $this->info_direccion = $info_direccion;
        $this->info_ciudad = $info_ciudad;
        $this->info_telefono = $info_telefono;
        $this->info_celular = $info_celular;
        $this->info_email = $info_email;
        $this->info_last = $info_last;
    }
}


class InfoDao
{
    private MysqlAdapter $mysqlAdapter;
    public function __construct(MysqlAdapter $mysqlAdapter)
    {
        $this->mysqlAdapter = $mysqlAdapter;
    }

    /** Retorna una lista de usuarios
     * @return Info[]
     */
    public function select(): Info
    {
        $resultset = ($this->mysqlAdapter)->query("SELECT * FROM info");
        $row = mysqli_fetch_assoc($resultset);

        $mapa = $row['info_mapa'] ?? "";
        // preguntar si existe la etiqueta iframe o cono el src
        if (strpos($mapa, 'iframe') === false) {
            $mapa = '<iframe src="' . $mapa . '" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        }
        $info = new Info(
            $row['info_id'],
            $row['info_nombre'],
            $row['info_filosofia'],
            $row['info_resumen'],
            $row['info_mision'],
            $row['info_vision'],
            $mapa,
            $row['info_direccion'],
            $row['info_ciudad'],
            $row['info_telefono'],
            $row['info_celular'],
            $row['info_email'],
            $row['info_last']
        );
        return $info;
    }

    /** Atualiza la informacion de la empresa
     * @param string $info_nombre
     * @param string $info_filosofia
     * @param string $info_resumen
     * @param string $info_mision
     * @param string $info_vision
     * @param string $info_mapa
     * @param string $info_direccion
     * @param string $info_ciudad
     * @param string $info_telefono
     * @param string $info_celular
     * @param string $info_email
     * @return bool
     */
    public function update(
        string $info_nombre,
        string $info_filosofia,
        string $info_resumen,
        string $info_mision,
        string $info_vision,
        string $info_mapa,
        string $info_direccion,
        string $info_ciudad,
        string $info_telefono,
        string $info_celular,
        string $info_email
    ): bool {
        $last = date("Y-m-d H:i:s");
        $resultset = ($this->mysqlAdapter)->query("
            UPDATE info SET     
                info_nombre = '$info_nombre', 
                info_filosofia = '$info_filosofia', 
                info_resumen = '$info_resumen', 
                info_mision = '$info_mision', 
                info_vision = '$info_vision', 
                info_mapa = '$info_mapa', 
                info_direccion = '$info_direccion', 
                info_ciudad = '$info_ciudad', 
                info_telefono = '$info_telefono', 
                info_celular = '$info_celular', 
                info_email = '$info_email',
                info_last = '$last'
            ");
        return $resultset;
    }
}
