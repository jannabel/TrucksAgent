<?php
include("php/Trucks/getdata.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>truckreport</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="card shadow-none mb-5" style="opacity: 1;transform: translate(0px);background: rgb(255,255,255);border-style: none;height:300px;">
        <div class="card-header shadow-none py-3">
            <h1 style="padding-top: 12px;padding-left: 0px;font-size: 23px;">TRUCKSAGENT</h1>
        </div>
        <div class="card-body shadow-none" style="padding-bottom:1 px;">
            <div class="row">
                <div class="col">
                    <div class="card shadow-none mb-3">
                        <div class="card-header py-3">
                            <p class="m-0 fw-bold" style="color: rgb(33, 37, 41);font-size: 19px;">Datos del Camión</p>
                        </div>
                        <div class="card-body shadow-none">
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="username"><strong>No.&nbsp;</strong><br></label>
                                            <div></div><input class="form-control" value="<?= $row["IdCamion"]?>" type="text" id="username"  name="IdCamion" style="border-color: rgb(255,255,255);background: rgb(232,232,232);" readonly="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="email"><strong>Modelo</strong></label><input  class="form-control" type="text" id="username" name="Modelo" value="<?= $row["Modelo"]?>" style="border-color: rgb(255,255,255);background: rgb(232,232,232);" readonly=""></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="username"><strong>Marca</strong><br></label><input  value="<?= $row["Marca"]?>" class="form-control" type="text" id="username-1" name="Marca" style="border-color: rgb(255,255,255);background: rgb(232,232,232);" readonly=""></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="email"><strong>Color</strong></label><input value="<?= $row["Color"]?>" class="form-control" type="text" id="username-2" name="IdCamion" style="border-color: rgb(255,255,255);background: rgb(232,232,232);" readonly=""></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>Comentario</strong></label><textarea class="form-control" rows="5" style="background: rgb(232,232,232);" readonly=""><?= $row["Comentario"]?></textarea></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>Cantidad de Lavadoras</strong></label><input class="form-control" type="text" id="first_name" name="CantLavadoras" value="<?= $row["CantLavadoras"]?>" style="background: rgb(232,232,232);" readonly=""></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="last_name"><strong>Valor de la Carga</strong></label><input class="form-control" type="text" id="last_name" name="ValorCarga" value="<?= $row["ValorCarga"]?>" style="background: rgb(232,232,232);" readonly=""></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="last_name"><strong>Peso de la Carga</strong></label><input class="form-control" type="text" id="last_name" name="PesoCarga"  value="<?= $row["PesoCarga"]?>"  style="background: rgb(232,232,232);" readonly=""></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div  style="padding-top: 12px;" class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card shadow-none">
                        <div class="card-header py-2">
                            <p class="lead m-0" style="letter-spacing: 1px;font-size: 18px;font-weight: bold;"><strong>Lavadoras</strong></p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mb-0 pt-3 pe-2">
                                <table class="table table-striped table-sm my-0 mydatatable">
                                    <thead>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Valor</th>
                                            <th>Peso</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($rowmachine as $rowm ):?>
                                        <tr>
                                            <td><?= $rowm["Codigo"];?></td>
                                            <td><?= $rowm["Marca"];?></td>
                                            <td><?= $rowm["Modelo"];?></td>
                                            <td><?= $rowm["Valor"];?></td>
                                            <td><?= $rowm["Peso"];?></td>
                                        </tr>
                                        <?php endforeach?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>    <br>    <br>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script src="assets/js/Bootstrap-DataTables.js"></script>
    <script src="assets/js/DataTable---Fully-BSS-Editable.js"></script>
</body>

</html>