<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/inicio.css">
    <title><?= $DATA['title'] ?></title>
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