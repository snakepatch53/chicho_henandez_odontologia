<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <title>Dr. Ayora's 🧑‍⚕️ <?= $DATA['title'] ?></title>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/nosotros.css">
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">
        <section class="historia">
            <div class="container">
                <h2>Sobre Nosotros</h2>
                <p>
                    La Clínica Odontología de David Ayora abrió sus puertas por primera vez hace más de 10 años en Sucua. Desde entonces, hemos estado comprometidos con brindar atención dental de alta calidad a nuestros pacientes.
                    <br>
                    <br>
                    La idea de abrir nuestra propia clínica dental surgió cuando David Ayora, nuestro fundador y director, se dio cuenta de que muchos pacientes no estaban recibiendo el nivel de atención personalizada que merecían. Él quería crear un lugar donde los pacientes se sintieran cómodos y confiados en que estaban recibiendo el mejor cuidado posible.
                    <br>
                    <br>
                    A lo largo de los años, hemos expandido nuestros servicios para incluir una amplia gama de tratamientos dentales, desde limpiezas regulares y blanqueamiento dental hasta implantes dentales y ortodoncia. También hemos incorporado tecnología de vanguardia para garantizar que nuestros pacientes reciban el tratamiento más avanzado y efectivo.
                    <br>
                    <br>
                    En la Clínica Odontología de David Ayora, creemos que cada paciente es único y merece una atención personalizada. Nos tomamos el tiempo para conocer a cada paciente y entender sus necesidades y preocupaciones. Trabajamos en colaboración con cada paciente para crear un plan de tratamiento personalizado que aborde sus necesidades dentales y de salud en general.
                    <br>
                    <br>
                    Nuestro objetivo es brindar atención dental de alta calidad en un ambiente cálido y acogedor. Nos enorgullece contar con un equipo de odontólogos altamente capacitados y experimentados que están comprometidos con el éxito y la satisfacción de nuestros pacientes.
                    <br>
                    <br>
                    Estamos emocionados de seguir creciendo y de continuar brindando atención dental excepcional a nuestros pacientes. Si está buscando un lugar para recibir atención dental de alta calidad y personalizada, ¡no dude en programar una cita en la Clínica Odontología de David Ayora!
                </p>
            </div>
        </section>
        <section class="mision">
            <div class="container">
                <h3>Misión</h3>
                <p>
                    En la Clínica Odontología de David Ayora, nuestra misión es brindar atención dental de alta calidad y personalizada a cada paciente que visite nuestra clínica. Estamos comprometidos con la excelencia en la atención dental, utilizando tecnología avanzada y un equipo de odontólogos altamente capacitados para garantizar la satisfacción del paciente y su bienestar dental a largo plazo.
                </p>
            </div>
        </section>
        <section class="vision">
            <div class="container">
                <h3>Visión</h3>
                <p>
                    Nuestra visión es convertirnos en la clínica dental líder en nuestra comunidad, brindando atención dental excepcional y personalizada a nuestros pacientes. Queremos ser reconocidos como el lugar donde los pacientes confían en recibir una atención de calidad, y donde nuestro equipo de odontólogos se sienten valorados y satisfechos con su trabajo. Nuestra visión es ser un lugar donde la atención dental sea una experiencia positiva y donde nuestros pacientes se sientan seguros y cómodos con el tratamiento que reciben.
                </p>
            </div>
        </section>
        <br><br><br><br><br>
    </main>

    <footer id="section-footer">
        <?php include('./src/templates/public.component/footer.php') ?>
    </footer>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
</foot>

</html>