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
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pengurus</h6>
            </div>
				 <form action="<?=base_url()?>pengurus/proses" method="post" enctype="multipart/form-data" class="user">
                 <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="no_anggota" placeholder="No Anggota Anda">
                </div>    
               <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama Anda">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="nim" placeholder="Nim Anda">
                </div>
                  <input type="text" class="form-control form-control-user" name="prodi" placeholder="Prodi Anda">
                </div>
                 <div class="form-group">
                  <input type="number" class="form-control form-control-user" name="no_wa" placeholder="Telp Anda">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="alamat" placeholder="Alamat Anda">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="jabatan" placeholder="Jabatan Anda">
                </div>
                  <div class="form-group">
                  <input type="file" class="form-control form-control-user" name="fotopost" >
                </div>
				<input type="submit" class="btn btn-primary btn-user btn-block" value="Tambah"> 
			</form>
        <br>
    <?php echo anchor('pengurus/index','<button class="btn btn-danger btn-user btn-block">Kembali</button>'); ?>
				
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
