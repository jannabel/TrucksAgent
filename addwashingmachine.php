<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>trucks</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Billing-Table-with-Add-Row--Fixed-Header-Feature.css">
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: linear-gradient(rgb(0,37,145) 27%, rgb(0,133,255) 88%);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-truck" style="font-size: 36px;">
                            <path fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path>
                        </svg></div>
                    <div class="sidebar-brand-text mx-3"><span style="font-weight: bold;">trucksagent</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="index.html"><i class="fas fa-tachometer-alt"></i><span>&nbsp;Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="users.html"><i class="fas fa-user"></i><span>&nbsp;Usuarios</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="table.html"><i class="fa fa-truck"></i><span>&nbsp;Camiones</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Buscar..."><button class="btn btn-primary py-0" type="button" style="background: rgb(0,37,145);"><i class="fas fa-search"></i></button></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header" style="background: #0085ff;">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Jannabel Ramos</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Perfil</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Ajustes</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Cerrar Sesión</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Lavadoras</h3>
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Datos del Camion</p>
                        </div>
                        <div class="card-body">
                            <div class="mb-3" style="padding-top: 4px;padding-bottom: 10px;text-align: right;"><button class="btn btn-primary" type="submit" style="background: rgb(0,37,145);"><i class="fa fa-print"></i>&nbsp; Generar Reporte</button></div>
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="username" style="font-size: 17px;"><strong>Marca</strong></label><input class="form-control" type="text" id="username-2" name="Marca" readonly=""></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="email" style="font-size: 17px;"><strong>Modelo</strong></label><input class="form-control" type="text" id="username-1" name="Modelo" readonly=""></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="email" style="font-size: 17px;"><strong>Color</strong></label><input class="form-control" type="text" id="username-3" name="Color" readonly=""></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="last_name" style="font-size: 17px;"><strong>Comentario</strong></label><textarea class="form-control" rows="5" readonly=""></textarea></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="first_name" style="font-size: 17px;"><strong>Cantidad de Lavadoras</strong></label><input class="form-control" type="number" readonly="" name="CantLavadoras"></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="last_name" style="font-size: 17px;"><strong>Valor de la Carga</strong></label><input class="form-control" type="number" readonly="" name="ValorCarga"></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="last_name" style="font-size: 17px;"><strong>Peso total de la Carga</strong></label><input class="form-control" type="number" readonly="" name="PesoCarga"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <div class="card shadow-sm mb-2 db-graph">
                                <div class="card-header py-3" style="background: rgb(248,249,252);">
                                    <p class="text-primary m-0 fw-bold" style="color: rgb(0,133,255);">Gestionar Lavadoras</p>
                                </div>
                                <div class="card-body" style="background: rgb(255,255,255);border-color: rgb(133,135,150);">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-9 col-xl-9" style="width: auto;">
                                                <div class="box-bg" style="height: 357px;background: rgba(255,255,255,0);width: auto;border-color: rgba(133,135,150,0.21);border-top-color: rgb(133,150,135);">
                                                    <div class="row">
                                                        <div class="col" style="width: 50.391px;"><button class="btn btn-primary btn-sm" type="button" style="width: 62px;height: 33px;color: #ffffff;background: rgb(0,37,145);font-size: 16px;text-align: center;"><i class="fa fa-plus"></i>&nbsp;</button></div>
                                                    </div>
                                                    <div class="table-responsive tbl-wfx mt-1 kot-table" style="padding-top: 30px;border-color: rgba(255,255,255,0);">
                                                        <table class="table table-sm">
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
                                                            <tbody class="h-15x" style="height: 200px;">
                                                                <tr>
                                                                    <td style="width: 188px;">
                                                                        <div class="mb-1 form-group"><input class="form-control form-control-sm font-sm" type="text" readonly="" style="height: 38px;"></div>
                                                                    </td>
                                                                    <td class="w-10x">
                                                                        <div class="mb-1 form-group"><input class="form-control form-control-sm font-sm" type="text" style="height: 38px;"></div>
                                                                    </td>
                                                                    <td class="w-10x">
                                                                        <div class="mb-1 form-group"><input class="form-control form-control-sm font-sm" type="text" style="height: 38px;"></div>
                                                                    </td>
                                                                    <td class="w-10x">
                                                                        <div class="mb-1 form-group"><input class="form-control" type="number" style="height: 38px;min-height: 28px;"></div>
                                                                    </td>
                                                                    <td class="w-10x"><input class="form-control" type="number" style="height: 38px;min-height: 28px;"></td>
                                                                    <td class="w-10x"><button class="btn btn-danger btn-sm d-block delete-row btn-xs w-100" type="button" style="width: 112px;height: 38px;"><i class="fa fa-trash" style="font-size: 16px;"></i></button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="col" style="width: auto;padding-top: 26px;"><button class="btn btn-primary" type="button" style="width: 112px;height: 41px;color: #ffffff;background: rgb(0,132,254);"><i class="fa fa-save"></i>&nbsp;Guardar</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © trucksagent 2021</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Billing-Table-with-Add-Row--Fixed-Header-Feature.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>