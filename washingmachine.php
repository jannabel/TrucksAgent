<?php
include("php/Trucks/getdata.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>trucks</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Billing-Table-with-Add-Row--Fixed-Header-Feature.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>
<div id="wrapper">

<?php include('global/navbar.php');?>


            <div class="container-fluid">
                <h3 class="text-dark mb-4">Lavadoras</h3>
                <div class="card shadow mb-3">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 fw-bold">Datos del Camion</p>
                    </div>
                    <div class="card-body">
                        <div class="mb-3" style="padding-top: 4px;padding-bottom: 10px;text-align: right;"><button
                                class="btn btn-primary" type="submit" style="background: rgb(0,37,145);"><i
                                    class="fa fa-print"></i>&nbsp; Generar Reporte</button></div>
                        <form>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="username"
                                            style="font-size: 17px;"><strong>Marca</strong></label><input
                                            class="form-control" value="<?= $row["Marca"]?>" type="text"
                                            id="username-2" name="Marca" readonly=""></div>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="email"
                                            style="font-size: 17px;"><strong>Modelo</strong></label><input
                                            class="form-control" value="<?= $row["Modelo"]?>" type="text"
                                            id="username-1" name="Modelo" readonly=""></div>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="email"
                                            style="font-size: 17px;"><strong>Color</strong></label><input
                                            class="form-control" value="<?= $row["Color"]?>" type="text"
                                            id="username-3" name="Color" readonly=""></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="last_name"  style="font-size: 17px;"><strong>Comentario</strong></label>
                                        <textarea class="form-control" rows="5" readonly=""><?= $row["Comentario"]?></textarea></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="first_name"
                                            style="font-size: 17px;"><strong>Cantidad de
                                                Lavadoras</strong></label><input value="<?= $row["CantLavadoras"]?>"
                                            class="form-control" type="number" readonly="" name="CantLavadoras">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="last_name"
                                            style="font-size: 17px;"><strong>Valor de la
                                                Carga</strong></label><input value="<?= $row["ValorCarga"]?>"
                                            class="form-control" type="number" readonly="" name="ValorCarga"></div>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="last_name"
                                            style="font-size: 17px;"><strong>Peso total de la
                                                Carga</strong></label><input value="<?= $row["PesoCarga"]?>"
                                            class="form-control" type="number" readonly="" name="PesoCarga"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="card shadow-sm mb-2 db-graph">
                            <div class="card-header py-3" style="background: rgb(248,249,252);">
                                <p class="text-primary m-0 fw-bold" style="color: rgb(0,133,255);">Gestionar
                                    Lavadoras</p>
                            </div>
                            <div class="card-body"
                                style="background: rgb(255,255,255);border-color: rgb(133,135,150);">
                                <form action="php/WashingMachine/create.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-9 col-xl-9" style="width: auto;">
                                            <div class="box-bg"
                                                style="height: 357px;background: rgba(255,255,255,0);width: auto;border-color: rgba(133,135,150,0.21);border-top-color: rgb(133,150,135);">
                                                <div class="row">
                                                    <div class="col" style="width: 50.391px;"><button
                                                            onclick="AddRowMachine();"
                                                            class="btn btn-primary btn-sm" type="button"
                                                            style="width: 62px;height: 33px;color: #ffffff;background: rgb(0,37,145);font-size: 16px;text-align: center;"><i
                                                                class="fa fa-plus"></i>&nbsp;</button></div>
                                                </div>
                                                <div class="table-responsive tbl-wfx mt-1 kot-table"
                                                    style="padding-top: 30px;border-color: rgba(255,255,255,0);">
                                                    <table id="wmtable" class="table table-sm">
                                                        <thead class="text-dark font-md">
                                                            <tr class="text-dark-blue">
                                                                <th style="width: 188px;text-align: center;"><strong>Código</strong><br></th>
                                                                <th class="w-10x" style="text-align: center;"><strong>Marca</strong></th>
                                                                <th class="w-10x" style="text-align: center;"><strong>Modelo</strong></th>
                                                                <th class="w-10x" style="text-align: center;"><strong>Valor</strong></th>
                                                                <th class="w-10x" style="text-align: center;"><strong>Peso en Lb</strong></th>
                                                                <th class="text-center w-10x">Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <input hidden value="<?= $row["IdCamion"]; ?>" name="IdCamion"  class="form-control form-control-sm font-sm" type="text" readonly="" style="height: 38px;">
                                                     
                                                        <tbody class="h-15x" style="height: 200px;">
                                                        <tr> <td ></td> </tr>
                                                            <?php foreach($rowmachine as $rowm ):?>
                                                            <tr>
                                                                <td style="width: 188px;">
                                                                    <div class="mb-1 form-group"><input value="<?= $rowm["Codigo"];?>" name="" class="form-control form-control-sm font-sm" type="text" readonly="" style="height: 38px;"></div>
                                                                </td>
                                                                <td class="w-10x">
                                                                    <div class="mb-1 form-group"><input value="<?=$rowm["Marca"];?>" readonly name="" class="form-control form-control-sm font-sm"  type="text" style="height: 38px;"></div>
                                                                </td>
                                                                <td class="w-10x">
                                                                    <div class="mb-1 form-group"><input readonly value="<?=$rowm["Modelo"];?>" name="" class="form-control form-control-sm font-sm"  type="text" style="height: 38px;"></div>
                                                                </td>
                                                                <td class="w-10x">
                                                                    <div class="mb-1 form-group"><input readonly value="<?=$rowm["Valor"];?>" name=""   class="form-control" type="number" style="height: 38px;min-height: 28px;">
                                                                    </div>
                                                                </td>
                                                                <td class="w-10x"><input class="form-control" readonly value="<?=$rowm["Peso"];?>" name="" type="number" style="height: 38px;min-height: 28px;"></td>
                                                                <td class="w-10x"><button onclick='Delete("<?=$rowm["Codigo"];?>", this);' class="btn btn-danger btn-sm d-block delete-row btn-xs w-100"  type="button" style="width: 112px;height: 38px;"><i class="fa fa-trash" style="font-size: 16px;"></i></button>
                                                                </td>
                                                            </tr>

                                                            <?php endforeach?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col" style="width: auto;padding-top: 26px;">
                                        <button class="btn btn-primary" type="submit"  style="width: 112px;height: 41px;color: #ffffff;background: rgb(0,132,254);"><i class="fa fa-save"></i>&nbsp;Guardar</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('global/footer.php'); ?>
        
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

    <script>
        function AddRowMachine() {
            function codegenerate() {
                code = "LAV" + Math.floor(Math.random() * ((50000 + 1) - 10000) + 10000);
                var input = document.getElementById("in");
                input.value = code;
                input.id = code;
            }


            document.getElementById("wmtable").insertRow(-1).innerHTML =
                '<tr><td style="width: 188px;"><div class="mb-1 form-group"><input id="in"  name="Codigo[]" value="CODIGO" class="form-control form-control-sm font-sm" type="text" readonly="" style="height: 38px;"></div></td><td class="w-10x"><div class="mb-1 form-group"><input  name="Marca[]" required  class="form-control form-control-sm font-sm" type="text" style="height: 38px;"></div></td><td class="w-10x"><div class="mb-1 form-group"><input  name="Modelo[]" required  class="form-control form-control-sm font-sm" type="text" style="height: 38px;"></div></td><td class="w-10x"><div class="mb-1 form-group"><input  name="Valor[]"  required class="form-control" type="number" style="height: 38px;min-height: 28px;"></div></td><td class="w-10x"><input class="form-control" required  name="Peso[]"  type="number" style="height: 38px;min-height: 28px;"></td><td class="w-10x"><button class="btn btn-danger btn-sm d-block delete-row btn-xs w-100" onclick="DeleteRowMachine(this);" type="button" style="width: 112px;height: 38px;"><i class="fa fa-trash" style="font-size: 16px;"></i></button></td><tr>';
            codegenerate();
        }

        function DeleteRowMachine(btn) {
            var row = btn.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }


        function Delete(ID, btn) {
        
            $.ajax({
                type: "POST",
                url: "php/WashingMachine/delete.php",
                cache: false,
                data: {
                    ID
                },
                error: function () {
                    alert("ERROR");
                },
                success: function (response) {
                   
                }
            });
            DeleteRowMachine(btn);

        }
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Billing-Table-with-Add-Row--Fixed-Header-Feature.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>