<?php if (in_groups('admin')):?> 

<?= $this->extend('layouts/app');?>
<?= $this->section('content') ?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            
                            <?= view('Myth\Auth\Views\_message_block')?>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Daftar Kunjungan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?=base_url('/admin/kunjungan')?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Registrasi Pasien Baru</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url('/users') ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tabel Pasien -->
                        <div id="tabelPasien" class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Daftar Pasien
                            </div>
                            <div class="card-body">
                                <table  id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th> Tanggal Lahir</th>
                                            <th>Kontak</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no =1;
                                        foreach($users as $user):?>
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
                                            <td class="text-center">
                                                <a href="<?= base_url('/users/pasien/edit/'. $user->id)?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i>Ubah</a>

                                                <form action="/users/delete/<?=$user->id?>" method="post" class="d-inline">
                                                    <?= csrf_field() ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-sm btn-danger" role="button" onclick="return confirm('Apakah anda yakin?')">
                                                    <i class="fas fa-trash-alt"></i>Hapus</button>
                                                </form>
                                            </td> 
                                        </tr>
                                        <?php endforeach; ?>         
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <!-- Tabel Dokter -->
                         <div id="tabelDokter" class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Daftar Dokter
                            </div>
                            <div class="card-body">
                                <table id="datatablesDokter">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Kontak</th>
                                            <th>Spesialis</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no =1;
                                        foreach($dokters as $dokter):?>
                                        <tr>
                                            <td> <?= $no++ ?></td>
                                            <td><?= $dokter->email;?></td>
                                            <td><?= $dokter->username;?></td>
                                            <td><?= $dokter->nama_dokter;?></td>
                                            <td><?= $dokter->nomor_kontak;?></td>
                                            <td><?= $dokter->spesialisasi;?></td>
                                            <td class="text-center" width="6%">
                                                <a href="<?= base_url('/users/dokter/edit/'. $dokter->id)?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i>Ubah</a>
                                                <form action="/users/delete/<?=$dokter->id?>" method="post" class="d-inline">
                                                    <?= csrf_field() ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-sm btn-danger" role="button" onclick="return confirm('Apakah anda yakin?')">
                                                    <i class="fas fa-trash-alt"></i>Hapus</button>
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

<!-- Profile Dokter -->
<?php elseif(in_groups('dokter')): ?>
<?= $this->extend('layouts/app');?>
<?= $this->section('content') ?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                        <?= view('Myth\Auth\Views\_message_block') ?>                            
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Kunjungan yang Akan Datang</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?=base_url('/dokter/jadwal/kunjungan')?>">Lihat Rincian</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Kunjungan yang Terselesaikan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?=base_url('/dokter/kunjungan')?>">Lihat Rincian</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>                         
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Kunjungan Pasien 
                            </div>
                        <div class="card-body">
                        <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Kunjungan</th>
                                <th>Nama Pasien</th>
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
                                <td><?= $kun["nama_pasien"];?></td>
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
                                <a href="<?= base_url('/dokter/kunjungan/edit/'. $kun['id']) ?>" class="btn btn-warning btn-sm mx-1">Opsi</a>
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


<?php elseif(in_groups('pasien')): ?>
<?= $this->extend('layouts/app');?>
<?= $this->section('content') ?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Selamat Datang <?= user()->username?></li>
                            
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Kunjungan Anda</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?=base_url('/pasien/jadwal/kunjungan')?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Kunjungan Terselesaikan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?=base_url('/pasien/kunjungan')?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Jadwal Kunjungan
                            </div>
                            <div class="card-body">
                            <?= view('Myth\Auth\Views\_message_block') ?>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Kunjungan</th>
                                            <th>Nama Dokter</th>
                                            <th>Status</th>                                           
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