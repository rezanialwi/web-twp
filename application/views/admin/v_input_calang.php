<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("admin/partial/head.php") ?>

</head>

<body id="page-top">
        <?php $this->load->view("admin/partial/sidebar.php") ?>
    
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">


           
             <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Calang</h6>
            </div>
				 <form action="<?=base_url()?>calang/proses" method="post" enctype="multipart/form-data" class="user">
                 <div class="form-group">
                   <label for="alamat"> NIM :</label>
                  <input type="text" class="form-control form-control-user" name="nim" placeholder="Nim Anda">
                </div>
               <div class="form-group">
                 <label for="alamat"> Nama Lengkap :</label>
                  <input type="text" class="form-control form-control-user" name="nm_pendaftar" placeholder="Nama Anda">
                </div>
                <div class="form-group">
								<label for="nama"> Jurusan :</label>
								<select class="custom-select" id="jurusan" placeholder="Jurusan"autocomplete="off" name="jurusan" required>
									<option value="">--pilih--</option>
									<option value="Electro">Elektro</option>
									<option value="Mesin">Mesin</option>
									<option value="Sipil">Sipil</option>
									<option value="Akutansi">Akuntansi</option>
									<option value="Bisnis">Bisnis</option>
								</select>
							</div>
                 <div class="form-group">
                   <label for="alamat"> Prodi :</label>
                  <input type="text" class="form-control form-control-user" name="prodi" placeholder="Prodi Anda">
                </div>
                 <div class="form-group">
                   <label for="alamat"> Tempat Lahir :</label>
                  <input type="text" class="form-control form-control-user" name="tmp_lahir" placeholder="Tempat Lahir Anda">
                </div>
                 <div class="form-group">
                   <label for="alamat"> Tanggal Lahir :</label>
                  <input type="date" class="form-control form-control-user" name="tgl_lahir" placeholder="Tanggal Lahir Anda">
                </div>
                <div class="form-group">
                  <label for="alamat"> Alamat :</label>
                  <input type="text" class="form-control form-control-user" name="alamat" placeholder="Alamat Anda">
                </div>
                <div class="form-group">
                  <label for="alamat"> No Telp/Wa :</label>
                  <input type="number" class="form-control form-control-user" name="no_wa" placeholder="Telp Anda">
                </div>
                <div class="form-group">
								<label for="alamat"> Agama :</label>
								<select class="custom-select" id="agama" placeholder="Agama Anda" autocomplete="off" name="agama" required>
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
                  <input type="text" class="form-control form-control-user" name="organisasi" placeholder="Pengalaman Organisasi Anda">
                </div>
                <div class="form-group">
                  <label for="alamat"> Pengalaman Berkesenian :</label>
                  <input type="text" class="form-control form-control-user" name="berkesenian" placeholder="Pengalaman Berksenian Anda">
                </div>
                <div class="form-group">
                  <label for="alamat"> Minat Anda :</label>
                  <input type="text" class="form-control form-control-user" name="minat" placeholder="Minat Anda">
                </div>
                  <div class="form-group">
                    <label for="alamat">Foto :</label>
                  <input type="file" class="form-control form-control-user" name="fotopost" >
                </div>
				<input type="submit" class="btn btn-primary btn-user btn-block" value="Tambah">
      
			</form>
        <br>
    <?php echo anchor('calang/index','<button class="btn btn-danger btn-user btn-block">Kembali</button>'); ?>
				
  </div>
	 
          </div>

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->

  <!-- End of Page Wrapper -->

<?php $this->load->view("admin/partial/footer.php") ?>

</body>

</html>
