<?php if (in_groups('dokter')):?>
<?= $this->extend('layouts/app');?>
<?= $this->section('content') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Manejemen Rekam Medis</h1>
    <ol class="breadcrum mb-4">
        <p class="breadcrum-item active">Pengelolaan Rekam Medis</p>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Create Rekam Medis
        </div>
        <div class="card-body">
            <!-- Form Data -->
            <form action="<?= base_url('/dokter/rekamedis/create')?>" method="POST">
                <?= csrf_field() ?>
                <div class="mb-3 row">
                    <label for="keluhan" class="col-sm-2 col-for m-label">Keluhan</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('keluhan') ? 'is-invalid' : '' ?>" name="keluhan"  value="<?= old('keluhan') ?>">
                        <?php if (session('validation') && session('validation')->hasError('keluhan')) : ?>
                            <div class="invalid-feedback">
                            <?= session('validation')->getError('keluhan'); ?>
                    </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="diagnosa" class="col-sm-2 col-for m-label">Diagnosa</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('diagnosa') ? 'is-invalid' : '' ?>" name="diagnosa"  value="<?= old('diagnosa') ?>">
                        <?php if (session('validation') && session('validation')->hasError('diagnosa')) : ?>
                            <div class="invalid-feedback">
                            <?= session('validation')->getError('diagnosa'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="resep_obat" class="col-sm-2 col-for m-label">Resep Obat</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control  <?= session('validation') && session('validation')->hasError('resep_obat') ? 'is-invalid' : '' ?>" name="resep_obat"  value="<?= old('resep_obat') ?>">
                        <?php if (session('validation') && session('validation')->hasError('resep_obat')) : ?>
                            <div class="invalid-feedback">
                            <?= session('validation')->getError('resep_obat'); ?>
                    </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tanggal_pemeriksaan" class="col-sm-2 col-for m-label">Tanggal Pemeriksaan</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control  <?= session('validation') && session('validation')->hasError('tanggal_pemeriksaan') ? 'is-invalid' : '' ?>" name="tanggal_pemeriksaan"  value="<?= old('tanggal_pemeriksaan') ?>">
                        <?php if (session('validation') && session('validation')->hasError('tanggal_pemeriksaan')) : ?>
                            <div class="invalid-feedback">
                            <?= session('validation')->getError('tanggal_pemeriksaan'); ?>
                    </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="role" class="col-sm-2 col-for m-label">Nama Pasien</label>
                    <div class="col-sm-4">
                        <select name="nama_pasien" class="form-control">
                        <?php
                            foreach ($users as $user){ 
                        ?>
                            <option value="<?= $user->id ?>">
                                            <?= $user->nama_pasien?>
                            </option>
                        <?php
                            }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2" type="submit">Simpan</button>
                    <a class="btn btn-danger" href="<?= base_url('/dokter/rekamedis')?>">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?=$this->endSection()?>
<?php endif; ?>