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
            <!-- Tabel Pasien -->
            <div id="tabelPasien" class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                        Daftar Pasien yang terdaftar
                </div>
            <div class="card-body">
                <a href="/dokter/rekamedis/create" class="btn btn-primary mb-2"><i class
                class="fa fa-plus"></i>&nbsp;Tambah Data</a>
            <table  id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th> Tanggal Lahir</th>
                        <th>Kontak</th>
                        <th>Validasi</th>                                           
                    </tr>
                </thead>
                <tbody>
                    <?php $no =1;
                    foreach($pasien as $user):?>
                    <tr>
                        <td> <?= $no++ ?></td>
                        <td><?= $user->email;?></td>
                        <td><?= $user->username;?></td>
                        <td><?= $user->nama_pasien;?></td>
                        <td><?= $user->tanggal_lahir;?></td>
                        <td><?= $user->nomor_kontak;?></td>
                        <td class="text-center" width="15%">
                            <?php
                            if ($user->validasi == 0) {
                                echo '<button type="button" class="btn btn-danger"> Belum Tervalidasi</button>';
                            } elseif ($user->validasi == 1) {
                                echo '<button type="button" class="btn btn-success">Tervalidasi</button>';
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