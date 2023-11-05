<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Form Register</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="<?=base_url('assetsdok/css/styles.css')?>" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center ">
                            <div class="col-lg-6">
                                <div class="card shadow-lg border-0 rounded-lg mt-2">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4"><?=lang('Auth.register')?></h3></div>
                                    <div class="card-body">

                                        <?= view('Myth\Auth\Views\_message_block') ?>

                                        <form action="<?= url_to('register') ?>" method="post">
                                         <?= csrf_field() ?>

                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" 
                                                   name="email" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                                            <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                                            <label for="email"><i class="fa fa-envelope me-2" aria-hidden="true"></i><?=lang('Auth.email')?></label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text"  class="form-control<?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" 
                                                   name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                                            <label for="username"><i class="fa fa-user me-2" aria-hidden="true"></i><?=lang('Auth.username')?></label>
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input type="password" name="password" class="form-control<?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                                       placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                                                <label for="password"><i class="fa fa-lock me-2" aria-hidden="true"></i><?=lang('Auth.password')?></label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                                       placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                                                <label for="pass_confirm"><i class="fa fa-lock me-2" aria-hidden="true"></i><?=lang('Auth.repeatPassword')?></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.register')?></button></div>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><?=lang('Auth.alreadyRegistered')?><br> <a href="<?= url_to('login') ?>"><?=lang('Auth.signIn')?></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-1 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; RSUD Tadika Mesra 2023</div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
