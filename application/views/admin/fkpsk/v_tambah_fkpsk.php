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
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Undangan</h6>
            </div>
				 <form class="user" action="<?php echo base_url(). 'fkpsk/tambah_aksi'; ?>" method="post">
               <div class="form-group">
               <label>Nama Organisasi : </label>
                  <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama Anda" required>
                </div>
                <div class="form-group">
                <label>Jumlah Orang: </label>
                  <input type="number" class="form-control form-control-user" name="jumlah" placeholder="Jumlah Orang">
                </div>
 
                <div class="form-group">
<label>Keterangan : </label>
<select class="form-control" id="jk"  autocomplete="off" name="ket">
									<option value="">--pilih--</option>
									<option value="Hadir">Hadir</option>
									<option value="Tidak Hadir">Tidak Hadir</option>
								</select> 
</div>

				<input type="submit" class="btn btn-primary btn-user btn-block" value="Tambah">
                <a href="<?php echo base_url().'fkpsk'; ?>" class="btn btn-danger btn-user btn-block">Kembali</a> 
			</form>
        <br>
        
				
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
