<?php $this->load->view("user/head.php") ?>
<main>
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Berhasil Terdaftar</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="box-formulir bg">
	<div id="pendaftar" class="container-fluid pendaftar">
			<div class="container daftar">
				<h3 class="text-center pertama"><i><?php echo $nim; ?></i> atas Nama <i><?php echo $nm_pendaftar; ?></i> dari Berhasil Terdaftar </h3>
				
				<div class="row">
					<div class="col-md-6 offset-md-3">
						
                            <p class="text-danger">Terima kasih sudah mendaftar harap <i> Secreenshoot Bukti pendaftaran </i>
                             serta Selalu Taati Protokol Kesehatan :) Kami Tunggu Di pertemuan nanti !!!</p>
                             
							<a href="<?php echo site_url('') ?>" role="button"  class="btn btn-primary col-md-12 mb-3">Kembali</a>
							<br>
                           
						</form>
					</div>
				</div>
				
			</div>
		</div>
</section>
</main>	
<?php $this->load->view("user/footer.php") ?>





s