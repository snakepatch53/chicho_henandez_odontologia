<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <title><?= $DATA['title'] ?></title>
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
                            <option value="1">Dr. Claudio Ayora</option>
                            <option value="2">Dr. David Ayora</option>
                        </select>
                        <label for="hora">Elegir una hora: </label>
                        <select name="hora" id="hora">
                            <option value="">Seleccione una opcion</option>
                            <option value="1">8:00 am</option>
                            <option value="2">9:00 am</option>
                            <option value="3">10:00 am</option>
                            <option value="4">11:00 am</option>
                            <option value="5">12:00 pm</option>
                            <option value="6">1:00 pm</option>
                            <option value="7">2:00 pm</option>
                            <option value="8">3:00 pm</option>
                            <option value="9">4:00 pm</option>
                            <option value="10">5:00 pm</option>
                        </select>
                        <label for="especialidad">Elegir una especialidad: </label>
                        <select name="especialidad" id="especialidad">
                            <option value="">Seleccione una opcion</option>
                            <option value="1">Carillas</option>
                            <option value="2">Sarro</option>
                            <option value="3">Brakets</option>
                            <option value="4">Caries</option>
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
                    <li>
                        <img src="<?= $DATA['http_domain'] ?>public/img/servicio_caries.png" alt="Imagen de Servicio Caries">
                        <h3>Caries</h3>
                        <p>La carilla dental es una pequeña capa de porcelana que se adhiere a la superficie de los dientes para mejorar su apariencia. Las carillas dentales pueden ser una excelente opción para corregir los dientes rotos, descoloridos, mal alineados, con espacios o con forma irregular.</p>
                    </li>
                    <li>
                        <img src="<?= $DATA['http_domain'] ?>public/img/servicio_frenillos.png" alt="Imagen de Servicio Brakets">
                        <h3>Brakets</h3>
                        <p>Los brackets son aparatos ortodóncicos que se colocan en los dientes para corregir la posición de los mismos. Los brackets pueden ser de metal, cerámicos o de zafiro. Los brackets de metal son los más económicos y duraderos, pero son los que más se notan en la boca.</p>
                    </li>
                    <li>
                        <img src="<?= $DATA['http_domain'] ?>public/img/servicio_sarro.png" alt="Imagen de Servicio Sarro">
                        <h3>Sarro</h3>
                        <p>El sarro es una placa dura y pegajosa que se forma en los dientes y en las encías. El sarro se forma cuando la placa dental no se retira con la limpieza diaria de los dientes. El sarro puede causar enfermedad de las encías y puede provocar la pérdida de los dientes.</p>
                    </li>
                    <li>
                        <img src="<?= $DATA['http_domain'] ?>public/img/servicio_caries.png" alt="Imagen de Servicio Caries">
                        <h3>Caries</h3>
                        <p>Las caries son pequeños agujeros en los dientes que se forman cuando la placa dental se endurece y se convierte en sarro. El sarro contiene bacterias que causan la caries. La caries puede causar dolor y puede provocar la pérdida de los dientes.</p>
                    </li>
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