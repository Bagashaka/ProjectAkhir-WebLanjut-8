<?php if (in_groups('dokter')):?>
<?= $this->extend('layouts/app');?> 
<?= $this->section('content') ?>
<main>
    <div class="container-fluid px-4">
        <h1></h1>
        <div class="my-3 mx-3">
        <h3><?= $title ?></h3>
        <hr>
            <?= view('Myth\Auth\Views\_message_block') ?>
            <!-- Tabel Medis -->
            <div id="tabelPasien" class="card mb-4">
                <div class="card-header"> 
                    <i class="fas fa-table me-1"></i>
                        Daftar Rekam Medis
                </div>
            <div class="card-body">
                <a href="/dokter/rekamedis/create" class="btn btn-primary mb-2"><i class
                class="fa fa-plus"></i>&nbsp;Tambah Data</a>

        <table  id="datatablesSimple"> 
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Keluhan</th>
                    <th>Diagnosa</th>
                    <th>Resep Obat</th>
                    <th>Tanggal Pemeriksaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no =1;
                foreach ($medis as $med): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $med['nama_pasien'] ?></td>
                        <td><?= $med['keluhan'] ?></td>
                        <td><?= $med['diagnosa'] ?></td>
                        <td><?= $med['resep_obat'] ?></td>
                        <td><?= $med['tanggal_pemeriksaan']?></td>
                    <td>
                    <a href="<?= base_url('/dokter/rekamedis/edit/'. $med['id']) ?>" class="btn btn-warning btn-sm mx-1">Edit</a>
                        <form action="/dokter/rekamedis/delete/<?=$med['id']?>" method="post" class="d-inline">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" role="button" onclick="return confirm('Apakah anda yakin?')">
                            Hapus</button>
                        </form>
                   </td> 
                 </tr>
                <?php endforeach; ?>         
            </tbody>
        </table>
            </div>
            </div>
    </div>
 </main>
<?=$this->endSection()?>
<?php endif; ?>