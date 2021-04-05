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
				<h3 class="text-center pertama"><i><?php echo $nama; ?></i> dari <i><?php echo $asal; ?></i> Berhasil Terdaftar </h3>
				
				<div class="row">
					<div class="col-md-6 offset-md-3">
						
                            <p class="text-danger">Terima kasih sudah mendaftar harap <i> Secreenshoot Bukti pendaftaran </i> ini untuk ditunjukan saat Registrasi dan siapkan uang pas saat Registrasi,
                             serta Selalu Taati Protokol Kesehatan saat Menonton persembahan kami  :) Kami Tunggu Di Medan pementasan !!!</p>
                             
							<a href="<?php echo site_url('tiket') ?>" role="button"  class="btn btn-primary col-md-12 mb-3">Kembali</a>
							<br>
                           
						</form>
					</div>
				</div>
				
			</div>
		</div>
</section>
</main>	
<?php $this->load->view("user/footer.php") ?>





