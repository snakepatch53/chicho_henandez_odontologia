<?php

class Social
{
    public string $social_id = "";
    public string $social_nombre = "";
    public string $social_url = "";
    public string $social_icon = "";
    public string $social_color = "";
    public string $social_last = "";
    public string $social_created = "";
    public function __construct(
        string $social_id,
        string $social_nombre,
        string $social_url,
        string $social_icon,
        string $social_color,
        string $social_last,
        string $social_created
    ) {
        $this->social_id = $social_id;
        $this->social_nombre = $social_nombre;
        $this->social_url = $social_url;
        $this->social_icon = $social_icon;
        $this->social_color = $social_color;
        $this->social_last = $social_last;
        $this->social_created = $social_created;
    }
}


class SocialDao
{
    private MysqlAdapter $mysqlAdapter;
    public function __construct(MysqlAdapter $mysqlAdapter)
    {
        $this->mysqlAdapter = $mysqlAdapter;
    }

    /** Retorna una lista de redes sociales
     * @return Social[]
     */
    public function select(): array
    {
        $resultset = ($this->mysqlAdapter)->query("SELECT * FROM social");
        $socials = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $icon = $row['social_icon'];
            if (strpos($icon, '<i') === false) {
                $icon = '<i class="' . $icon . '" i></i>';
            }
            $color = $row['social_color'];
            if (strpos($color, '#') === false) {
                $color = '#' . $color;
            }
            $social = new Social(
                $row['social_id'],
                $row['social_nombre'],
                $row['social_url'],
                $icon,
                $color,
                $row['social_last'],
                $row['social_created']
            );
            $socials[] = $social;
        }
        return $socials;
    }
}
