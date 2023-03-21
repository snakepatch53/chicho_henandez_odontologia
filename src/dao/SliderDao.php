<?php

class Slider
{
    public string $slider_id = "";
    public string $slider_titulo = "";
    public string $slider_imagen = "";
    public string $slider_last = "";
    public string $slider_created = "";
    public function __construct(
        string $slider_id,
        string $slider_titulo,
        string $slider_imagen,
        string $slider_last,
        string $slider_created
    ) {
        $this->slider_id = $slider_id;
        $this->slider_titulo = $slider_titulo;
        $this->slider_imagen = $slider_imagen;
        $this->slider_last = $slider_last;
        $this->slider_created = $slider_created;
    }
}


class SliderDao
{
    private MysqlAdapter $mysqlAdapter;
    public function __construct(MysqlAdapter $mysqlAdapter)
    {
        $this->mysqlAdapter = $mysqlAdapter;
    }

    /** Retorna una lista de imagenes para el slider
     * @return Slider[]
     */
    public function select(): array
    {
        $resultset = ($this->mysqlAdapter)->query("SELECT * FROM slider");
        $sliders = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $slider = new Slider(
                $row['slider_id'],
                $row['slider_titulo'],
                $row['slider_imagen'],
                $row['slider_last'],
                $row['slider_created']
            );
            $sliders[] = $slider;
        }
        return $sliders;
    }
}
