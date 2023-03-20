DROP TABLE IF EXISTS info;

CREATE TABLE info (
    info_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    info_nombre VARCHAR(100),
    info_sigla VARCHAR(50),
    info_logo VARCHAR(10),
    info_icon VARCHAR(10),
    info_ciudad VARCHAR(50),
    info_direccion VARCHAR(100),
    info_telefono VARCHAR(11),
    info_celular VARCHAR(11),
    info_email VARCHAR(100),
    info_last VARCHAR(50),
    info_created VARCHAR(50)
) ENGINE INNODB;

DROP TABLE IF EXISTS user;

CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_nombre VARCHAR(50),
    user_user VARCHAR(50),
    user_pass VARCHAR(50),
    user_foto VARCHAR(100) DEFAULT 'default.png',
    user_last VARCHAR(50),
    user_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    users
VALUES
    (
        1,
        'Administrador',
        'admin',
        'admin',
        'default.png',
        '2019-01-01 00:00:00',
        '2019-01-01 00:00:00'
    );