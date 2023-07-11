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
    <title>Ajout Regime</title>
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
                        <div class="sb-sidenav-menu-heading"></div>
                        <a class="nav-link" href="<?php echo base_url('B_RegimeAlim_C/page_chart'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Statistics
                        </a>
                        <a class="nav-link" href="<?php echo base_url('B_RegimeAlim_C/regimeAlimentaire'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Ajout Regime alimentaire
                        </a>
                        <a class="nav-link" href="<?php echo base_url('B_RegimeSport_C/regimeSportif'); ?>">
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
                                    <h5 class="card-title">Ajout Plat:</h5>
                                </br>
                                    <form id="ajoutPlat">
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nom</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputText" name="nom">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Categorie</label>
                                            <div class="col-sm-10">
                                                <select style="width: 900px; height: 40px; border-color: gray; border-radius: 5px;" name="categorie">
                                                    <option value="1">Entree</option>
                                                    <option value="2">Resistance</option>
                                                    <option value="3">Dessert</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Calorie apporte</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputPassword" name="calorie">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary" style="margin-left: 500px;">Valider</button>
                                            </div>
                                        </div>
                                        
                                    </form><!-- End Horizontal Form -->
                
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
                                <h5 class="card-title">Ajout Repas:</h5>
                                </br>
                                <form id="ajoutRepas">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
                                        <div class="col-sm-10">
                                            <select style="width: 900px; height: 40px; border-color: gray; border-radius: 5px;" name="types">
                                                <option value="1">Petit Dejeuner</option>
                                                <option value="5">Dejeuner</option>
                                                <option value="10">Diner</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Entree</label>
                                        <div class="col-sm-10">
                                            <select style="width: 900px; height: 40px; border-color: gray; border-radius: 5px;" name="id_entrer">
                                                <option disabled selected hidden value="">Les entrees</option>
                                                <option disabled selected hidden value="0">Aucun</option>
                                                <?php
                                                foreach ($entrer as $plat) : ?>
                                                    <option value="<?php echo $plat['id_plat']; ?>"><?php echo $plat['nom']; ?></option> 
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Resistance</label>
                                        <select style="width: 900px; height: 40px; border-color: gray; border-radius: 5px;" name="id_resistance">
                                            <option disabled selected hidden value="">Les resistances</option>
                                            <option disabled selected hidden value="0">Aucun</option>
                                            <?php
                                                foreach ($resistance as $plat) : ?> 
                                                    <option value="<?php echo $plat['id_plat']; ?>"><?php echo $plat['nom']; ?></option> 
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Dessert</label>
                                        <select style="width: 900px; height: 40px; border-color: gray; border-radius: 5px;" name="id_dessert">
                                            <option disabled selected hidden value="">Les desserts</option>
                                            <option disabled selected hidden value="0">Aucun</option>
                                            <?php
                                                foreach ($dessert as $plat) : ?> 
                                                    <option value="<?php echo $plat['id_plat']; ?>"><?php echo $plat['nom']; ?></option> 
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputText" name="nom_repas">
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
                                <h5 class="card-title">Ajout Menu:</h5>
                                </br>
                                <form id="ajoutMenu">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputText" name="nom_menu">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Petit dejeuner</label>
                                        <div class="col-sm-10">
                                            <select style="width: 900px; height: 40px; border-color: gray; border-radius: 5px;" name="idpdej">

                                                <option disabled selected hidden value="0">Aucun</option>
                                                <?php
                                                foreach ($ptdej as $repas) : ?> 
                                                    <option value="<?php echo $repas['id_repas']; ?>"><?php echo $repas['nom_repas']; ?></option> 
                                            <?php endforeach; ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Dejeuner</label>
                                        <div class="col-sm-10">
                                            <select style="width: 900px; height: 40px; border-color: gray; border-radius: 5px;" name="iddej">
                                                <option disabled selected hidden value="0">Aucun</option>
                                                <?php
                                                foreach ($dej as $repas) : ?> 
                                                    <option value="<?php echo $repas['id_repas']; ?>"><?php echo $repas['nom_repas']; ?></option> 
                                            <?php endforeach; ?>
                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Diner</label>
                                        <select style="width: 900px; height: 40px; border-color: gray; border-radius: 5px;" name="iddin">
                                            <option disabled selected hidden value="0">Aucun</option>
                                            <?php
                                                foreach ($din as $repas) : ?> 
                                                    <option value="<?php echo $repas['id_repas']; ?>"><?php echo $repas['nom_repas']; ?></option> 
                                            <?php endforeach; ?>
                                        
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
                                <h5 class="card-title">Ajout Regime:</h5>
                                </br>
                                <form id="ajoutRegime">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputText" name="libelle">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Action</label>
                                        <div class="col-sm-10">
                                            <select style="width: 900px; height: 40px; border-color: gray; border-radius: 5px;" name="action">
                                                <option value="-1">-1</option>
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Benefice</label>
                                        <div class="col-sm-10">
                                            <select style="width: 900px; height: 40px; border-color: gray; border-radius: 5px;" name="benefice">
                                            <?php for ($i=1; $i <=10 ; $i++) { ?>
                                                <option> <?php echo $i ; ?> </option>
                                            <?php } ?>
                                            </select>
                                            kg
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Duree</label>
                                        <select style="width: 900px; height: 40px; border-color: gray; border-radius: 5px;" name="duree">
                                            <?php for ($i=1; $i <=31 ; $i++) { ?>
                                                <option> <?php echo $i ; ?>    </option>
                                            <?php } ?>
                                        </select>
                                        jours
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Prix</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputText" name="prix">
            
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
    <script src="<?php echo base_url('assets/js/ajax/regime_aliment.js'); ?>"></script>
</body>
</body>

</html>