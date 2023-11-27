<?php if (in_groups('dokter')):?>
<?= $this->extend('layouts/app');?>
<?= $this->section('content') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Manejemen Jadwal Praktik</h1>
    <ol class="breadcrum mb-4">
        <p class="breadcrum-item active">Pengelolaan Jadwal Praktik</p>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Jadwal Praktik
        </div>
        <div class="card-body">
            <!-- Form Data -->
            <form action="<?=base_url('/dokter/jadwal/'.$jadwal['id'])?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="_method" value="PUT">

                <div class="mb-3 row">
                    <label for="nama_dokter" class="col-sm-2 col-for m-label">Nama Dokter</label>
                    <div class="col-sm-4">
                        <select name="nama_dokter" class="form-control">
                            <option value="<?= user()->id ?>">
                                            <?= user()->nama_dokter?>
                            </option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="hari" class="col-sm-2 col-for m-label">Hari</label>
                    <div class="col-sm-4">
                        <select name="hari" class="form-control">
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                        </select>
                    </div>
                </div>                
                <div class="mb-3 row">
                    <label for="jam_mulai" class="col-sm-2 col-for m-label">Jam Mulai</label>
                        <div class="col-sm-4">
                            <input type="time" class="form-control <?= session('validation') && session('validation')->hasError('jam_mulai') ? 'is-invalid' : '' ?>" name="jam_mulai" required value="<?= $jadwal['jam_mulai']?>" >
                        <?php if (session('validation') && session('validation')->hasError('jam_mulai')) : ?>
                            <div class="invalid-feedback">
                                <?= session('validation')->getError('jam_mulai'); ?>
                            </div>
                        <?php endif; ?>
                        </div>
                </div>

                <div class="mb-3 row">
                    <label for="jam_selesai" class="col-sm-2 col-for m-label">Jam Selesai</label>
                        <div class="col-sm-4">
                            <input type="time" class="form-control <?= session('validation') && session('validation')->hasError('jam_selesai') ? 'is-invalid' : '' ?>" name="jam_selesai" required value="<?=  $jadwal['jam_selesai']?>">
                        <?php if (session('validation') && session('validation')->hasError('jam_selesai')) : ?>
                            <div class="invalid-feedback">
                                <?= session('validation')->getError('jam_selesai'); ?>
                            </div>
                        <?php endif; ?>
                        </div>
                </div>

                <div class="mb-3 row">
                    <label for="lokasi" class="col-sm-2 col-for m-label">Lokasi</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('lokasi') ? 'is-invalid' : '' ?>" name="lokasi" required value="<?=  $jadwal['lokasi']?>">
                        <?php if (session('validation') && session('validation')->hasError('lokasi')) : ?>
                            <div class="invalid-feedback">
                                <?= session('validation')->getError('lokasi'); ?>
                            </div>
                        <?php endif; ?>
                        </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2" type="submit">Simpan</button>
                    <a class="btn btn-danger" href="<?= base_url('/dokter/jadwal')?>">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?=$this->endSection()?>
<?php endif; ?>