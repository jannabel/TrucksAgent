<?php 
require_once('php/Trucks/read.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
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
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Lista de Camiones</p>
                        </div>
                        <div class="card-body" style="background: #ffffff;border-color: rgb(133, 135, 150);border-top-color: rgb(133,135,150);">
                            <div class="row">
                                <div class="col-md-6 text-nowrap"><a class="btn btn-primary btn-sm" role="button" style="width: 62px;height: 33px;color: #ffffff;background: rgb(0,37,145);font-size: 16px;text-align: center;" href="formtrucks.php"><i style="margin-top: 6px;" class="fa fa-plus"></i>&nbsp;</a></div>
                              
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Color</th>
                                            <th>Valor de la Carga</th>
                                            <th>Peso Total de la Carga</th>
                                            <th>Cantidad de Lavadoras</th>
                                            <th style="width: 50px;">Acciones</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr></tr>
                                        <?php 
                                        foreach($dir as $row)
                                        { 
                                        echo '
                                        <tr>
                                            <td>'.$row["Marca"].'</td>
                                            <td>'.$row["Modelo"].'</td>
                                            <td>'.$row["Color"].'</td>
                                            <td>'.$row["ValorCarga"].'</td>
                                            <td>'.$row["PesoCarga"].'</td>
                                            <td>'.$row["CantLavadoras"].'</td>
                                            <td class="w-10x"><a href="washingmachine.php?id='.$row["IdCamion"].'" class="btn btn-primary btn-sm d-block delete-row btn-xs w-100" type="button" style="width: 112px;height: 28px;background: rgb(0,133,255);border-color: rgb(0,133,255);"><i class="fas fa-eye" style="margin-top:3.5px;font-size: 16px;"></i></a></td>
                                            <td class="w-10x"><a href="formtrucks.php?id='.$row["IdCamion"].'" class="btn btn-primary btn-sm d-block delete-row btn-xs w-100" type="button" style="width: 112px;height: 28px;background: rgb(0,14,55);border-color: rgb(0,14,55);border-top-color: rgb(255,255,255);"><i class="fa fa-edit" style="margin-top:3.5px;font-size: 16px;"></i></a></td>
                                            <td class="w-10x"><a href="php/Trucks/delete.php?id='.$row["IdCamion"].'" class="btn btn-danger btn-sm d-block delete-row btn-xs w-100" type="button" style="width: 112px;height: 28px;"><i class="fa fa-trash" style="margin-top:3.5px;font-size: 16px;"></i></a></td>
                                        </tr>';
                                    };?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>Marca</strong></td>
                                            <td><strong>Modelo</strong></td>
                                            <td><strong>Color</strong></td>
                                            <td><strong>Valor de la Carga</strong></td>
                                            <td><strong>Peso total de la Carga</strong></td>
                                            <td><strong>Cantidad de Lavadoras</strong></td>
                                            <td><strong>Acciones</strong></td>
                                            <td><strong></strong></td>
                                            <td><strong></strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Visualizando 1 a 10 de 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
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