<!DOCTYPE html>
<html lang="<?= $proyect['lang'] ?>">

<head>
    <?php include('./view/component.panel/head.php') ?>
    <title>Links</title>
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
                    <li class="breadcrumb-item active" aria-current="page">Links</li>
                </ol>
            </nav>
            <div class="card shadow">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <b>Links</b>
                        <button class="btn btn-outline-success" onclick="handleFunction.new()">
                            <i class="fa-solid fa-plus"></i>
                            <span>Crear nuevo</span>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover border">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th class="d-none d-md-table-cell" scope="col">#</th>
                                <th class="text-center text-md-left" scope="col">Nombre</th>
                                <th class="text-center" scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="element-table-link"></tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- CONTENT PAGE | END -->

        <!-- MODAL | INI -->
        <!-- gift | ini -->

        <!-- gift | end -->

        <!-- form | ini -->
        <div class="modal fade" id="element-modalform" tabindex="-1" aria-labelledby="element-modalformLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form class="modal-content needs-validation" id="element-lotteryform" onsubmit="return false" novalidate>
                    <input type="hidden" name="link_id" value="0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="element-modalformLabel">Formulario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- form | ini -->
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label for="validationServer01" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="validationServer01" placeholder="Arcotel, etc.." name="link_name" required>
                                <div class="invalid-feedback">
                                    Escribe el nombre del link!
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="validationServer02" class="form-label">URL</label>
                                <input type="text" class="form-control" id="validationServer02" placeholder="https://www.." name="link_ref" required>
                                <div class="invalid-feedback">
                                    Inserta un link!
                                </div>
                            </div>
                        </div>
                        <!-- form | end -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- form | end -->

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
    <script src="<?= $proyect['url'] ?>control/script.panel/links.js"></script>
</foot>

</html>