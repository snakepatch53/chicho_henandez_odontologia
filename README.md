# MYSQL

Al iniciar el proyecto ejecuta la ruta:

```http
  YOUR_DOMAIN/service/configuration
```

para generar la base de datos y las tablas.
Luego es importante que desabilites el servicio de configuración para que no se sobreescriban los datos.

# LOGIN

Para iniciar sesion por primera vez usa los siguientes credenciales

```txt
  USUARIO: admin
  CONTRASEÑA: admin
```

# .env

Crea el archivo .env en la raiz del proyecto y configuralo

```env
    # PROJECT
    HTTP_DOMAIN = {{YOUR_DOMAIN}}

    # MYSQLI
    DB_HOST = {{YOUR_DB_HOST}}
    DB_USER = {{YOUR_DB_USER}}
    DB_PASS = {{YOUR_DB_PASS}}
    DB_NAME = {{YOUR_DB_NAME}}
    DB_PORT =  {{YOUR_DB_PORT}}
```
