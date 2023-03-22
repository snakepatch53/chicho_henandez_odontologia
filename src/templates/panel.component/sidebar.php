<div class="sidebar bg-dark">
    <button class="burguer-button" onclick="handleBurgerSidebar()">
        <i class="fa-solid fa-bars text-light"></i>
    </button>
    <div class="sidebar-header">
        <h4 class="text-truncate p-2">Dr. Ayora</h4>
    </div>
    <div class="logo"><img src="<?= $DATA['http_domain'] ?>public/img/logo1.png?last=<?= $DATA['info']['info_last'] ?>" alt="Logo"></div>
    <!-- List | ini -->
    <ul class="list-group rounded-0 p-2 border-0">
        <a href="<?= $DATA['http_domain'] ?>panel/" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "home") ? "shadow  active" : "" ?>">
            <i class="fa-solid fa-house"></i>
            <span class="ms-2">Inicio</span>
        </a>
        <a href="<?= $DATA['http_domain'] ?>panel/info" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "info") ? "shadow  active" : "" ?>">
            <i class="fa-solid fa-info-circle"></i>
            <span class="ms-2">Informacion</span>
        </a>
    </ul>
    <!-- List | end -->
</div>