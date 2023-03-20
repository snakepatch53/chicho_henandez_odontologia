<!DOCTYPE html>
<html lang="<?= $proyect['lang'] ?>">

<head>
    <?php include('./view/component.panel/head.php') ?>
    <title>Slider</title>
</head>

<body>
    <?php include('./view/component.panel/header.php') ?>
    <?php include('./view/component.panel/sidebar.php') ?>
    <main class="animate__animated animate__fadeIn">
        <!-- CONTENT PAGE | INI -->
        <div class="pt-4 px-md-5 px-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $proyect['url'] ?>home">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Slider</li>
                </ol>
            </nav>
            <div class="card shadow">
                <div class="card-header">
                    <form class="d-flex justify-content-between align-items-center" id="element-form">
                        <b>Slider</b>
                        <input type="hidden" name="slider_id">
                        <input type="file" name="slider_img" class="input-file" placeholder="+ Agregar">
                    </form>
                </div>
                <div class="card-body">
                    <div class="row" id="element-gallery"></div>
                </div>
            </div>
        </div>
        <!-- CONTENT PAGE | END -->

        <!-- MODAL | INI -->
        <!-- confirm | ini -->
        <div class="modal fade" id="element-modalconfirm" tabindex="-1" aria-labelledby="element-modalconfirmLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="element-modalconfirmLabel">Eliminar registro</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Estas seguro de eliminar este registro?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" onclick="crudFunction.delete()">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- confirm | end -->
        <!-- MODAL | END -->
    </main>
</body>
<foot>
    <?php include('./view/component.panel/foot.php') ?>
    <script src="<?= $proyect['url'] ?>control/script.panel/slider.js"></script>
</foot>

</html>