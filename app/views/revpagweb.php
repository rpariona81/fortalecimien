<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="<?= base_url('dist/img/icons/icon-48x48.png') ?>" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

    <title>Blank Page | AdminKit Demo</title>

    <link rel="stylesheet" href="<?= base_url('dist/datatables/datatables.min.css') ?>" />
    <!--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css" />-->

    <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />-->

    <link href="<?= base_url('dist/css/app.css') ?>" rel="stylesheet">
    <link href="<?= base_url('dist/css/light.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="<?= base_url('dist/font-awesome/4.7.0/css/font-awesome.min.css') ?>" rel="stylesheet">

</head>

<!--<body>-->

<body data-theme="colored" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">

    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">Optimización BD</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="index.html">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-profile.html">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-sign-in.html">
                            <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-sign-up.html">
                            <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign
                                Up</span>
                        </a>
                    </li>

                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="pages-blank.html">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Tools & Components
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-buttons.html">
                            <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-forms.html">
                            <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-cards.html">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="datatable.html">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Datatable</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-typography.html">
                            <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="icons-feather.html">
                            <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Plugins & Addons
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="charts-chartjs.html">
                            <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="maps-google.html">
                            <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                        </a>
                    </li>
                </ul>

            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator">4</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    4 New Notifications
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-danger" data-feather="alert-circle"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Update completed</div>
                                                <div class="text-muted small mt-1">Restart server 12 to complete the
                                                    update.</div>
                                                <div class="text-muted small mt-1">30m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                    hendrerit et.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-primary" data-feather="home"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Login from 192.186.1.8</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-success" data-feather="user-plus"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">New connection</div>
                                                <div class="text-muted small mt-1">Christina accepted your request.
                                                </div>
                                                <div class="text-muted small mt-1">14h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="message-square"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                                <div class="dropdown-menu-header">
                                    <div class="position-relative">
                                        4 New Messages
                                    </div>
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="<?= base_url('dist/img/avatars/avatar-5.jpg') ?>" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Vanessa Tucker</div>
                                                <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu
                                                    tortor.</div>
                                                <div class="text-muted small mt-1">15m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="<?= base_url('dist/img/avatars/avatar-2.jpg') ?>" class="avatar img-fluid rounded-circle" alt="William Harris">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">William Harris</div>
                                                <div class="text-muted small mt-1">Curabitur ligula sapien euismod
                                                    vitae.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="<?= base_url('dist/img/avatars/avatar-4.jpg') ?>" class="avatar img-fluid rounded-circle" alt="Christina Mason">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Christina Mason</div>
                                                <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.
                                                </div>
                                                <div class="text-muted small mt-1">4h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="<?= base_url('dist/img/avatars/avatar-3.jpg') ?>" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Sharon Lessman</div>
                                                <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed,
                                                    posuere ac, mattis non.</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all messages</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                <img src="<?= base_url('dist/img/avatars/avatar.jpg') ?>" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">Blank Page</h1>

                    <div class="row">
                        <div class="col-md-12 ml-auto col-xl-12 mr-auto">
                            <p class="category">Revisión de portal web institucional</p>
                            <!-- Tabs with Background on Card -->
                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab">Información básica</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab">Información adicional</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#messages1" role="tab">Ítems a evaluar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#settings1" role="tab">Otros ítems</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home1" role="tabpanel">
                                            <div class="form-group row">
                                                <div class="col-6">
                                                    <label>1. Cuenta con portal web institucional?</label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="radio-inline" for="CBC5_MV1_TIENE">
                                                        <input id="CBC5_MV1_TIENE" name="CBC5_MV1_TIENE" type="radio" value="Sí" style="margin-right: 5px" />Sí
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="radio-inline" for="CBC5_MV1_TIENE">
                                                        <input id="CBC5_MV1_TIENE" name="CBC5_MV1_TIENE" type="radio" value="No" style="margin-right: 5px" />No
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-6">
                                                    <label>2. Indique URL del portal web</label>
                                                </div>
                                                <div class="col-6">
                                                    <input id="CBC5_MV1_TIENE" name="CBC5_MV1_TIENE" type="text" class="form-control" placeholder="www..." />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-6">
                                                    <label>3. Hasta cuando estará disponible el portal web?
                                                        Indique una fecha aproximada</label>
                                                </div>
                                                <div class="col-4">
                                                    <input id="CBC5_MV1_TIENE" name="CBC5_MV1_TIENE" type="date" class="form-control" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <label>
                                                        4. El portal web institucional es financiado por:
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-1">
                                                    <label class="radio-inline" for="P7_1">
                                                        <input id="P7_1" name="P7" type="radio" value="1" style="margin-right: 5px" />1.Recursos propios del instituto
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-1">
                                                    <label class="radio-inline" for="P7_2">
                                                        <input id="P7_2" name="P7" type="radio" value="2" style="margin-right: 5px" />2.Financiado por recursos de la DRE
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-1">
                                                    <label class="radio-inline" for="P7_3">
                                                        <input id="P7_3" name="P7" type="radio" value="3" style="margin-right: 5px" />3.Financiado por Minedu a través de la PP 147
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-3 offset-md-1">
                                                    <label class="radio-inline" for="P7_6">
                                                        <input id="P7_6" name="P7" type="radio" value="6" style="margin-right: 5px" />4.Otro (especifique)
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input id="P7_ESPECIFIQUE" name="P7_ESPECIFIQUE" type="text" class="form-control" placeholder="" disabled />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-6">
                                                    <label>5. Existe personal del instituto que sea
                                                        responsable del portal web?</label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="radio-inline" for="CBC5_MV1_TIENE">
                                                        <input id="CBC5_MV1_TIENE" name="CBC5_MV1_TIENE" type="radio" value="Sí" style="margin-right: 5px" />Sí
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="radio-inline" for="CBC5_MV1_TIENE">
                                                        <input id="CBC5_MV1_TIENE" name="CBC5_MV1_TIENE" type="radio" value="No" style="margin-right: 5px" />No
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-3 offset-md-1">
                                                    <label class="radio-inline" for="P7_6">
                                                        Nombres
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input id="P7_ESPECIFIQUE" name="P7_ESPECIFIQUE" type="text" class="form-control" placeholder="" disabled />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-3 offset-md-1">
                                                    <label class="radio-inline" for="P7_6">
                                                        Apellidos
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input id="P7_ESPECIFIQUE" name="P7_ESPECIFIQUE" type="text" class="form-control" placeholder="" disabled />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-3 offset-md-1">
                                                    <label class="radio-inline" for="P7_6">
                                                        Email
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input id="P7_ESPECIFIQUE" name="P7_ESPECIFIQUE" type="text" class="form-control" placeholder="" disabled />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-3 offset-md-1">
                                                    <label class="radio-inline" for="P7_6">
                                                        Telf. celular
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input id="P7_ESPECIFIQUE" name="P7_ESPECIFIQUE" type="text" class="form-control" placeholder="" disabled />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-6">
                                                    <label>6. Existe personal externo que sea responsable o
                                                        apoye en la actualización del portal web?</label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="radio-inline" for="CBC5_MV1_TIENE">
                                                        <input id="CBC5_MV1_TIENE" name="CBC5_MV1_TIENE" type="radio" value="Sí" style="margin-right: 5px" />Sí
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="radio-inline" for="CBC5_MV1_TIENE">
                                                        <input id="CBC5_MV1_TIENE" name="CBC5_MV1_TIENE" type="radio" value="No" style="margin-right: 5px" />No
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-3 offset-md-1">
                                                    <label class="radio-inline" for="P7_6">
                                                        Nombres
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input id="P7_ESPECIFIQUE" name="P7_ESPECIFIQUE" type="text" class="form-control" placeholder="" disabled />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-3 offset-md-1">
                                                    <label class="radio-inline" for="P7_6">
                                                        Apellidos
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input id="P7_ESPECIFIQUE" name="P7_ESPECIFIQUE" type="text" class="form-control" placeholder="" disabled />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-3 offset-md-1">
                                                    <label class="radio-inline" for="P7_6">
                                                        Email
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input id="P7_ESPECIFIQUE" name="P7_ESPECIFIQUE" type="text" class="form-control" placeholder="" disabled />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-3 offset-md-1">
                                                    <label class="radio-inline" for="P7_6">
                                                        Telf. celular
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input id="P7_ESPECIFIQUE" name="P7_ESPECIFIQUE" type="text" class="form-control" placeholder="" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="profile1" role="tabpanel">
                                            <div class="form-group row">
                                                <div class="col-6">
                                                    <label>7. Cuenta con Entorno Virtual de Aprendizaje
                                                        (EVA)?</label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="radio-inline" for="CBC5_MV1_TIENE">
                                                        <input id="CBC5_MV1_TIENE" name="CBC5_MV1_TIENE" type="radio" value="Sí" style="margin-right: 5px" />Sí
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="radio-inline" for="CBC5_MV1_TIENE">
                                                        <input id="CBC5_MV1_TIENE" name="CBC5_MV1_TIENE" type="radio" value="No" style="margin-right: 5px" />No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-6">
                                                    <label>8. Indique URL del EVA</label>
                                                </div>
                                                <div class="col-6">
                                                    <input id="CBC5_MV1_TIENE" name="CBC5_MV1_TIENE" type="text" class="form-control" placeholder="www..." />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-6">
                                                    <label>9. El instituto cuenta con redes sociales
                                                        activas?</label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="radio-inline" for="CBC5_MV1_TIENE">
                                                        <input id="CBC5_MV1_TIENE" name="CBC5_MV1_TIENE" type="radio" value="Sí" style="margin-right: 5px" />Sí
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="radio-inline" for="CBC5_MV1_TIENE">
                                                        <input id="CBC5_MV1_TIENE" name="CBC5_MV1_TIENE" type="radio" value="No" style="margin-right: 5px" />No
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <label>
                                                        10. Indique las URL de las redes sociales que
                                                        posee el instituto:
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-11 offset-md-1">
                                                    <label class="radio-inline" for="P12_1">
                                                        <input id="P12_1" name="P12_1" type="checkbox" value="1" style="margin-right: 5px" />1.Facebook </label>&nbsp;&nbsp;<input id="P7_ESPECIFIQUE" name="P7_ESPECIFIQUE" type="text" class="form-group" placeholder="www..." disabled />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-11 offset-md-1">
                                                    <label class="radio-inline" for="P12_2">
                                                        <input id="P12_2" name="P12_2" type="checkbox" value="2" style="margin-right: 5px" />2.Youtube </label>&nbsp;&nbsp;<input id="P7_ESPECIFIQUE" name="P7_ESPECIFIQUE" type="text" class="form-group" placeholder="www..." disabled />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-11 offset-md-1">
                                                    <label class="radio-inline" for="P12_3">
                                                        <input id="P12_3" name="P12_3" type="checkbox" value="3" style="margin-right: 5px" />3.Instagram </label>&nbsp;&nbsp;<input id="P7_ESPECIFIQUE" name="P7_ESPECIFIQUE" type="text" class="form-group" placeholder="www..." disabled />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-11 offset-md-1">
                                                    <label class="radio-inline" for="P12_4">
                                                        <input id="P12_4" name="P12_4" type="checkbox" value="4" style="margin-right: 5px" />4.Twitter </label>&nbsp;&nbsp;<input id="P7_ESPECIFIQUE" name="P7_ESPECIFIQUE" type="text" class="form-group" placeholder="www..." disabled />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-6">
                                                    <label>11. Cuenta con Biblioteca Virtual?</label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="radio-inline" for="CBC5_MV1_TIENE">
                                                        <input id="CBC5_MV1_TIENE" name="CBC5_MV1_TIENE" type="radio" value="Sí" style="margin-right: 5px" />Sí
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="radio-inline" for="CBC5_MV1_TIENE">
                                                        <input id="CBC5_MV1_TIENE" name="CBC5_MV1_TIENE" type="radio" value="No" style="margin-right: 5px" />No
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-6">
                                                    <label>12. Indique URL de la Biblioteca Virtual</label>
                                                </div>
                                                <div class="col-6">
                                                    <input id="CBC5_MV1_TIENE" name="CBC5_MV1_TIENE" type="text" class="form-control" placeholder="www..." />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <label>
                                                        13. La biblioteca virtual es financiada por:
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-1">
                                                    <label class="radio-inline" for="P7_1">
                                                        <input id="P7_1" name="P7" type="radio" value="1" style="margin-right: 5px" />1.Recursos propios del instituto
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-1">
                                                    <label class="radio-inline" for="P7_2">
                                                        <input id="P7_2" name="P7" type="radio" value="2" style="margin-right: 5px" />2.Financiado por recursos de la DRE
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-1">
                                                    <label class="radio-inline" for="P7_3">
                                                        <input id="P7_3" name="P7" type="radio" value="3" style="margin-right: 5px" />3.Financiado por Minedu a través de la PP 147
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-3 offset-md-1">
                                                    <label class="radio-inline" for="P7_6">
                                                        <input id="P7_6" name="P7" type="radio" value="6" style="margin-right: 5px" />4.Otro (especifique)
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input id="P7_ESPECIFIQUE" name="P7_ESPECIFIQUE" type="text" class="form-control" placeholder="" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="messages1" role="tabpanel">
                                            <p>
                                                <strong>La institución cuenta con un Portal Institucional
                                                    operativo, de fácil acceso al público en general,
                                                    sin perjuicio de la protección de datos personales
                                                    y/o información sensible de acuerdo con la ley de la
                                                    materia, y conforme lo señalado en el artículo 42 de
                                                    la Ley N° 30512, en donde se encuentre en forma
                                                    permanente y actualizada información relativa
                                                    a:</strong>
                                            </p>
                                            <br />
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Ítem</th>
                                                        <th scope="col">Existe</th>
                                                        <th scope="col">Condición</th>
                                                        <th scope="col">Actualizar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>
                                                            Relación y número de becas y créditos educativos
                                                            otorgados en el año en curso.
                                                        </td>
                                                        <td>Sí</td>
                                                        <td>Incompleto</td>
                                                        <td>
                                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sizedModalMd" type="button">
                                                                Editar
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>
                                                            Relación de derechos, tasas, montos de pensiones
                                                            u otros pagos que deben realizar los estudiantes
                                                            por toda índole, según corresponda.
                                                        </td>
                                                        <td>No</td>
                                                        <td></td>
                                                        <td>
                                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sizedModalMd" type="button">
                                                                Editar
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>
                                                            Proyectos de investigación y los gastos que
                                                            genere.
                                                        </td>
                                                        <td>No aplica</td>
                                                        <td></td>
                                                        <td>
                                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sizedModalMd" type="button">
                                                                Editar
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>
                                                            Conformación del cuerpo docente, sus respectivas
                                                            hojas de vida actualizadas y las materias en las
                                                            que se desempeña..
                                                        </td>
                                                        <td>No</td>
                                                        <td></td>
                                                        <td>
                                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sizedModalMd" type="button">
                                                                Editar
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td>
                                                            El número de ingresantes, matriculados y
                                                            egresados por año y programa.
                                                        </td>
                                                        <td>No</td>
                                                        <td></td>
                                                        <td>
                                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sizedModalMd" type="button">
                                                                Editar
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">6</th>
                                                        <td>
                                                            Relación de programas de estudios, sus horarios
                                                            y procesos de matrícula.
                                                        </td>
                                                        <td>No</td>
                                                        <td></td>
                                                        <td>
                                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sizedModalMd" type="button">
                                                                Editar
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">7</th>
                                                        <td>Periodo de vigencia de su licenciamiento.</td>
                                                        <td>No</td>
                                                        <td></td>
                                                        <td>
                                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sizedModalMd" type="button">
                                                                Editar
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">8</th>
                                                        <td>El estatuto o reglamento institucional.</td>
                                                        <td>No</td>
                                                        <td></td>
                                                        <td>
                                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sizedModalMd" type="button">
                                                                Editar
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">9</th>
                                                        <td>
                                                            Inversiones, reinversiones, donaciones, obras de
                                                            infraestructura, recursos de diversa fuente,
                                                            entre otros (para IES y EEST públicos).
                                                        </td>
                                                        <td>No</td>
                                                        <td></td>
                                                        <td>
                                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sizedModalMd" type="button">
                                                                Editar
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">10</th>
                                                        <td>
                                                            El texto único de procedimientos administrativos
                                                            (para IES y EEST públicos).
                                                        </td>
                                                        <td>No</td>
                                                        <td></td>
                                                        <td>
                                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sizedModalMd" type="button">
                                                                Editar
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="settings1" role="tabpanel">
                                            <p>
                                                "I will be the leader of a company that ends up being
                                                worth billions of dollars, because I got the answers.
                                                I understand culture. I am the nucleus. I think that’s
                                                a responsibility that I have, to push possibilities,
                                                to show people, this is the level that things could be
                                                at."
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tabs on plain Card -->
                        </div>
                    </div>
                    <div>
                        <!-- BEGIN  modal -->
                        <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sizedModalMd">
                            Medium
                        </button>-->
                        <div class="modal fade" id="sizedModalMd" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Medium modal</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body m-3">
                                        <p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                                            notifications, or completely custom content.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END  modal -->
                    </div>
                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin
                                        Template</strong></a> &copy;
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!--<script src="https://code.jquery.com/jquery-3.5.1.js"></script>-->
    <!--<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>-->

    <script src="<?= base_url('dist/js/jquery-3.7.0.min.js') ?>"></script>
    <script src="<?= base_url('dist/datatables/datatables.min.js') ?>"></script>

    <script src="<?= base_url('dist/js/app.js') ?>"></script>
    <!--<script src="< ?=base_url('dist/js/settings.js')?>"></script>-->
    <!--<script src="< ?=base_url('dist/js/datatables.js')?>"></script>-->

    <script>
        //document.addEventListener("DOMContentLoaded", function() {
        // Datatables Responsive
        // https://datatables.net/reference/button/excelHtml5

        //https://www.youtube.com/watch?v=j59H9xnyCBs
        $(document).ready(function() {
            var mytable = $("#example").DataTable({
                deferRender: true,
                responsive: true,
                pageLength: 5,
                lengthMenu: [5, 10, 25, 50],
                scrollH: true,
                scrollX: true,
                order: [],
                stateSave: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                }
            });

            new $.fn.dataTable.Buttons(mytable, {
                buttons: [
                    'copy', 'pdf',
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        customize: function(xlsx) {
                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                            //Para ver los estilos de formato https://datatables.net/reference/button/excelHtml5
                            $('row c[r^="B"]', sheet).attr('s', '57');
                            //Para que la columna se muestre como texto https://datatables.net/forums/discussion/73814/export-to-excel-with-format-text-for-column-b-c-and-d
                            $('row c[r^="C"]', sheet).attr('s', '50');
                        }
                    }
                ]
            });

            mytable.buttons().container().appendTo($('tr th.heading', mytable.table().container()));

        });
    </script>

</body>

</html>