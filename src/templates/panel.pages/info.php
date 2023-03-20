<!DOCTYPE html>
<html lang="<?= $proyect['lang'] ?>">

<head>
    <?php include('./view/component.panel/head.php') ?>
    <title>Informacion</title>
</head>

<body>
    <?php include('./view/component.panel/header.php') ?>
    <?php include('./view/component.panel/sidebar.php') ?>
    <main class="animate__animated animate__fadeIn">
        <div class="pt-4 px-md-5 px-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $proyect['url'] ?>home">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Informacion</li>
                </ol>
            </nav>
            <div class="card shadow">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <b>Informacion</b>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Form ini -->
                    <form class="needs-validation p-4" id="element-form" onsubmit="return false" editMode="false" novalidate>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <h5 class="text-center">General</h5>
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer01" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="validationServer01" name="info_name" required>
                                <div class="invalid-feedback">
                                    Escribe el nombre!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer02" class="form-label">Logo</label>
                                <input type="file" class="form-control" id="validationServer02" name="info_logo">
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer03" class="form-label">Icono</label>
                                <input type="file" class="form-control" id="validationServer03" name="info_icon">
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer04" class="form-label">Pais</label>
                                <input type="text" class="form-control" id="validationServer04" name="info_country" required>
                                <div class="invalid-feedback">
                                    Escribe el pais!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer05" class="form-label">Provincia</label>
                                <input type="text" class="form-control" id="validationServer05" name="info_province" required>
                                <div class="invalid-feedback">
                                    Escribe la provincia!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer06" class="form-label">Ciudad</label>
                                <input type="text" class="form-control" id="validationServer06" name="info_city" required>
                                <div class="invalid-feedback">
                                    Escribe la ciudad!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer07" class="form-label">Direccion</label>
                                <input type="text" class="form-control" id="validationServer07" name="info_address" required>
                                <div class="invalid-feedback">
                                    Escribe la direccion!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer08" class="form-label">Mapa</label>
                                <input type="text" class="form-control" id="validationServer08" name="info_location" required>
                                <div class="invalid-feedback">
                                    Inserta un mapa!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer09" class="form-label">Telefono</label>
                                <input type="text" class="form-control" id="validationServer09" name="info_phone" required>
                                <div class="invalid-feedback">
                                    Escribe el telefono!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer10" class="form-label">Celular</label>
                                <input type="text" class="form-control" id="validationServer10" name="info_cellphone" required>
                                <div class="invalid-feedback">
                                    Escribe el celular!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer11" class="form-label">Correo electronico</label>
                                <input type="text" class="form-control" id="validationServer11" name="info_email" required>
                                <div class="invalid-feedback">
                                    Escribe el correo electronico!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer12" class="form-label">DESC</label>
                                <textarea class="form-control" id="validationServer12" name="info_desc" required></textarea>
                                <div class="invalid-feedback">
                                    Escribe el desc!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer13" class="form-label">MISION</label>
                                <textarea class="form-control" id="validationServer13" name="info_mision" required></textarea>
                                <div class="invalid-feedback">
                                    Escribe el mision!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer14" class="form-label">VISION</label>
                                <textarea class="form-control" id="validationServer14" name="info_vision" required></textarea>
                                <div class="invalid-feedback">
                                    Escribe el vision!
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h5 class="text-center">Slider</h5>
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer15" class="form-label">Titulo</label>
                                <input type="text" class="form-control" id="validationServer15" name="info_slider_title" required>
                                <div class="invalid-feedback">
                                    Escribe el titulo del slider!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer16" class="form-label">Descripcion</label>
                                <textarea class="form-control" id="validationServer16" name="info_slider_desc" required></textarea>
                                <div class="invalid-feedback">
                                    Escribe una descripcion para el slider!
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-5" id="btn-submit">Guardar</button>
                        </div>
                    </form>
                    <!-- Form end -->
                </div>
            </div>
        </div>
    </main>
</body>
<foot>
    <?php include('./view/component.panel/foot.php') ?>
    <script src="<?= $proyect['url'] ?>control/script.panel/info.js"></script>
</foot>

</html>