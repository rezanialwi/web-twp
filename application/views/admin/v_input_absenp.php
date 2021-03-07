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
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Absensi Pengurus</h6>
            </div>
				 <form class="user" action="<?php echo base_url(). 'absen_pengurus/tambah_aksi'; ?>" method="post">
               <div class="form-group">
               <label for="alamat"> Nama Anda :</label>
                  <input type="text" class="form-control form-control-user" name="nama_pengurus" placeholder="Nama Anda">
                </div>
               <div class="form-group">
				<label for="alamat"> Acara Sekarang :</label>
				<select class="custom-select" id="id_proker" autocomplete="off" name="id_proker" required>
						<option value="">--pilih--</option>
						<option value="1">Study Pentas 2020</option>
						<option value="2">Anniversary TWP 2020</option>
								</select>
							</div>
        
                <label for="alamat"> Status Sekarang :</label>
				<select class="custom-select" id="keterangan" autocomplete="off" name="keterangan" required>
						<option value="">--pilih--</option>
						<option value="Hadir">Hadir</option>
						<option value="Izin">Izin</option>
						<option value="Alfa">Alfa</option>
								</select>
							</div>
                <div class="form-group">
				<input type="submit" class="btn btn-primary btn-user btn-block" value="Tambah">
      
			</form>
        <br>
    <?php echo anchor('absen_pengurus/index','<button class="btn btn-danger btn-user btn-block">Kembali</button>'); ?>
				
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
