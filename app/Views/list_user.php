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
            <!-- Tabel Pasien -->
            <div id="tabelPasien" class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                        Daftar Users
                </div>
            <div class="card-body">
                <a href="/users/create" class="btn btn-primary mb-2"><i class
                class="fa fa-plus"></i>&nbsp;Tambah Data</a>

        <table  id="datatablesSimple"> 
            <thead>
                <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no =1;
                foreach($result as $user):?>
                <tr> 
                    <td> <?= $no++ ?></td>
                    <td><?= $user->email?></td>
                    <td><?= $user->username?></td>
                    <td><?= $user->name?></td>
                    <td class="center">
                        <form action="/users/reset/<?=$user->id?>" method="post" class="d-inline">
                            <?= csrf_field() ?>                    
                            <button type="submit" class="btn btn-warning" role="button" onclick="return confirm('Apakah anda yakin?')">
                            Reset</button>
                        </form>

                        <form action="/users/delete/<?=$user->id?>" method="post" class="d-inline">
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