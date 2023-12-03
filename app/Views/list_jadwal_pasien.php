<?php if (in_groups('pasien')):?>
<?= $this->extend('layouts/app');?> 
<?= $this->section('content') ?>
<main>
    <div class="container-fluid px-4">
        <h1></h1>
        <div class="my-3 mx-3">
        <h3><?= $title ?></h3>
        <hr>
            <?= view('Myth\Auth\Views\_message_block') ?>
            <!-- Tabel Jadwal Praktik -->
            <div id="tabelPasien" class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                        Daftar Jadwal Praktik Anda
                </div>
            <div class="card-body">
        <table  id="datatablesSimple"> 
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Hari</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th>Lokasi</th>               
                </tr>
            </thead>
            <tbody>
                <?php $no =1;
                foreach ($jadwal as $jad): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $jad['nama_dokter'] ?></td>
                        <td><?= $jad['hari'] ?></td>
                        <td><?= $jad['jam_mulai'] ?></td>
                        <td><?= $jad['jam_selesai'] ?></td>
                        <td><?= $jad['lokasi']?></td>
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