<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/slider.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/inicio.css">
    <title><?= $DATA['title'] ?></title>
    <style>
        :root {
            --url_bg_wave_bottom: url('<?= $DATA['http_domain'] ?>public/img/bg_wave_bottom.svg');
            --url_bg_wave_top: url('<?= $DATA['http_domain'] ?>public/img/bg_wave_top.svg');
        }
    </style>
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main>
        <slider>
            <?php include('./src/templates/public.component/slider.php') ?>
        </slider>
        <!--//? Servicios -->
        <section class="servicios">
            <div class="container">
                <div class="item">
                    <img src="<?= $DATA['http_domain'] ?>public/img/servicio_frenillos.png" alt="Icono Frenillos">
                    <span>Frenillos</span>
                </div>
                <div class="item">
                    <img src="<?= $DATA['http_domain'] ?>public/img/servicio_caries.png" alt="Icono Caries">
                    <span>Caries</span>
                </div>
                <div class="item">
                    <img src="<?= $DATA['http_domain'] ?>public/img/servicio_carillas.png" alt="Icono Carillas">
                    <span>Carillas</span>
                </div>
                <div class="item">
                    <img src="<?= $DATA['http_domain'] ?>public/img/servicio_sarro.png" alt="Icono Sarro">
                    <span>Sarro</span>
                </div>
            </div>
        </section>

        <!--//? Nuestra filosofia -->
        <section class="filosofia">
            <div class="container">
                <h2>Nuestra filosofía</h2>
                <div class="item">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquam consequuntur cum, assumenda reprehenderit hic placeat tenetur laborum, repudiandae velit provident blanditiis magni rem nisi quisquam totam eos? Odio, incidunt.
                    </p>
                    <dv class="img">
                        <img src="<?= $DATA['http_domain'] ?>public/img/filosofia.png" alt="Imagen de Folosofia">
                    </dv>
                </div>
                <div class="doctores">
                    <div class="item">
                        <img src="<?= $DATA['http_domain'] ?>public/img/doctor1.png" alt="Foto del Doctor">
                        <b>Dr. Claudio Ayora</b>
                        <span>Especialista en odontologia</span>
                    </div>
                    <div class="item">
                        <img src="<?= $DATA['http_domain'] ?>public/img/doctor2.png" alt="Foto del Doctor">
                        <b>Dr. David Ayora</b>
                        <span>Especialista en odontologia</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- //? Consulta -->
        <section class="consultar">
            <div class="container">
                <h2>Deja que tu sonrisa hable por ti</h2>
                <div class="item">
                    <div class="img">
                        <img src="<?= $DATA['http_domain'] ?>public/img/persona_señalando.png" alt="Imagen de Consulta">
                    </div>
                    <di class="button">
                        <a href="<?= $DATA['http_domain'] ?>citas">
                            <span>Quiero una consulta</span>
                            <i class="fas fa-paper-plane"></i>
                        </a>
                    </di>
                </div>
            </div>
        </section>
    </main>

    <footer id="section-footer">
        <?php include('./src/templates/public.component/footer.php') ?>
    </footer>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
    <script src="<?= $DATA['http_domain'] ?>public/js.public/slider.component.js"></script>
</foot>

</html>