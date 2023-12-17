<?php if (in_groups('admin')):?>
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
                    <th>Aksi</th>
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
                    <td>
                        <form action="<?=base_url('/admin/jadwalpraktik/delete/' . $jad['id']) ?>" method="post" class="d-inline">
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