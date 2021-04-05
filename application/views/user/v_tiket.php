<?php $this->load->view("user/head.php") ?>
<main>
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Tiket</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="box-formulir bg">
	<div id="pendaftar" class="container-fluid pendaftar">
			<div class="container daftar">
				<h3 class="text-center pertama">Formulir Pendaftaran Tiket Nonton</h3>
				
				<div class="row">
					<div class="col-md-6 offset-md-3">
							 <form action="<?=base_url()?>tiket/proses" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama">Nama Lengkap : </label>
								<input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" autocomplete="off" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>" required>
                            </div>
							<div class="form-group">
								<label for="alamat">Alamat : </label>
								<input type="text" class="form-control" id="alamat" placeholder="Alamat Anda" autocomplete="off" name="alamat" value="<?=isset($_POST['alamat']) ? $_POST['alamat'] : ''?>" required>
							</div>
                            <div class="form-group">
								<label for="nama">Asal Kampus / Organisasi : </label>
								<input type="text" class="form-control" id="asal" placeholder="Asal Kampus / Organisasi anda" autocomplete="off" name="asal" value="<?=isset($_POST['asal']) ? $_POST['asal'] : ''?>" required>                                                               
							</div>
                            <div class="form-group">
								<label for="nama">No Telp/WA : </label>
								<input type="number" class="form-control" id="telp" placeholder="No Telp/WA anda" autocomplete="off" name="telp" value="<?=isset($_POST['telp']) ? $_POST['telp'] : ''?>" required>                                                               
							</div>
                            <div class="form-group">
								<label for="nama">Email: </label>
								<input type="email" class="form-control" id="email" placeholder="Email anda" autocomplete="off" name="email" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>" required>                                                               
							</div>
							<input type="hidden" class="form-control"  autocomplete="off" name="ket" value="Tidak Hadir">
                            <p class="text-danger">* Data Wajib Diisi ! Sebagai bukti saat menonton</p>
                            <p class="text-danger">* Kuota Penonton saat ini <b><?php echo $tiket['hasil']; ?>/60</b></p>
							
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





