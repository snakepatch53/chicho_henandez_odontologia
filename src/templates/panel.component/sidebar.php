<div class="sidebar bg-dark">
    <button class="burguer-button" onclick="handleBurgerSidebar()">
        <i class="fa-solid fa-bars text-light"></i>
    </button>
    <div class="sidebar-header">
        <h4 class="text-truncate p-2">MORONANET</h4>
    </div>
    <img class="logo" src="<?= $DATA['http_domain'] ?>public/img/logo.png" alt="Logo">
    <!-- List | ini -->
    <ul class="list-group rounded-0 p-2 border-0">
        <a href="<?= $DATA['http_domain'] ?>panel/home" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "home") ? "shadow  active" : "" ?>">
            <i class="fa-solid fa-house"></i>
            <span class="ms-2">Inicio</span>
        </a>
        <a href="<?= $DATA['http_domain'] ?>panel/users" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "users") ? "shadow active" : "" ?>">
            <i class="fa-solid fa-user"></i>
            <span class="ms-2">Usuarios</span>
        </a>
        <a href="<?= $DATA['http_domain'] ?>panel/slider" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "slider") ? "shadow active" : "" ?>">
            <i class="fa-solid fa-photo-film"></i>
            <span class="ms-2">Slider</span>
        </a>
        <a href="<?= $DATA['http_domain'] ?>panel/plans" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "plans") ? "shadow active" : "" ?>">
            <i class="fa-solid fa-gauge"></i>
            <span class="ms-2">Planes</span>
        </a>
        <a href="<?= $DATA['http_domain'] ?>panel/links" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "links") ? "shadow active" : "" ?>">
            <i class="fa-solid fa-link"></i>
            <span class="ms-2">Links</span>
        </a>
    </ul>
    <!-- List | end -->

</div>