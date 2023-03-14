<?php

class User
{
    public string $user_id = "";
    public string $user_nombre = "";
    public string $user_user = "";
    public string $user_pass = "";
    public string $user_foto = "";
    public string $user_last = "";
    public string $user_created = "";
    public function __construct($user_id, $user_nombre, $user_user, $user_pass, $user_foto, $user_last, $user_created)
    {
        $this->user_id = $user_id;
        $this->user_nombre = $user_nombre;
        $this->user_user = $user_user;
        $this->user_pass = $user_pass;
        $this->user_foto = $user_foto;
        $this->user_last = $user_last;
        $this->user_created = $user_created;
    }
}


class UserDao
{
    private MysqlAdapter $mysqlAdapter;
    public function __construct(MysqlAdapter $mysqlAdapter)
    {
        $this->mysqlAdapter = $mysqlAdapter;
    }

    /**
     * @return User[]
     */
    public function select(): array
    {
        $users = [];
        $resultset = ($this->mysqlAdapter)->query("SELECT * FROM users");
        while ($row = mysqli_fetch_assoc($resultset)) {
            $user = new User(
                $row['user_id'],
                $row['user_nombre'],
                $row['user_user'],
                $row['user_pass'],
                $row['user_foto'],
                $row['user_last'],
                $row['user_created']
            );
            $users[] = $user;
        }
        return $users;
    }
}