# MYSQL

Crea la base de datos

```sql
    CREATE DATABASE odontologia;
    USE odontologia;

    CREATE TABLE odontologo (
      id int(11) NOT NULL AUTO_INCREMENT,
      nombre varchar(50) NOT NULL,
      apellido varchar(50) NOT NULL,
      matricula varchar(50) NOT NULL,
      especialidad varchar(50) NOT NULL,
      telefono varchar(50) NOT NULL,
      email varchar(50) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB;
```

# .env

Crea el archivo .env en la raiz del proyecto y configuralo

```env
    HTTP_DOMAIN = {{YOUR_DOMAIN}}
```
