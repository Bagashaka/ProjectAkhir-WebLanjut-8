<?php if (in_groups('admin')):?>
<?= $this->extend('layouts/app');?>
<?= $this->section('content') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Manejemen User</h1>
    <ol class="breadcrum mb-4">
        <p class="breadcrum-item active">Pengelolaan User</p>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Create User
        </div>
        <div class="card-body">
            <!-- Form Data -->
            <form action="<?= base_url('/users/create') ?>" method="POST">
                <?= csrf_field() ?>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-for m-label">Email</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('email') ? 'is-invalid' : '' ?>" name="email"  value="<?= old('email') ?>">
                        <?php if (session('validation') && session('validation')->hasError('email')) : ?>
                            <div class="invalid-feedback">
                            <?= session('validation')->getError('email'); ?>
                    </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="username" class="col-sm-2 col-for m-label">Username</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control  <?= session('validation') && session('validation')->hasError('username') ? 'is-invalid' : '' ?>" name="username"  value="<?= old('username') ?>">
                        <?php if (session('validation') && session('validation')->hasError('username')) : ?>
                            <div class="invalid-feedback">
                            <?= session('validation')->getError('username'); ?>
                    </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="role" class="col-sm-2 col-for m-label">Role</label>
                    <div class="col-sm-4">
                        <select name="role" class="form-control">
                            <option value="admin">admin</option>
                            <option value="pasien">pasien</option>
                            <option value="dokter">dokter</option>
                        </select>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2" type="submit">Simpan</button>
                    <a class="btn btn-danger" href="<?= base_url('/users')?>">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?=$this->endSection()?>
<?php endif; ?>