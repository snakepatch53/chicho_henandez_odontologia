<!DOCTYPE html>
<html lang="<?= $proyect['lang'] ?>">

<head>
    <?php include('./view/component.panel/head.php') ?>
    <title>Usuarios</title>
</head>

<body>
    <?php include('./view/component.panel/header.php') ?>
    <?php include('./view/component.panel/sidebar.php') ?>
    <main>
        <!-- CONTENT PAGE | INI -->
        <div class="pt-4 px-md-5 px-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $proyect['url'] ?>home">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
                </ol>
            </nav>
            <div class="card shadow">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <b>Usuarios</b>
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
                                <th class="text-center text-md-left" scope="col">User</th>
                                <th class="text-center" scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="element-table-user"></tbody>
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
                    <input type="hidden" name="user_id" value="0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="element-modalformLabel">Formulario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- form | ini -->
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label for="validationServer01" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="validationServer01" placeholder="Ejm: Luis.." name="user_name" required>
                                <div class="invalid-feedback">
                                    Escribe el nombre!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationServer02" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="validationServer02" placeholder="Ejm: cls123.." name="user_user" required>
                                <div class="invalid-feedback">
                                    Escribe el usuario!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationServer03" class="form-label">Contraseña</label>
                                <input type="text" class="form-control" id="validationServer03" placeholder="Ejm: ********" name="user_pass" required>
                                <div class="invalid-feedback">
                                    Escribe la contraseña!
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
    <script src="<?= $proyect['url'] ?>control/script.panel/users.js"></script>
</foot>

</html>