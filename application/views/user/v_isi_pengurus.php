  <?php $this->load->view("user/head.php") ?>

<main>
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Form Pengurus</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	
<section class="box-formulir bg">
	<div id="pendaftar" class="container-fluid pendaftar">
			<div class="container daftar">
				<h3 class="text-center pertama">Formulir Pengurus Anggota Teater Wasi Putih</h3>
				
				<div class="row">
					<div class="col-md-6 offset-md-3">
							 <form action="<?=base_url()?>add_pengurus/proses" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama">No Anggota : </label>
								<input type="text" class="form-control" id="no_anggota" placeholder="No Anggota" autocomplete="off" name="no_anggota" required>
                            </div>
							<div class="form-group">
								<label for="nama">Nama Lengkap : </label>
								<input type="text" class="form-control" id="nama" placeholder="Nama Lengkap"autocomplete="off" name="nama" required>
                            </div>
                            <div class="form-group">
								<label for="nis">NIM : </label>
								<input type="text" class="form-control" id="nim" placeholder="NIM" autocomplete="off" name="nim" required>
							</div>
				
							<div class="form-group">
								<label for="nama">Prodi : </label>
								<input type="text" class="form-control" id="prodi" placeholder="Prodi" autocomplete="off" name="prodi" required>
							</div>
                            <div class="form-group">
								<label for="alamat">No Telepon / WA : </label>
								<input type="number" class="form-control" id="no_wa" placeholder="Telp Anda" autocomplete="off" name="no_wa" required>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat : </label>
								<input type="text" class="form-control" id="alamat" placeholder="Alamat Anda" autocomplete="off" name="alamat" required>
							</div>
                            

                            <div class="form-group">
								<label for="nama">Jabatan Sekarang : </label>
								<input type="text" class="form-control" id="jabatan" placeholder="Jabatan Anda Ditwp" autocomplete="off" name="jabatan" required>                                                               
							</div>

							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="foto">Foto 3 x 4 :</label>
										<input type="file" class="form-control-file" id="foto" autocomplete="off" required="required" name="fotopost" required>
									<p class="text-danger">Foto Wajib Diisi ! File maksimal 2MB</p>
									</div>
								</div>
							<br>
							<button type="submit" class="btn btn-success col-md-12 mb-3" name="submit">Simpan</button>
                            <a href="<?php echo site_url('home') ?>" role="button"  class="btn btn-primary col-md-12 mb-3">Kembali</a>
						</form>
					</div>
				</div>
				
			</div>
		</div>
</section>
</main>
  <?php $this->load->view("user/footer.php") ?>