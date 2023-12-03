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
                        Daftar Kunjungan
                </div>
            <div class="card-body">             
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Kunjungan</th>
                        <th>Nama Pasien</th>
                        <th>Keluhan</th>
                        <th>Diagnosa</th>
                        <th>Resep Obat</th>
                        <th>Status</th>                                                            
                    </tr>
                </thead> 
                <tbody>
                <?php $no =1;
                    foreach($kunjungan as $kun):?>
                    <tr>
                        <td> <?= $no++ ?></td>
                        <td><?= $kun['tanggal_kunjungan'];?></td>
                        <td><?= $kun["nama_pasien"];?></td>                        
                        <td><?= $kun['keluhan'];?></td>
                        <td><?= $kun['diagnosa'];?></td>
                        <td><?= $kun['resep_obat'];?></td>
                        <td class="text-center" width="6%">
                        <?php
                            if ($kun['validasi_kunjungan'] == 0) {
                                echo '<button type="button" class="btn btn-danger"> Belum Terselesaikan</button>';
                            } elseif ($kun["validasi_kunjungan"] == 1) {
                                echo '<button type="button" class="btn btn-success">Terselesaikan</button>';
                            }
                            ?>
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