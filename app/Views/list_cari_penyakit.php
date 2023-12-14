<?php if(in_groups('pasien')): ?>

<?= $this->extend('layouts/app');?>
<?= $this->section('content') ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Telusuri Penyakit Anda</h1>
    <ol class="breadcrum mb-4">
        <!-- Add breadcrumb items if needed -->
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            <?= $title ?>
        </div>
        <div class="card-body">
            <form class="col-6" action="<?= base_url('/cari/penyakit') ?>" method="POST">
                <div class="scrollable-form">
                    <?php foreach ($gejala as $gej) : ?>
                        <div class="mb-3">
                            <div class="input-group">
                                <div class="input-group-text">
                                    <input type="checkbox" aria-label="Checkbox for following text input" value="<?= $gej['kode'] ?>" name="<?= $gej['id'] ?>">
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with checkbox" readonly value="<?= $gej['gejala'] ?>">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>


<?=$this->endSection()?>
<?php endif; ?>