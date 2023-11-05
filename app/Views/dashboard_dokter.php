<?= $this->extend('layouts/app');?>
<?= $this->section('content') ?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Selamat Datang, Dokter Mail!</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Konsultasi Akan Datang</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Lihat Rincian</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Konsultasi Terselesaikan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Lihat Rincian</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                           
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Pasien Hari Ini
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id Pasien</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Umur</th>
                                            <th>No Hp</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Id Pasien</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Umur</th>
                                            <th>No Hp</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>P12345</td>
                                            <td>Jasmine</td>
                                            <td>Perempuan</td>
                                            <td>34</td>
                                            <td>082177655676</td>
                                            <td class="col justify-content-center text-center">
                                            <a class="btn btn-success" href="#">Telah Diperiksa</a> 
                                            <button type="button" class="btn btn-danger">Tidak Datang</button>
                                            </td>
                
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?=$this->endSection()?>