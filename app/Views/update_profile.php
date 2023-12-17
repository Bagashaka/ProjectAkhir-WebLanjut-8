<?php if (in_groups('admin')):?>

<?= $this->extend('layouts/app');?>
<?= $this->section('content') ?>
<div class="col-12">
			<!-- Page title -->
			<div class="my-3 mx-3">
				<h3>My Profile</h3>
				<hr>
			</div>
			<!-- Form START -->
            <form action="<?=base_url('/admin/profile/edit/'.user_id())?>" method="POST"  enctype="multipart/form-data">
            <?= csrf_field() ?>
			<input type="hidden" name="_method" value="PUT">
				<div class="row mb-1 gx-5">
					<!-- Contact detail -->
					<div class="col-xxl-8 mb-5 mb-xxl-0">
						<div class="bg-secondary-soft px-4 py-4 rounded">
							<div class="row g-3">
								<h4 class="mb-2 mt-0">Detail Kontak</h4>
								<!-- Nama -->
								<div class="col-md-6">
									<label for="nama_admin" class="form-label">Nama *</label>
									<input type="text" class="form-control" name="nama_admin" id="nama_admin" aria-label="Nama" required value="<?= $admin->nama_admin?>">
                                </div>
								<!-- Username -->
								<div class="col-md-6">
									<label  for="username" class="form-label">Username *</label>
									<input type="text" class="form-control" name="username" id="username" aria-label="Username" required value="<?= $admin->username?>">
 
                                </div>
								<!-- Umur -->
								<div class="col-md-6">
									<label for="umur_admin" class="form-label">Umur *</label>
									<input type="text" class="form-control " name="umur_admin" id="umur_admin" aria-label="Umur" required value="<?=$admin->umur_admin?>">                                    
                                </div>
								<!-- Alamat -->
								<div class="col-md-6">
									<label for="alamat_admin" class="form-label">Alamat *</label>
									<input type="text" class="form-control" name="alamat_admin" id="alamat_admin"  aria-label="Alamat" required value="<?=$admin->alamat_admin?>">                                                          
                                </div>
								<!-- Email -->
								<div class="col-md-6">
									<label for="email" class="form-label">Email *</label>
									<input type="text" class="form-control" name="email" id="email" required value="<?=$admin->email?> ">                                                                                                    
                                </div>
                                <div class="col-md-8 mt-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="<?=base_url('/admin/profile')?>" class="btn btn-primary">Back</a>
								</div>
							</div> <!-- Row END -->
                        </div>    
                    </div>    
                </div>    
                </form> 
            </div>    

<?=$this->endSection()?>

<!-- Profile Dokter -->
<?php elseif(in_groups('dokter')): ?>
<?= $this->extend('layouts/app');?>
<?= $this->section('content') ?>
		
<div class="col-12">
			<!-- Page title -->
			<div class="my-3 mx-3">
				<h3>My Profile</h3>
				<hr>
			</div>
			<!-- Form START -->
            <form action="<?=base_url('/dokter/profile/edit/'.user_id())?>" method="POST"  enctype="multipart/form-data">
            <?= csrf_field() ?>
			<input type="hidden" name="_method" value="PUT">
				<div class="row mb-1 gx-5">
					<!-- Contact detail -->
					<div class="col-xxl-8 mb-5 mb-xxl-0"> 
						<div class="bg-secondary-soft px-4 py-4 rounded">
							<div class="row g-3">
								<h4 class="mb-2 mt-0">Detail Kontak</h4>
								<!-- Nama -->
								<div class="col-md-6">
									<label for="nama_dokter" class="form-label">Nama *</label>
									<input type="text" class="form-control" name="nama_dokter" id="nama_dokter" aria-label="Nama" required value="<?= $dokter->nama_dokter?>">
                                </div>
								<!-- Username -->
								<div class="col-md-6">
									<label  for="username" class="form-label">Username *</label>
									<input type="text" class="form-control" name="username" id="username" aria-label="Username" required value="<?= $dokter->username?>">
 
                                </div>
								<!-- Umur -->
								<div class="col-md-6">
									<label for="nomor_kontak" class="form-label">Nomor Kontak *</label>
									<input type="text" class="form-control " name="nomor_kontak" id="nomor_kontak" aria-label="Nomor Kontak" required value="<?=$dokter->nomor_kontak?>">                                    
                                </div>
								<!-- Alamat -->
								<div class="col-md-6">
									<label for="spesialisasi" class="form-label">Spesialisasi *</label>
									<input type="text" class="form-control" name="spesialisasi" id="spesialisasi"  aria-label="spasialisasi" required value="<?=$dokter->spesialisasi?>">                                                          
                                </div>
								<!-- Email -->
								<div class="col-md-6">
									<label for="email" class="form-label">Email *</label>
									<input type="text" class="form-control" name="email" id="email" required value="<?=$dokter->email?> ">                                                                                                    
                                </div>
                                <div class="col-md-8 mt-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="<?=base_url('/dokter/profile')?>" class="btn btn-primary">Back</a>
								</div>
							</div> <!-- Row END -->
                        </div>    
                    </div>    
                </div>    
                </form> 
            </div>
<?=$this->endSection()?>

<!-- Edit Profile User -->
<?php elseif(in_groups('pasien')): ?>
<?= $this->extend('layouts/app');?>
<?= $this->section('content') ?>
<div class="col-12">
			<!-- Page title -->
			<div class="my-3 mx-3">
				<h3>My Profile</h3>
				<hr>
			</div>
			<!-- Form START -->
            <form action="<?=base_url('/pasien/profile/edit/'.user_id())?>" method="POST"  enctype="multipart/form-data">
            <?= csrf_field() ?>
			<input type="hidden" name="_method" value="PUT">
				<div class="row mb-1 gx-5">
					<!-- Contact detail -->
					<div class="col-xxl-8 mb-5 mb-xxl-0">
						<div class="bg-secondary-soft px-4 py-4 rounded">
							<div class="row g-3">
								<h4 class="mb-2 mt-0">Detail Kontak</h4>
								<!-- Nama -->
								<div class="col-md-6">
									<label class="form-label">Nama *</label>
									<input type="text" class="form-control" name="nama_pasien" aria-label="Nama" value="<?= $pasien->nama_pasien;?>">
								</div>
								<!-- Username -->
								<div class="col-md-6">
									<label class="form-label">Username *</label>
									<input type="text" class="form-control" name="username" aria-label="Username" value="<?=$pasien->username;?>">
								</div>
								<!-- Tanggal Lahir -->
								<div class="col-md-6">
									<label class="form-label">Tanggal Lahir *</label>
									<input type="date" class="form-control" name="tanggal_lahir" aria-label="Tanggal Lahir" value="<?=$pasien->tanggal_lahir;?>">
								</div>
								<!-- Alamat -->
								<div class="col-md-6">
									<label class="form-label">Alamat *</label>
									<input type="text" class="form-control" name="alamat_pasien" aria-label="Alamat" value="<?=$pasien->alamat_pasien;?>">
								</div>
								<!-- Nomor Kontak -->
								<div class="col-md-6">
									<label class="form-label">Nomor Kontak *</label>
									<input type="text" class="form-control" name="nomor_kontak" aria-label="Nomor Kontak" value="<?=$pasien->nomor_kontak;?>">
								</div>
								<!-- Email -->
								<div class="col-md-6">
									<label class="form-label">Email *</label>
									<input type="text" class="form-control" name="email"  value="<?=$pasien->email;?>">
								</div>
								<div class="col-md-8 mt-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="<?=base_url('/pasien/profile')?>" class="btn btn-primary">Back</a>
								</div>
							</div> <!-- Row END -->
                        </div>    
                    </div>   
                </div>    
                </form> 
            </div>

<?=$this->endSection()?>
<?php endif; ?>