<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <title>Dr. Ayora's 🧑‍⚕️ <?= $DATA['title'] ?></title>
    <style>
        :root {
            --url_bg_contactform: url('<?= $DATA['http_domain'] ?>public/img/contactform_background.png');
        }
    </style>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/contactos.css">
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">
        <section class="contact-form">
            <div class="container">
                <form action="">
                    <div class="row">
                        <di class="item">
                            <label for="name"><b>*</b>Nombres y apellidos</label>
                            <input type="text" name="name" id="name">
                            <span class="error"></span>
                        </di>
                    </div>
                    <div class="row">
                        <div class="item">
                            <label for="phone"><b>*</b>Celular</label>
                            <input type="phone" name="phone" id="phone">
                            <span class="error"></span>
                        </div>
                        <div class="item">
                            <label for="email"><b>*</b>Correo electronico</label>
                            <input type="email" name="email" id="email">
                            <span class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="item">
                            <label for="message"><b>*</b>Mensaje</label>
                            <textarea name="message" id="message"></textarea>
                            <span class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="item">
                            <button type="submit">
                                <span>Enviar</span>
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                </form>
            </div>
        </section>
        <section class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1881.2128984764415!2d-78.17065160036832!3d-2.456719673910712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cdf6ec4ec0ed79%3A0x32424d842480941f!2zU3Vjw7ph!5e0!3m2!1ses!2sec!4v1679166862534!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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