<!DOCTYPE html>
<html lang="en">
<?php $this->load->helper('url'); ?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login client</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/login.css'); ?>" rel="stylesheet" />
    <script src="<?php echo base_url('assets/vendor/fontawesome/js/all.min.js'); ?>"></script>
</head>

<body>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto" style="height: 100px;">
                    

                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4">
                                <h4 style="color: black;">Login</h4>
                            </div>
                            <form class="text-center" action="<?php echo base_url('F_Login_C/authentified'); ?>" method="post">
                                <div class="mb-3"><input class="form-control" type="email" name="email"
                                        placeholder="Email" value="sanda@gmail.com"/></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password"
                                        placeholder="Password" value="111"/></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100"
                                        type="submit">Login</button></div>
                            </form>
                            <p class="text-muted">Pas de compte? <a href="<?php echo base_url('F_Login_C/pageinscription'); ?>">S'inscrire</a></p>
                            <a href="<?php echo base_url('F_Login_C/retour') ?>">Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>