<?php if (in_groups('admin')):?>

<?= $this->extend('layouts/app');?>
<?= $this->section('content') ?>
<div class="col-12">
			<!-- Page title -->
			<div class="my-3 mx-3">
				<h3>Edit Data Dokter</h3>
				<hr>
			</div>
			<!-- Form START -->
            <form action="<?=base_url('/users/dokter/'. $dokter->id)?>" method="POST"  enctype="multipart/form-data">
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
									<label for="email" class="form-label">Email *</label>
									<input type="text" class="form-control" name="email" id="email" aria-label="Email" required value="<?= $dokter->email?>">
                                </div>
								<!-- Username -->
								<div class="col-md-6">
									<label  for="username" class="form-label">Username *</label>
									<input type="text" class="form-control" name="username" id="username" aria-label="Username" required value="<?= $dokter->username?>">
                                </div>
								<!-- Umur -->
								<div class="col-md-6">
									<label for="nama_dokter" class="form-label">Nama *</label>
									<input type="text" class="form-control " name="nama_dokter" id="nama_dokter" aria-label="Nama" required value="<?=$dokter->nama_dokter?>">                                    
                                </div>
								<!-- Nomor Kontak -->
								<div class="col-md-6">
									<label for="nomor_kontak" class="form-label">Nomor Kontak *</label>
									<input type="text" class="form-control" name="nomor_kontak" id="nomor_kontak"  aria-label="Nomor Kontak" required value="<?=$dokter->nomor_kontak?>">                                                          
                                </div>								
								<!-- Spesialis -->
								<div class="col-md-6">
									<label for="spesialisasi" class="form-label">Spesialisasi *</label>
									<input type="text" class="form-control" name="spesialisasi" id="spesialisasi"  aria-label="Spesialis" required value="<?=$dokter->spesialisasi?>">                                                          
                                </div>								
                                <div class="col-md-8 mt-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="<?=base_url('/')?>" class="btn btn-primary">Back</a>
								</div>
							</div> <!-- Row END -->
                        </div>    
                    </div>    
                </div>    
                </form> 
            </div>    

<?=$this->endSection()?>
<?php endif; ?>