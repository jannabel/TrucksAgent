<?php

include("php/Trucks/getdata.php");
error_reporting(0);
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Billing-Table-with-Add-Row--Fixed-Header-Feature.css">
</head>

<body id="page-top">
    <div id="wrapper">
      
    <?php include('global/navbar.php'); ?>

                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Camiones</h3>
                    <div class="row mb-3">
                        <div class="col-lg-8" style="width: 1658px;">
                            <div class="row mb-3 d-none">
                                <div class="col">
                                    <div class="card textwhite bg-primary text-white shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card textwhite bg-success text-white shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Datos del Camion</p>
                                        </div>
                                        <div class="card-body">
                                            <form action="php/Trucks/create.php" method="POST">

                                             <input required class="form-control" type="number" hidden value="<?= $row["IdCamion"]?>" readonly="" name="IdCamion">
                                             
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="username" style="font-size: 17px;"><strong>Marca</strong></label><input value="<?= $row["Marca"]?>" required class="form-control" type="text" id="username" placeholder="Mercedes Benz" name="Marca"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="email" style="font-size: 17px;"><strong>Modelo</strong></label><input value="<?= $row["Modelo"]?>" required class="form-control" type="text" id="username-1" placeholder="Actros L" name="Modelo"></div>
                                                        </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="email" style="font-size: 17px;"><strong>Color</strong></label><input required value="<?= $row["Color"]?>" class="form-control" type="text" id="username" placeholder="Rojo" name="Color"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="last_name" style="font-size: 17px;"><strong>Comentario</strong></label><textarea required name="Comentario" class="form-control" rows="5"><?= $row["Comentario"]?></textarea></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="first_name" style="font-size: 17px;"><strong>Cantidad de Lavadoras</strong></label><input required class="form-control" type="number" value="<?= $row["CantLavadoras"]?>"  readonly="" name="CantLavadoras"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="last_name" style="font-size: 17px;"><strong>Valor de la Carga</strong></label><input value="<?= $row["ValorCarga"]?>" required class="form-control" type="number" value="0" readonly="" name="ValorCarga"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="last_name" style="font-size: 17px;"><strong>Peso total de la Carga</strong></label><input value="<?= $row["PesoCarga"]?>" required class="form-control" type="number" value="0" readonly="" name="PesoCarga"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3" style="padding-top: 25px;"><button class="btn btn-primary" type="submit" style="background: rgb(0,37,145);">Guardar Cambios</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('global/footer.php'); ?>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Billing-Table-with-Add-Row--Fixed-Header-Feature.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>