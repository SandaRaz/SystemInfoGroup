<?php $this->load->helper('url'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/vendor/bootstrap/dist/bootstrap.min.css'); ?>" rel="stylesheet" />
    <script src="<?php echo base_url('assets/vendor/fontawesome/js/all.min.js'); ?>"></script>
</head>

<body>
    <!-- Section: Design Block -->
    <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image" style="
            background-image: url('<?php echo base_url('/assets/img/bg.jpg'); ?>');
            height: 300px; background-repeat: no-repeat;background-size: cover;
            "></div>
        <!-- Background image -->

        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
            margin-top: -100px;
            background: hsla(0, 0%, 100%, 0.8);
            backdrop-filter: blur(30px); ">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">Sign up now</h2>
                        <form action="<?php echo base_url('F_Login_C/inscription1'); ?>" method="POST">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="nom" id="form3Example1" class="form-control" />
                                        <label class="form-label" for="form3Example1">First name</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="prenom" id="form3Example2" class="form-control" />
                                        <label class="form-label" for="form3Example2">Last name</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="date" name="datenaissance" id="form3Example1" class="form-control" />
                                        <label class="form-label" for="form3Example1">Date de naissance</label>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <select name="genre" id="form3Example10" class="form-control">
                                            <option value="M">Masculin</option>
                                            <option value="F">Feminin</option>
                                        </select>
                                        <label class="form-label" for="form3Example10">Genre</label>
                                    </div>
                                </div>

                                <!-- Email input -->
                                <div class="col-md-6 mb-4">
                                    <input type="email" name="email" id="form3Example3" class="form-control"/>
                                    <label class="form-label" for="form3Example3">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="col-md-6 mb-4">
                                    <input type="password" name="mdp" id="form3Example4" class="form-control"/>
                                    <label class="form-label" for="form3Example4">Password</label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                    Enregistrer
                                </button>
                            </div>
                        </form>
                        <a href="<?php echo base_url('F_Login_C') ?>">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/charts/Chart.js'); ?>"></script>
    <script src="<?php echo base_url('assets/demo/chart-area-demo.js'); ?>"></script>
    <script src="<?php echo base_url('assets/demo/chart-bar-demo.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/datatables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/datatables-simple-demo.js'); ?>"></script>
    <!-- Section: Design Block -->
    </body>
    
    </html>