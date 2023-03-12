<section>
    <divc class="container">
        <span>hola/xd</span>
        <ul>
            <a href="tel:">
                <i class="fas fa-mobile-alt"></i>
                <span></span>
            </a>
            <div class="separador"></div>
            <a href="mailto:">
                <i class="far fa-envelope"></i>
                <span></span>
            </a>
        </ul>
    </divc>
</section>
<menu>
    <nav>
        <a href="<?= $DATA['http_domain'] ?>inicio" class="logo">
            <img src="<?= $DATA['http_domain'] ?>public/img/logo2.png" alt="Logo Morona Net">
        </a>
        <ul class="supp">
            <li>
                <a href="<?= $DATA['http_domain'] ?>inicio" class="">
                    <i class="fas fa-home"></i>
                    <span>Inicio</span>
                </a>
            </li>
            <li>
                <a href="<?= $DATA['http_domain'] ?>servicios" class="">
                    <i class="fas fa-gift"></i>
                    <span>Servicios</span>
                    <i class="fas fa-sort-down"></i>
                </a>
                <ul class="scroll-style">
                    <li>
                        <a href="<?= $DATA['http_domain'] ?>servicios#">
                            <span></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="">
                    <i class="fas fa-address-card"></i>
                    <span>Nosotros</span>
                    <i class="fas fa-sort-down"></i>
                </a>
                <ul class="scroll-style">
                    <li>
                        <a href="<?= $DATA['http_domain'] ?>nosotros">
                            <i class="fas fa-address-card"></i>
                            <span>Acerca de nosotros</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="">
                    <i class="fas fa-users"></i>
                    <span>Clientes</span>
                    <i class="fas fa-sort-down"></i>
                </a>
                <ul class="scroll-style">
                    <li>
                        <a href="<?= $DATA['http_domain'] ?>clientes">
                            <i class="fas fa-users"></i>
                            <span>Atencion al cliente</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?= $DATA['http_domain'] ?>preguntas" class="">
                    <i class="fas fa-question"></i>
                    <span>Preguntas</span>
                </a>
            </li>
            <a class="button" href="<?= $DATA['http_domain'] ?>contactos">
                <i class="fas fa-unlock-alt"></i>
                <span>Contáctanos</span>
            </a>
        </ul>
        <button class="burguer-menu" id="burguer-menu">
            <i class="fas fa-bars"></i>
        </button>
    </nav>
</menu>