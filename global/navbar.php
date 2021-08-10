<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0"
        style="background: linear-gradient(rgb(0,37,145) 27%, rgb(0,133,255) 88%);">
        <div class="container-fluid d-flex flex-column p-0"><a
                class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon rotate-n-15"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                        height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-truck"
                        style="font-size: 36px;">
                        <path fill-rule="evenodd"
                            d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z">
                        </path>
                    </svg></div>
                <div class="sidebar-brand-text mx-3"><span style="font-weight: bold;">trucksagent</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i><span>&nbsp;Dashboard</span></a></li>
                <li class="nav-item"><a class="nav-link" href="userstable.php"><i class="fas fa-user"></i><span>&nbsp;Usuarios</span></a></li>
                <li class="nav-item"><a class="nav-link" href="tabletrucks.php"><i  class="fa fa-truck"></i><span>&nbsp;Camiones</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0"  id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3"
                        id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text"
                                placeholder="Buscar..."><button class="btn btn-primary py-0" type="button"
                                style="background: rgb(0,37,145);"><i class="fas fa-search"></i></button></div>
                    </form>
                    <ul class="navbar-nav flex-nowrap ms-auto">
                        <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link"
                                aria-expanded="false" data-bs-toggle="dropdown" href="#"><i
                                    class="fas fa-search"></i></a>
                            <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="me-auto navbar-search w-100">
                                    <div class="input-group"><input class="bg-light form-control border-0 small"
                                            type="text" placeholder="Search for ...">
                                        <div class="input-group-append"><button class="btn btn-primary py-0"
                                                type="button"><i class="fas fa-search"></i></button></div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                    aria-expanded="false" data-bs-toggle="dropdown" href="#"><span
                                        class="badge bg-danger badge-counter">3+</span><i
                                        class="fas fa-bell fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                    <h6 class="dropdown-header" style="background: #0085ff;">alerts center</h6><a
                                        class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-primary icon-circle"><i
                                                    class="fas fa-file-alt text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 12, 2019</span>
                                            <p>A new monthly report is ready to download!</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-success icon-circle"><i
                                                    class="fas fa-donate text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 7, 2019</span>
                                            <p>$290.29 has been deposited into your account!</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-warning icon-circle"><i
                                                    class="fas fa-exclamation-triangle text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 2, 2019</span>
                                            <p>Spending Alert: We've noticed unusually high spending for your
                                                account.</p>
                                        </div>
                                    </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                        Alerts</a>
                                </div>
                            </div>
                        </li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                    aria-expanded="false" data-bs-toggle="dropdown" href="#"><span
                                        class="d-none d-lg-inline me-2 text-gray-600 small">Jannabel
                                        Ramos</span><img class="border rounded-circle img-profile"
                                        src="assets/img/avatars/avatar1.jpeg"></a>
                                <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a
                                        class="dropdown-item" href="#"><i
                                            class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Perfil</a><a
                                        class="dropdown-item" href="#"><i
                                            class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Ajustes</a><a
                                        class="dropdown-item" href="#"><i
                                            class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity
                                        log</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                            class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Cerrar
                                        Sesión</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>