<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <style>
        :root {
            --url_bg_citaform: url('<?= $DATA['http_domain'] ?>public/img/citaform_background.png');
        }
    </style>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/citas.css">
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">
        <section class="form">
            <div class="container">
                <form id="citaform-cliente" class="show">
                    <div class="row">
                        <label for="cedula">Cedula: </label>
                        <div class="input">
                            <input type="text" name="cedula" id="cedula">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                    </div>
                    <div class="autocomplete">
                        <div class="col">
                            <div class="row">
                                <label for="nombre">Nombre: </label>
                                <input type="text" name="nombre" id="nombre">
                            </div>
                            <div class="row">
                                <label for="celular">Celular: </label>
                                <input type="text" name="celular" id="celular">
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <label for="email">Email: </label>
                                <input type="text" name="email" id="email">
                            </div>
                            <div class="row">
                                <label for="direccion">Direccion: </label>
                                <input type="text" name="direccion" id="direccion">
                            </div>
                        </div>
                    </div>
                </form>
                <form id="citaform-cita">
                    <div class="col">
                        <img src="<?= $DATA['http_domain'] ?>public/img/calendario.png" alt="Imagen Calendario">
                    </div>
                    <div class="col">
                        <label for="doctor">Eligir un especialista: </label>
                        <select name="doctor" id="doctor">
                            <option value="">Seleccione una opcion</option>
                            <?php foreach ($DATA['doctores'] as $item) { ?>
                                <option value="<?= $item['user_id'] ?>">Dr. <?= $item['user_nombre'] ?></option>
                            <?php } ?>
                        </select>
                        <label for="hora">Elegir una hora: </label>
                        <select name="hora" id="hora">
                            <option value="">Seleccione una opcion</option>
                            <?php foreach ($DATA['horas'] as $item) { ?>
                                <option value="<?= $item['hora_id'] ?>"><?= $item['hora_hora'] ?></option>
                            <?php } ?>
                        </select>
                        <label for="especialidad">Elegir una especialidad: </label>
                        <select name="especialidad" id="especialidad">
                            <option value="">Seleccione una opcion</option>
                            <?php foreach ($DATA['servicios'] as $item) { ?>
                                <option value="<?= $item['servicio_id'] ?>"><?= $item['servicio_nombre'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </form>
                <button>
                    <span>Agendar</span>
                    <i class="fas fa-calendar-alt"></i>
                </button>
            </div>
        </section>

        <section class="servicios">
            <div class="container">
                <ul>
                    <?php foreach ($DATA['servicios'] as $item) { ?>
                        <li>
                            <img src="<?= $DATA['http_domain'] ?>public/img.servicios/<?= $item['servicio_imagen'] ?>?last=<?= $item['servicio_last'] ?>" alt="Imagen de Servicio <?= $item['servicio_nombre'] ?>">
                            <h3><?= $item['servicio_nombre'] ?></h3>
                            <p><?= $item['servicio_descripcion'] ?></p>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
    </main>

    <footer id="section-footer">
        <?php include('./src/templates/public.component/footer.php') ?>
    </footer>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
</foot>

</html>