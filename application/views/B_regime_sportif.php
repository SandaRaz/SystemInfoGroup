<?php
    $this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ajout Regime Sportif</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet" />
    <script src="<?php echo base_url('assets/vendor/fontawesome/js/all.min.js'); ?>"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">LOGO</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('B_Login_C/retour'); ?>">Menu</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('B_Login_C/deconnexion'); ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="<?php echo base_url('B_RegimeAlim_C/page_chart'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Statistics
                        </a>
                        <a class="nav-link" href="<?php echo base_url('B_RegimeAlim_C/regimeAlimentaire'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Ajout Regime alimentaire
                        </a>
                        <a class="nav-link" href="<?php echo base_url('B_RegimeAlim_C/regimeSportive'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Ajout Regime sportive
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Ajout Mouvement:</h5>
                                    </br>
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nom</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputText">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary"
                                                    style="margin-left: 500px;">Valider</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                </br>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Ajout Regime Sportive:</h5>
                                    </br>
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nom</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputText">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Action</label>
                                            <div class="col-sm-10">
                                                <select
                                                    style="width: 900px; height: 40px; border-color: gray; border-radius: 5px;">
                                                    <option>-1</option>
                                                    <option>1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Benefice</label>
                                            <div class="col-sm-10">
                                                <select
                                                    style="width: 900px; height: 40px; border-color: gray; border-radius: 5px;">
                                                    <option>1-2-3-4.......</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Duree</label>
                                            <select
                                                style="width: 900px; height: 40px; border-color: gray; border-radius: 5px;">
                                                <option>1-2-3-4.........</option>
                                            </select>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary"
                                                    style="margin-left: 500px;">Valider</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                </br>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Sports:</h5>
                                    </br>
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Regime Sportif</label>
                                            <div class="col-sm-10">
                                                <select style="width: 900px; height: 40px; border-color: gray; border-radius: 5px;">
                                                    <option>SELECT * FROM REGIME SPORTIF</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Mouvement</label>
                                            <div class="col-sm-10">
                                                <select style="width: 900px; height: 40px; border-color: gray; border-radius: 5px;">
                                                    <option>SELECT * FROM MOUVEMENT</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Duree (minute)</label>
                                            <div class="col-sm-10">
                                                <select style="width: 900px; height: 40px; border-color: gray; border-radius: 5px;">
                                                    <option>1-2-3-4.......</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary"
                                                    style="margin-left: 500px;">Valider</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
   <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/charts/Chart.js'); ?>"></script>
    <script src="<?php echo base_url('assets/demo/chart-area-demo.js'); ?>"></script>
    <script src="<?php echo base_url('assets/demo/chart-bar-demo.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/datatables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/datatables-simple-demo.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/ajax/B_RegimeAlim.js'); ?>"></script>
</body>

</html>