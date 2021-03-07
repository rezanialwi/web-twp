
  <?php $this->load->view("user/head.php") ?>

<main>
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Form Absensi</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	
<section class="box-formulir bg">
	<div id="pendaftar" class="container-fluid pendaftar">
			<div class="container daftar">
				<h3 class="text-center pertama">Absensi Anggota Teater Wasi Putih</h3>
				
				<div class="row">
					<div class="col-md-6 offset-md-3">
			 <form class="user" action="<?php echo base_url(). 'absen_p/tambah_aksi'; ?>" method="post">
               <div class="form-group">
               <label for="alamat"> Nama Anda (angkatan):</label>
                  <input type="text" class="form-control form-control-user" name="nama_pengurus" placeholder="Nama Anda">
                </div>
               <div class="form-group">
				<label for="alamat">: Acara Sekarang</label>
				<select class="custom-select" id="id_proker" autocomplete="off" name="id_proker" required>
						<option value="">--pilih--</option>
						<option value="1">Study Pentas 2020</option>
						<option value="2">Anniversary TWP 2020</option>
								</select>
							</div>
                
                <div class="form-group">
                <label for="alamat"> : Status Sekarang </label>
				<select class="custom-select" id="keterangan" autocomplete="off" name="keterangan" required>
						<option value="">--pilih--</option>
						<option value="Hadir">Hadir</option>
						<option value="Izin">Izin</option>
						<option value="Alfa">Alfa</option>
								</select>
							</div>
                    <br>
			<input type="submit" class="btn btn-primary btn-user btn-block" value="Tambah">
            <br>
                  <a href="<?php echo site_url('home') ?>" role="button"  class="btn btn-warning col-md-12 mb-3">Kembali</a>
      
			</form>
					</div>
				</div>
				
			</div>
		</div>
</section>
</main>
<?php $this->load->view("user/footer.php") ?>