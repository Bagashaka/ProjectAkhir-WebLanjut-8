<?php if (in_groups('admin')):?>

<?= $this->extend('layouts/app');?>
<?= $this->section('content') ?> 
		<div class="col-12">
			<!-- Page title --> 
			<div class="my-3 mx-3">
				<h3>My Profile</h3>
				<hr>
				<?php if(session()->getFlashdata('success')) : ?>
					<div class="alert alert-success" role="alert">
						<?= session()->getFlashdata('success')?>
					</div>
				<?php endif;?>
				<?php if(session()->getFlashdata('warning')):?>
					<div class="alert alert-danger" role="alert">
						<?= session()->getFlashdata('warning')?>
					</div>
				<?php endif;?>
				<?php if(session()->getFlashdata('error')):?>
					<div class="alert alert-danger" role="alert">
						<?= session()->getFlashdata('error')?>
					</div>
				<?php endif;?>
			</div>
			<!-- Form START -->
				<div class="row mb-1 gx-5">
					<!-- Contact detail -->
					<div class="col-xxl-8 mb-5 mb-xxl-0">
						<div class="bg-secondary-soft px-4 py-4 rounded">
							<div class="row g-3">
								<h4 class="mb-2 mt-0">Detail Kontak</h4>
								<!-- Nama -->
								<div class="col-md-6">
									<label class="form-label">Nama *</label>
									<input type="text" class="form-control" disabled aria-label="Nama" value="<?=user()->nama_admin?>">
								</div>
								<!-- Username -->
								<div class="col-md-6">
									<label class="form-label">Username *</label>
									<input type="text" class="form-control" disabled aria-label="Username" value="<?= user()->username?>">
								</div>
								<!-- Umur -->
								<div class="col-md-6">
									<label class="form-label">Umur *</label>
									<input type="text" class="form-control" disabled aria-label="Umur" value="<?=user()->umur_admin?>">
								</div>
								<!-- Alamat -->
								<div class="col-md-6">
									<label class="form-label">Alamat *</label>
									<input type="text" class="form-control" disabled aria-label="Alamat" value="<?=user()->alamat_admin?>">
								</div>
								<!-- Email -->
								<div class="col-md-6">
									<label class="form-label">Email *</label>
									<input type="text" class="form-control" disabled value="<?= user()->email?>">
								</div>
								<div class="col-md-8 mt-3">
									<a href="<?=base_url('/admin/profile/edit')?>" class="btn btn-primary">Edit Profil</a>
								</div>
							</div> <!-- Row END -->
                        </div>    
                    </div>    
                </div>    
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
				<div class="row mb-1 gx-5">
					<!-- Contact detail -->
					<div class="col-xxl-8 mb-5 mb-xxl-0">
						<div class="bg-secondary-soft px-4 py-4 rounded">
							<div class="row g-3">
								<h4 class="mb-2 mt-0">Detail Kontak</h4>
								<!-- Nama -->
								<div class="col-md-6">
									<label class="form-label">Nama *</label>
									<input type="text" class="form-control" disabled aria-label="Nama" value="<?= $dokter->nama_dokter;?>">
								</div>
								<!-- Username -->
								<div class="col-md-6">
									<label class="form-label">Username *</label>
									<input type="text" class="form-control" disabled aria-label="Username" value="<?= $dokter->username;?>">
								</div>
								<!-- Nomor Kontak -->
								<div class="col-md-6">
									<label class="form-label">Nomor Kontak *</label>
									<input type="text" class="form-control" disabled aria-label="Nomor Kontak" value="<?= $dokter->nomor_kontak;?>">
								</div>
								<!-- Spesialis -->
								<div class="col-md-6">
									<label class="form-label">Spesialisasi *</label>
									<input type="text" class="form-control" disabled aria-label="Alamat" value="<?= $dokter->spesialisasi;?>">
								</div>
								<!-- Email -->
								<div class="col-md-6">
									<label class="form-label">Email *</label>
									<input type="text" class="form-control" disabled value="<?= $dokter->email;?>">
								</div>
								<!-- Tombol Edit -->
								<div class="col-md-8 mt-3">
									<a href="<?=base_url('/dokter/profile/edit')?>" class="btn btn-primary">Edit Profil</a>
								</div>
							</div> <!-- Row END -->
                        </div>    
                    </div>    
                </div>    
            </div>

<?=$this->endSection()?>


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
				<div class="row mb-1 gx-2">
					<!-- Contact detail -->
					<div class="col-xxl-8 mb-5 mb-xxl-0">
						<div class="bg-secondary-soft px-4 py-4 rounded">
							<div class="row g-3">
								<h4 class="mb-2 mt-0">Detail Kontak</h4>
								<!-- Nama -->
								<div class="col-md-6">
									<label class="form-label">Nama *</label>
									<input type="text" class="form-control" disabled aria-label="Nama" value="<?= $pasien->nama_pasien;?>">
								</div>
								<!-- Username -->
								<div class="col-md-6">
									<label class="form-label">Username *</label>
									<input type="text" class="form-control" disabled aria-label="Username" value="<?=$pasien->username;?>">
								</div>
								<!-- Tanggal Lahir -->
								<div class="col-md-6">
									<label class="form-label">Tanggal Lahir *</label>
									<input type="text" class="form-control" disabled aria-label="Tanggal Lahir" value="<?=$pasien->tanggal_lahir;?>">
								</div>
								<!-- Alamat -->
								<div class="col-md-6">
									<label class="form-label">Alamat *</label>
									<input type="text" class="form-control" disabled aria-label="Alamat" value="<?=$pasien->alamat_pasien;?>">
								</div>
								<!-- Nomor Kontak -->
								<div class="col-md-6">
									<label class="form-label">Nomor Kontak *</label>
									<input type="text" class="form-control" disabled aria-label="Nomor Kontak" value="<?=$pasien->nomor_kontak;?>">
								</div>
								<!-- Validasi -->
								<div class="col-md-6">
									<label class="form-label">Status *</label>
									<?php
										$statusValidasi = ($pasien->validasi == 0) ? 'Belum Tervalidasi' : 'Tervalidasi';
									?>
									<input type="text" class="form-control" disabled aria-label="Validasi" value="<?= $statusValidasi; ?>">
								</div>
								<!-- Email -->
								<div class="col-md-6">
									<label class="form-label">Email *</label>
									<input type="text" class="form-control" disabled value="<?=$pasien->email;?>">
								</div>

								<!-- Tombol Edit -->
								<div class="col-md-8 mt-3">
									<a href="<?=base_url('/pasien/profile/edit')?>" class="btn btn-primary">Edit Profil</a>
								</div>
							</div> <!-- Row END -->
                        </div>    
                    </div>    
                </div>    
 </div>
<?=$this->endSection()?>
<?php endif; ?>