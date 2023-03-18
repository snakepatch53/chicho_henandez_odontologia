<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <title>Dr. Ayora's 🧑‍⚕️ <?= $DATA['title'] ?></title>
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
                            <option value="1">Ortodoncia</option>
                            <option value="2">Profilaxis</option>
                            <option value="3">Carillas</option>
                            <option value="4">Endodoncia</option>
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
                        <h3>Ortodoncia</h3>
                        <p>La ortodoncia es la especialidad de la odontología que se encarga de corregir la posición de los dientes y de los huesos maxilares. La ortodoncia puede ser necesaria para corregir problemas de mordida, de alineación de los dientes o de la posición de los dientes.</p>
                    </li>
                    <li>
                        <img src="<?= $DATA['http_domain'] ?>public/img/servicio_frenillos.png" alt="Imagen de Servicio Brakets">
                        <h3>Profilaxis</h3>
                        <p>La profilaxis es una limpieza dental profunda que se realiza en la clínica dental. La profilaxis elimina la placa dental y el sarro de los dientes y de las encías. La profilaxis también elimina las manchas de los dientes.</p>
                    </li>
                    <li>
                        <img src="<?= $DATA['http_domain'] ?>public/img/servicio_sarro.png" alt="Imagen de Servicio Sarro">
                        <h3>Carillas</h3>
                        <p>Las carillas son láminas de porcelana o de composite que se adhieren a la superficie de los dientes. Las carillas se utilizan para corregir problemas estéticos como los dientes rotos, los dientes desalineados, los dientes con manchas, los dientes con espacios entre ellos, los dientes con forma irregular, etc.</p>
                    </li>
                    <li>
                        <img src="<?= $DATA['http_domain'] ?>public/img/servicio_caries.png" alt="Imagen de Servicio Caries">
                        <h3>Endodoncia</h3>
                        <p>La endodoncia es una rama de la odontología que se encarga de tratar las infecciones de los dientes. La endodoncia se realiza cuando el nervio de un diente está infectado. La endodoncia se realiza para salvar el diente y evitar que se pierda.</p>
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