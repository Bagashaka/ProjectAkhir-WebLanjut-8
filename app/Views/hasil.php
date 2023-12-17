<?php if(in_groups('pasien')): ?>

<?= $this->extend('layouts/app');?>
<?= $this->section('content') ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Hasil Pengecekan Penyakit Anda</h1>
    <ol class="breadcrumb mb-4">
        <!-- Add breadcrumb items if needed -->
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
        </div>
        <div class="card-body">
            <br>
            <script>
                function myFunction() {
                    window.print();
                }
            </script>
            <div class="text-center">
                <h1>HASIL DIAGNOSA</h1><br>
                <div class="container">
                    <button style="float:right;" class="btn btn-success" onclick="myFunction()">CETAK</button>
                </div>
            </div>
            <div class="container col-md-6">
                <div class="mb-3">
                    <label class="form-label"><h5>Nama Pasien</h5></label>
                    <textarea class="form-control" rows="1" readonly><?= user()->nama_pasien ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label"><h5>PENYAKIT</h5></label>
                    <textarea class="form-control" rows="1" readonly><?= $penyakit ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label"><h5>INFO PENYAKIT</h5></label>
                    <textarea class="form-control" rows="4" readonly><?= $info ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label"><h5>SOLUSI PENYAKIT</h5></label>
                    <textarea class="form-control" rows="4" readonly><?= $solusi ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label" style="color: red;" ><h5>PERHATIAN</h5></label>
                    <textarea class="form-control" rows="3" readonly>Hasil diagnosa ini belum tentu valid.
Untuk diagnosa lebih lanjut, silahkan melakukan kunjungan pemeriksaan ke Dokter!</textarea>
                </div>

                <div class="mb-3 text-center">
                        <a href="<?= base_url('/pasien/kunjungan/create') ?>" class="btn btn-primary">Buat Kunjungan</a>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>

<?=$this->endSection()?>
<?php endif; ?>