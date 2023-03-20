<!DOCTYPE html>
<html lang="<?= $proyect['lang'] ?>">

<head>
    <?php include('./view/component.panel/head.php') ?>
    <title>Planes</title>
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
                    <li class="breadcrumb-item active" aria-current="page">Planes</li>
                </ol>
            </nav>
            <div class="card shadow">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <b>Planes</b>
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
                                <th class="text-center text-md-left" scope="col">Icono</th>
                                <th class="d-none d-md-table-cell" scope="col">Velocidad</th>
                                <th class="d-none d-md-table-cell" scope="col">Precio</th>
                                <th class="text-center" scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="element-table-plan"></tbody>
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
                    <input type="hidden" name="plan_id" value="0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="element-modalformLabel">Formulario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- form | ini -->
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="validationServer01" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="validationServer01" placeholder="Basico, medio, avanzado" name="plan_name" required>
                                <div class="invalid-feedback">
                                    Escribe el nombre!
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label">Icono</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder='<i class="fa-solid fa-gauge"></i>' name="plan_icon" required>
                                <div class="invalid-feedback">
                                    Inserta un icono de fontawesome!
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="validationServer03" class="form-label">Limitacion de consumo</label>
                                <input type="text" class="form-control" id="validationServer03" placeholder="Ilimitado" name="plan_sharing_name" required>
                                <div class="invalid-feedback">
                                    Escribe la limitacion de consumo!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationServer03" class="form-label">Comparticion</label>
                                <input type="text" class="form-control" id="validationServer03" placeholder="Sin comparticion" name="plan_sharing_value" required>
                                <div class="invalid-feedback">
                                    Escribe el grado de comparticion!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationServer04" class="form-label">Precio</label>
                                <input type="number" class="form-control" id="validationServer04" placeholder="20, 25, 30, 40" name="plan_price_value" required>
                                <div class="invalid-feedback">
                                    Escriba el precio!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationServer05" class="form-label">Incluye IVA?</label>
                                <input type="hidden" class="form-control" id="validationServer05" value="false" name="plan_price_iva">
                                <div class="checkbox" id="checkboxiva"></div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationServer06" class="form-label">Velocidad</label>
                                <input type="text" class="form-control" id="validationServer06" placeholder="20 MEGAS" name="plan_speed_value" required>
                                <div class="invalid-feedback">
                                    Escriba la velocidad!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationServer07" class="form-label">Numero de dispositivos</label>
                                <input type="number" class="form-control" id="validationServer07" placeholder="20" name="plan_speed_devices" required>
                                <div class="invalid-feedback">
                                    Especifique el numero de dispositivos!
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
    <script src="<?= $proyect['url'] ?>control/script.panel/plans.js"></script>
</foot>

</html>