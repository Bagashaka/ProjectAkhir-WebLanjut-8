<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?=base_url('assetsdok/css/styles.css')?>" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">RSUD Tadika Mesra</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?=base_url('landing_page')?>">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Dokter</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4"><?=lang('Auth.loginTitle')?></h3></div>
                                <div class="card-body">

                                <?= view('Myth\Auth\Views\_message_block') ?>

                                    <form action="<?= url_to('login') ?>" method="post" >
						                <?= csrf_field() ?>
                                        
<?php if ($config->validFields === ['email']): ?>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control<?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								                name="login" placeholder="<?=lang('Auth.email')?>">
                                            <label for="login"><i class="fa fa-envelope me-2" aria-hidden="true"></i><?=lang('Auth.email')?></label>
                                            <div class="invalid-feedback">
								                <?= session('errors.login') ?>
							                </div>
                                        </div>
<?php else: ?>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								                name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
                                            <label for="login"><i class="fa fa-envelope me-2" aria-hidden="true"></i><?=lang('Auth.emailOrUsername')?></label>
                                            <div class="invalid-feedback">
								                <?= session('errors.login') ?>
							                </div>
                                        </div>
<?php endif; ?>
                                        <div class="form-floating mb-3">
                                            <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
                                            <label for="password"><i class="fa fa-lock me-2" aria-hidden="true"> </i><?=lang('Auth.password')?></label>
                                            <div class="invalid-feedback">
								                <?= session('errors.password') ?>
							                </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
<?php if ($config->allowRemembering): ?>
                                            <div class="form-check mb-3">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                                <?=lang('Auth.rememberMe')?>
                                            </label>
                                            </div>
<?php endif; ?>
                                            <div class="d-flex align-items-center">
                                            <?php if ($config->activeResetter): ?>
                                                <a class="small" href="<?= url_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a>
                                            <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.loginAction')?></button></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
<?php if ($config->allowRegistration) : ?>
					                <p><a href="<?= url_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
<?php endif; ?>
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
    <script src="<?=base_url('assetsdok/js/scripts.js')?>"></script>
</body>
</html>