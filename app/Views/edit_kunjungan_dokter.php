<?php if (in_groups('dokter')):?>
<?= $this->extend('layouts/app');?>
<?= $this->section('content') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Detail Kunjungan</h1>
    <ol class="breadcrum mb-4">
      
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
          <?=$title?>
        </div>
        <div class="card-body">
            <!-- Form Data -->
            <form action="<?= base_url('/dokter/kunjungan/'.$kunjungan['id']) ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="_method" value="PUT">
                <div class="mb-3 row">
                    <label for="nama_pasien" class="col-sm-2 col-for m-label">Nama Pasien</label>
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
                <div class="mb-3 row">
                    <label for="nama_dokter" class="col-sm-2 col-for m-label">Nama Dokter</label>
                    <div class="col-sm-4">
                        <select name="nama_dokter" class="form-control">
                        <?php
                            foreach ($dokter as $dok){ 
                        ?>
                            <option value="<?=$dok->id ?>">
                                            <?= $dok->nama_dokter?>
                            </option>
                        <?php
                            }
                        ?>
                        </select>
                    </div>
                </div>     
                <div class="mb-3 row">
                    <label for="rekam_medis" class="col-sm-2 col-for m-label">Rekam Medis</label>
                    <div class="col-sm-4">
                        <select name="rekam_medis" class="form-control">
                        <?php
                            foreach ($medis as $med){ 
                        ?>
                            <option value="<?=$med['id'] ?>">
                                            <?= $med['nama_pasien']?>
                                            <?= $med['tanggal_pemeriksaan']?>
                            </option>
                        <?php
                            }
                        ?>
                        </select>
                    </div>
                </div>       
                <div class="mb-3 row">
                    <label for="tanggal_pemeriksaan" class="col-sm-2 col-for m-label">Tanggal Kunjungan</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control  <?= session('validation') && session('validation')->hasError('tanggal_kunjungan') ? 'is-invalid' : '' ?>" name="tanggal_kunjungan"  value="<?=  $kunjungan['tanggal_kunjungan'] ?>">
                        <?php if (session('validation') && session('validation')->hasError('tanggal_kunjungan')) : ?>
                            <div class="invalid-feedback">
                            <?= session('validation')->getError('tanggal_kunjungan'); ?>
                    </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mb-3 row">
                <label for="validasi_kunjungan" class="col-sm-2 col-for m-label">Status</label>
                    <div class="col-sm-4">
                        <select name="validasi_kunjungan" class="form-control">
                            <option value="0">Belum Di Terselesaikan</option>
                            <option value="1">Terselesaikan</option>
                        </select>
                    </div>               
                </div>               
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2" type="submit">Perbarui</button>
                    <a class="btn btn-danger" href="<?= base_url('/dokter/jadwal/kunjungan')?>">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?=$this->endSection()?>
<?php endif; ?>