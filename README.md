# 🐬 MYSQL

Primero crea la base de datos

```sql
  CREATE DATABASE {{YOUR_DB_NAME}};
  USE {{YOUR_DB_NAME}};
```

-   Asegurate de que el nombre de la base de datos sea el mismo que el que usas en el archivo .env
-   Si estas en CPANEL tendras que crearla con ayuda de la interfaz grafica.

# 🛠 CONFIGURACION

Luego puedes usar el servicio de configuración para crear las tablas y los datos inciales:

```http
  {{YOUR_DOMAIN}}/service/configuration
```

para generar la base de datos y las tablas.
Luego es importante que desabilites el servicio de configuración para que no se sobreescriban los datos.

# 🚪 LOGIN

Para iniciar sesion por primera vez usa los siguientes credenciales

```txt
  USUARIO: admin
  CONTRASEÑA: admin
```

# 📄 .env

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

# 📄 .htaccess

Crea el archivo .htaccess en la raiz del proyecto y configuralo

```htaccess
  RewriteEngine On
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteRule . index.php [L]

  # Denegar el acceso a los directorios
  Options -Indexes

  <FilesMatch "\.(php|html?)$">
    Order Deny,Allow
    Deny from all
  </FilesMatch>
  <Files "index.php">
    Order Allow,Deny
    Allow from all
  </Files>
```

En caso de que tu proyecto ya este funcionando en un dominio y quieras activar el SSL, puedes agregar esta configuracion en htaccess

```htaccess
  RewriteEngine On
  RewriteCond %{HTTPS} !=on
  RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301,NE]
  Header always set Content-Security-Policy "upgrade-insecure-requests;"
```
