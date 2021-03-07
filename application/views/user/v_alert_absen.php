
  <?php $this->load->view("user/head.php") ?>

<main>
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2> Notifikasi</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	
<section class="box-formulir bg">
	<div id="pendaftar" class="container-fluid pendaftar">
			<div class="container daftar">
				<h3 class="text-center pertama">Terima Kasih !</h3>
                <h3 class="text-center pertama">Data Telah Tersimpan</h3>
			 <a href="<?php echo site_url('absen_p') ?>" role="button"  class="btn btn-warning col-md-12 mb-3">absensi pengurus</a>
             <a href="<?php echo site_url('absen_c') ?>" role="button"  class="btn btn-warning col-md-12 mb-3">absensi calang</a>
				
			</div>
		</div>
</section>
</main>
<?php $this->load->view("user/footer.php") ?>