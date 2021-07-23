  <?php $this->load->view("user/head.php") ?>

<main>
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Form Daftar Calang</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	
<section class="box-formulir bg">
	<div id="pendaftar" class="container-fluid pendaftar">
			<div class="container daftar">
				<h3 class="text-center pertama">Formulir Daftar Calon Anggota Teater Wasi Putih</h3>
				
				<div class="row">
					<div class="col-md-6 offset-md-3">
							 <form action="<?=base_url()?>halaman_daftar/proses" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama">NIM : </label>
								<input type="text" class="form-control" id="nim" placeholder="NIM Anda" autocomplete="off" name="nim" required>
                            </div>
							<div class="form-group">
								<label for="nama">Nama Lengkap : </label>
								<input type="text" class="form-control" id="nm_pendaftar" placeholder="Nama Lengkap"autocomplete="off" name="nm_pendaftar" required>
                            </div>
                            <div class="form-group">
								<label for="nis">Jurusan : </label>
								<select class="form-control" id="jurusan" placeholder="Jurusan"autocomplete="off" name="jurusan" required>
									<option value="">--pilih--</option>
									<option value="Electro">Elektro</option>
									<option value="Mesin">Mesin</option>
									<option value="Sipil">Sipil</option>
									<option value="Akutansi">Akuntansi</option>
									<option value="Bisnis">Bisnis</option>
								</select>
							</div>
				
							<div class="form-group">
								<label for="nama">Prodi : </label>
								<input type="text" class="form-control" id="prodi" placeholder="Prodi" autocomplete="off" name="prodi" required>
							</div>
							<div class="form-group">
								<label for="nama">Tempat Lahir : </label>
								<input type="text" class="form-control" id="tmp_lahir" placeholder="Tempat Lahir" autocomplete="off" name="tmp_lahir" required>
							</div>
                            <div class="form-group">
								<label for="alamat">Tanggal Lahir : </label>
								<input type="date" class="form-control" id="tgl_lahir" placeholder="Telp Anda" autocomplete="off" name="tgl_lahir" required>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat : </label>
								<input type="text" class="form-control" id="alamat" placeholder="Alamat Anda" autocomplete="off" name="alamat" required>
							</div>
							<div class="form-group">
								<label for="alamat">No Telepon / WA : </label>
								<input type="number" class="form-control" id="no_wa" placeholder="Telp Anda" autocomplete="off" name="no_wa" required>
							</div>
                            

                            <div class="form-group">
								<label for="nama">Agama : </label>
								<select class="form-control" id="agama" placeholder="Agama Anda" autocomplete="off" name="agama" required>
									<option value="">--pilih--</option>
									<option value="Islam">Islam</option>
									<option value="Protestan">Protestan</option>
									<option value="Katolik">Katolik</option>
									<option value="Hindu">Hindu</option>
									<option value="Buddha">Buddha</option>
									<option value="Konghucu">Konghucu</option>
								</select>                                                               
							</div>
								<label for="jenis" class="info1">Jenis Kelamin :	</label>
							<div class="custom-control custom-radio custom-control-inline-user ">
								<input class="custom-control-input" type="radio" name="jenkel" value="laki-laki" id="laki">
								<label class="custom-control-label" for="laki">
									Laki-Laki
								</label>
							</div>
              <div class="custom-control custom-radio custom-control-inline info1">
								<input class="custom-control-input" type="radio" name="jenkel" value="perempuan" id="perempuan">
								<label class="custom-control-label" for="perempuan">
									Perempuan
								</label>
							</div>
							<br>
                <div class="form-group">
                  <label for="alamat"> Pengalaman Organisasi :</label>
                  <input type="text" class="form-control" name="organisasi" placeholder="Pengalaman Organisasi Anda">
                </div>
                <div class="form-group">
                  <label for="alamat"> Pengalaman Berkesenian :</label>
                  <input type="text" class="form-control" name="berkesenian" placeholder="Pengalaman Berksenian Anda">
                </div>
                <div class="form-group">
                  <label for="alamat"> Minat Anda :</label>
                  <input type="text" class="form-control" name="minat" placeholder="Contoh : aktor, musik, setting dll">
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