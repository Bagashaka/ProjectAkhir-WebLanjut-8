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
            <!-- Tabel Medis -->
            <div id="tabelPasien" class="card mb-4">
                <div class="card-header"> 
                    <i class="fas fa-table me-1"></i>
                        Daftar Kunjungan
                </div>
            <div class="card-body">               
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Kunjungan</th>
                        <th>Nama Dokter</th>
                        <th>Status</th>
                        <th>Aksi</th>                                           
                    </tr>
                </thead> 
                <tbody>
                <?php $no =1;
                    foreach($kunjungan as $kun):?>
                    <tr>
                        <td> <?= $no++ ?></td>
                        <td><?= $kun['tanggal_kunjungan'];?></td>
                        <td><?= $kun["nama_dokter"];?></td>
                        <td class="text-center" width="6%">
                        <?php
                            if ($kun['validasi_kunjungan'] == 0) {
                                echo '<button type="button" class="btn btn-danger"> Belum Terselesaikan</button>';
                            } elseif ($kun["validasi_kunjungan"] == 1) {
                                echo '<button type="button" class="btn btn-success">Terselesaikan</button>';
                            }
                            ?>
                        </td> 
                        <td>
                        <form action="<?= base_url('/admin/kunjungan/delete/'. $kun['id']) ?>" method="post" class="d-inline">
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