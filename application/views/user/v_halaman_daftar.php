 <?php $this->load->view("user/head.php") ?>

<main>
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Info Pendaftaran</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--ini bagian boxnya nju-->
		<section class="box-formulir bg">
			<h4 class="pertama text-center">Prosedur Pendaftaran Calon Anggota </h4>

			<div class="box">
                <h4 class="kedua">Persyaratan :</h4>
				<ul class="list-group list-group-flush">
                <li class="list-group-item">- Mahasiswa aktif Politeknik Negeri Banjarmasin semester 1.</li>
                <li class="list-group-item">- Mengisi formulir pendaftaran yang disediakan.</li>
                <li class="list-group-item">- Memiliki minat di bidang seni Teater.</li>
                <h4 class="pertama">Cara Daftar :</h4>
                <li class="list-group-item">1. Peserta wajib mengisi formulir yang sudah disediakan dibawah ini.
                <!-- <a href="halaman_daftar" role="button"  class="btn btn-success btn-lg btn-block">Formulir Pendaftaran</a> -->
                </li>
                <li class="list-group-item">2. Setelah itu, cetak bukti pendaftrannya/download bukti pendaftaran.</li>
                <li class="list-group-item">3. Kumpul hardcopy bukti pendaftaran saat diadakan pertemuan (saat waktu memungkinkan, jika tidak simpan bukti 
                pendaftaran sampai ada info lebih lanjut).</li>
                <li class="list-group-item text-center"><b><i>Pendaftaran ditutup</i></b></li>
                 <li class="list-group-item text-center">Terima Kasih</li>
                <!-- <h4 class="pertama">Absensi Pengurus :</h4>
                <a href="<?php echo site_url('absen_p') ?>" role="button"  class="btn btn-primary btn-lg btn-block">Absensi Pengurus</a> -->
                 <!-- <h4 class="pertama">Absensi Calang :</h4>
                <a href="<?php echo site_url('absen_c') ?>" role="button"  class="btn btn-primary btn-lg btn-block">Absensi Calang</a> -->
                <!-- <a href="minat1" role="button"  class="btn btn-primary btn-lg btn-block">Update Formulir</a> -->
                </li>
                </ul>
				
			</div>
			
		</section>
</main>
 <?php $this->load->view("user/footer.php") ?>